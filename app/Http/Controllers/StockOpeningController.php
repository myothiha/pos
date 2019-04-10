<?php

namespace App\Http\Controllers;

use App\StockOpening;
use App\Item;
use App\Store;
use App\Type;
use App\Category;
use App\Location;
use App\Color;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use Throwable;

class StockOpeningController extends Controller
{
    public function __construct()
    {
        $this->location = new Location();
        $this->item = new Item();
        $this->type = new Type();
        $this->category = new Category();
        $this->color = new Color();
        $this->stockOpening = new StockOpening();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $stockOpenings = StockOpening::all();
        return view('admin.stockopening.index', [
            'stockOpenings' => $stockOpenings
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getItem()
    {
        $types = $this->type->all();
        $categories = $this->category->all();
        $colors = $this->color->all();

        return view("admin.stockopening.getItem", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function searchItems(Request $request)
    {
        $types = $this->type->all();
        $categories = $this->category->all();
        $colors = $this->color->all();

        $items = Item::query()
            ->when($request->itemCode, function ($q) use ($request) {
                return $q->where('itemCode', 'LIKE', "%{$request->itemCode}%");
            })
            ->when($request->itemName, function ($q) use ($request) {
                return $q->where('name', 'LIKE', "%{$request->itemName}%");
            })
            ->when($request->color_id, function ($q) use ($request) {
                return $q->where('color_id', '=', $request->color_id);
            })
            ->when($request->type_id, function ($q) use ($request) {
                return $q->where('type_id', '=', $request->type_id);
            })
            ->when($request->category_id, function ($q) use ($request) {
                return $q->where('category_id', '=', $request->category_id);
            })
            ->with('color')->with('category')->get();

        return view("admin.stockopening.getItem", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Item $item)
    {

        $locations = $this->location->all();
        return view("admin.stockopening.create", [
            'item' => $item,
            'locations' => $locations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Item $item
     * @return Response
     */
    public function store(Request $request, Item $item)
    {
        $request->validate([
            'quantity' => 'required',
        ]);

        $stockOpening = new StockOpening();
        $stockOpening->user_id = Auth::user()->id;
        $stockOpening->location_id = $request->location_id;
        $stockOpening->quantity = $request->quantity;

        try {
            DB::transaction(function () use ($stockOpening, $item) {
                $item->stockOpenings()->save($stockOpening);

                $store = Store::firstOrNew([
                    'location_id' => $stockOpening->location_id,
                    'item_id' => $item->id,
                ]);

                $store->quantity += $stockOpening->quantity;
                $store->save();
            });
        } catch (Throwable $e) {
            Log::error('Error Creating Stock Opening');
            dd($e->getMessage()); //Todo Remove
        }

        $request->session()->flash('alert-success', 'StockOpening has been processed!');
        return redirect()->action('StockOpeningController@index');
    }


    /**
     * Display the specified resource.
     *
     * @param StockOpening $stockOpening
     * @return Response
     */
    public function show(StockOpening $stockOpening)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param StockOpening $stockOpening
     * @return Response
     */
    public function edit(StockOpening $stockOpening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param StockOpening $stockOpening
     * @return Response
     */
    public function update(Request $request, StockOpening $stockOpening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StockOpening $stockOpening
     * @return Response
     */
    public function destroy(StockOpening $stockOpening)
    {
        //
    }
}
