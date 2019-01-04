<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Sale;
use App\Item;
use App\Store;
use App\Supplier;
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

    private $location;
    private $customer;
    private $sale;
    private $item;
    private $type;
    private $category;
    private $color;
    private $supplier;

    public function __construct()
    {
        $this->location = new Location();
        $this->customer = new Customer();
        $this->sale = new Sale();
        $this->item = new Item();
        $this->type = new Type();
        $this->category = new Category();
        $this->color = new Color();
        $this->supplier = new Supplier();
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
//        dd($request->all());
        $sale = new Sale();
        $sale->voucherNo = $request->voucherNo;
        $sale->processType = Constants::SALE;
        $sale->saleType = $request->saleType;
        $sale->location_id = $request->location_id;
        $sale->customer_id = $request->customer_id;
        $sale->totalAmount = Cart::total('2');
        $sale->paid = $request->paid ?? '1000';
        $sale->balance = $request->balance ?? 100;
        $sale->remark = $request->remark;
        $sale->isPaid = $request->isPaid ?? 'Paid';

//        dd($sale->toArray());


        try {
            DB::transaction(function () use ($sale) {

                $sale->save();

                foreach(Cart::content() as $item) {

                    $total = $item->qty * $item->price;

                    $sale->items()->attach($item->id, ['quantity' => $item->qty, 'price' => $item->price, 'total' => $total]);

                    $store = Store::where([
                        ['location_id', '=', $sale->location_id],
                        ['item_id', '=', $item->id],
                    ])->get()->first();

                    $store->quantity -= $item->qty;
                    $store->save();
                }

            });
        } catch (\Throwable $e) {
            Log::error('Sales Error : ' . $e->getMessage());
            dd($e->getMessage());
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
