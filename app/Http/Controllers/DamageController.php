<?php

namespace App\Http\Controllers;

use App\Damage;
use App\Location;
use App\Item;
use App\Store;
use App\Type;
use App\Category;
use App\Color;
use Auth;
use DB;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Throwable;

class DamageController extends Controller
{
    public function __construct()
    {
        $this->item = new Item();
        $this->location = new Location();
        $this->type = new Type();
        $this->category = new Category();
        $this->color = new Color();
        $this->damage = new Damage();
    }

    /**
     * @return Factory|View
     */
    public function index(){
        $damages = Damage::all();
        return view('admin.damage.index', [
            'damages' => $damages
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

        return view("admin.damage.getItem", [
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

            return view("admin.damage.getItem", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
            'items' => $items,
        ]);
    }

    public function create(Item $item){
        $locations = $this->location->all();
        return view("admin.damage.create", [
            'item' => $item,
            'locations' => $locations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, Item $item)
    {
        $request->validate([
            'quantity' => 'required',
        ]);

        $damage = new Damage();
        $damage->user_id = Auth::user()->id;
        $damage->location_id = $request->location_id;
        $damage->quantity = $request->quantity;

        try {
            DB::transaction(function () use ($damage, $item) {
                $item->damages()->save($damage);
                
                $store = Store::firstOrNew([
                    'location_id' => $damage->location_id,
                    'item_id' => $item->id,
                ]);

                $store->quantity -= $damage->quantity;
                $store->save();
            });
        } catch (Throwable $e) {
        }

        $request->session()->flash('alert-success', 'Damage has been processed!');
        return redirect()->action('DamageController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Damage $damage
     * @return Response
     */
    public function show(Damage $damage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Damage $damage
     * @return Response
     */
    public function edit(Damage $damage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Damage $damage
     * @return Response
     */
    public function update(Request $request, Damage $damage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Damage $damage
     * @return Response
     */
    public function destroy(Damage $damage)
    {
        //
    }
}
