<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Item;
use App\Store;
use App\Type;
use App\Category;
use App\Color;
use App\Customer;
use App\Location;
use Cart;
use DB;
use Illuminate\Http\Request;
use Log;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->location = new Location();
        $this->customer = new Customer();
        $this->sale = new Sale();
        $this->item = new Item();
        $this->type = new Type();
        $this->category = new Category();
        $this->color = new Color();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**s
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = $this->location->all();
        $customers = $this->customer->all();
        $types = $this->type->all();
        $items = $this->item->all();
        $categories = $this->category->all();
        $colors = $this->color->all();

        return view("admin.sale.create", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
            'items' => $items,
            'customers' => $customers,
            'locations' => $locations,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->voucherNo = $request->voucherNo;
        $sale->processType = $request->processType;
        $sale->saleType = $request->saleType;
        $sale->location_id = $request->location_id;
        $sale->customer_id = $request->customer_id;
        $sale->totalAmount = Cart::total('2');
        $sale->paid = $request->paid;
        $sale->balance = $request->balance;
        $sale->remark = $request->remark;
        $sale->isPaid = $request->isPaid;


        try {
            DB::transaction(function () use ($sale) {

                $sale->save();


                foreach(Cart::content() as $item) {
//                    echo 'You have ' . $row->qty . ' items of ' . $row->model->name . ' with description: "' . $row->model->description . '" in your cart.';
                    $total = $item->qty * $item->price;
                    $sale->items()->attach($item->id, ['quantity' => $item->qty, 'price' => $item->price, 'total' => $total]);

                    $store = Store::where('location_id', $sale->location_id)->andWhere('item_id', $item->id);

                    $store->quantity -= $item->qty;
                }

            });
        } catch (\Throwable $e) {
            Log::error('Sales Error : ' . $e->getMessage());


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
