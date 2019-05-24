<?php

namespace App\Http\Controllers;

use App\StockIn;
use App\Item;
use App\Store;
use App\Type;
use App\Category;
use App\Color;
use App\Supplier;
use App\Location;
use Auth;
use Cart;
use App\Constants\Cart as CartConst;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use PHPUnit\Framework\Constraint\Count;
use Throwable;

class StockInController extends Controller
{
    public function __construct()
    {
        $this->supplier = new Supplier();
        $this->location = new Location();
        $this->item = new Item();
        $this->type = new Type();
        $this->category = new Category();
        $this->color = new Color();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $stockIns = StockIn::all();
        return view('admin.stockin.index',[
            'stockIns' => $stockIns
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $locations = $this->location->all();
        $suppliers = $this->supplier->all();
        $types = $this->type->all();
        $items = $this->item->all();
        $categories = $this->category->all();
        $colors = $this->color->all();

        return view("admin.stockin.create", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
            'items' => $items,
            'locations' => $locations,
            'suppliers' => $suppliers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $stockIn = new StockIn();
        $stockIn->user_id = Auth::user()->id;
        $stockIn->supplier_id = $request->supplier_id;
        $stockIn->location_id = $request->location_id;
        $stockIn->voucherNo = $request->voucherNo;
        $stockIn->remark = $request->remark;

        if(Cart::instance(CartConst::STOCK_IN)->content()->isEmpty()){
            $request->session()->flash('alert-danger', 'Stock In cannot be processed without any item!');
            return redirect()->action('StockInController@create');
        }

        try {
            DB::transaction(function () use ($stockIn) {
                $stockIn->save();

                foreach (Cart::instance(CartConst::STOCK_IN)->content() as $item)
                {
                    $stockIn->items()->attach($item->id, ['quantity' => $item->qty]);

                    $store = Store::firstOrNew([
                        'location_id' => $stockIn->location_id,
                        'item_id' => $item->id,
                    ]);

                    $store->quantity += $item->qty;
                    $store->save();

                    Cart::instance(CartConst::STOCK_IN)->destroy();
                }
            });
        } catch (Throwable $e) {
            dd($e->getMessage()); // Todo Remove
        }

        $request->session()->flash('alert-success', 'Stock In has been processed!');
        return redirect()->action('StockInController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param StockIn $stockIn
     * @return Response
     */
    public function show(StockIn $stockIn)
    {
        $items = $stockIn->items;
        return view('admin.stockin.detail', [
            'items' => $items,
            'stockIn' => $stockIn
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param StockIn $stockIn
     * @return Response
     */
    public function edit(StockIn $stockIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param StockIn $stockIn
     * @return void
     */
    public function update(Request $request, StockIn $stockIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param StockIn $stockIn
     * @return Response
     * @throws Exception
     */
    public function destroy(Request $request, StockIn $stockIn)
    {
        foreach ($stockIn->items as $item) {
            $store = Store::firstOrNew([
                'location_id' => $stockIn->location_id,
                'item_id' => $item->id,
            ]);

            if ($store->quantity < $item->pivot->quantity) {
                $request->session()->flash('alert-danger', 'Stocks have been already sold!!');
                return redirect()->action('StockinController@index');
            }
        }
        foreach ($stockIn->items as $item){
            DB::table('stock_in_details')
                ->where('stock_in_id', $stockIn->id)
                ->where('item_id', $item->id)
                ->update(array('deleted_at' => DB::raw('NOW()')));

            $store = Store::firstOrNew([
                'location_id' => $stockIn->location_id,
                'item_id' => $item->id,
            ]);

            $store->quantity -= $item->pivot->quantity;
            $store->save();

        }

        $stockIn->delete();
        $request->session()->flash('alert-danger', 'Stock In was successfully deleted!');
        return redirect()->action('StockInController@index');
    }
}
