<?php

namespace App\Http\Controllers;

use App\Constants;
use App\CreditBalance;
use App\Receivable;
use App\Sale;
use App\Item;
use App\Store;
use App\Supplier;
use App\Type;
use App\Category;
use App\Color;
use App\Customer;
use App\Location;
use Auth;
use Cart;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use App\Constants\Cart as CartConst;
use Throwable;

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
     * @return Response
     */
    public function index()
    {
        $sales = Sale::orderBy('created_at', 'dec')->get();
        return view('admin.sale.index', [
           'sales' => $sales
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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $sale = new Sale();
        $sale->user_id = Auth::user()->id;
        $sale->voucherNo = $request->voucherNo;
        $sale->processType = Constants::SALE;
        $sale->saleType = $request->saleType;
        $sale->location_id = $request->location_id;
        $sale->customer_id = $request->customer_id;
        $sale->totalAmount = Cart::instance(CartConst::SALE)->total(0);
        $sale->paid = $request->paid ?? $request->totalAmtount;
        $sale->balance = $request->balance ?? 0;
        $sale->remark = $request->remark;
        $sale->isPaid = $request->isPaid ?? Constants::TRUE;

//        dd($sale->toArray());
        if(Cart::instance(CartConst::SALE)->content()->isEmpty()){
            $request->session()->flash('alert-danger', 'Sale cannot be processed without any item!');
            return redirect()->action('SaleController@create');
        }

        try {
            DB::transaction(function () use ($request, $sale) {
                
                foreach(Cart::instance(CartConst::SALE)->content() as $item){
                    $store = Store::firstOrNew([
                        'location_id' => $sale->location_id,
                        'item_id' => $item->id,
                    ]);
                    if($store->quantity < $item->qty){
                        $sale->items()->detach();
                        $sale->delete();
                        $request->session()->flash('alert-danger', 'No Stock in Store!!');
                        return redirect()->action('SaleController@index');
                    }
                }

                $sale->save();
                // Record price, qty, total for each item
                foreach(Cart::instance(CartConst::SALE)->content() as $item) {

                    $total = $item->qty * $item->price;
                    $sale->items()->attach($item->id, ['quantity' => $item->qty, 'price' => $item->price, 'total' => $total]);

                    $store = Store::firstOrNew([
                        'location_id' => $sale->location_id,
                        'item_id' => $item->id,
                    ]);

                    $store->quantity -= $item->qty;
                    $store->save();
                    $request->session()->flash('alert-success', 'Sale has been processed!');
                }

                //Update Customer Credit balance for Credit Sale
                if ( $sale->saleType == Constants::CREDIT )
                {
                    $balance = CreditBalance::firstOrNew(['customer_id' => $sale->customer_id]);
                    $balance->amount += $sale->balance;
                    $balance->save();
                }

                Cart::instance(CartConst::SALE)->destroy();
            });
        } catch (Throwable $e) {
            Log::error('Sales Error : ' . $e->getMessage());
            dd($e->getMessage());
        }
        return redirect()->action('SaleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Sale $sale
     * @return Response
     */
    public function show(Sale $sale)
    {
        $items = $sale->items;
        return view('admin.sale.detail', [
            'items' => $items,
            'sale' => $sale
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sale $sale
     * @return Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Sale $sale
     * @return Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Sale $sale
     * @return Response
     * @throws \Exception
     */
    public function destroy(Request $request, Sale $sale)
    {
        try{
            foreach ($sale->items as $item){
                DB::table('sale_details')
                    ->where('sale_id', $sale->id)
                    ->where('item_id', $item->id)
                    ->update(array('deleted_at' => DB::raw('NOW()')));

                $store = Store::firstOrNew([
                    'location_id' => $sale->location_id,
                    'item_id' => $item->id,
                ]);
                $store->quantity += $item->pivot->quantity;
                $store->save();
            }
        } catch (Throwable $e) {
            Log::error('Sales Error : ' . $e->getMessage());
            dd($e->getMessage());
        }

        $sale->delete();

        $request->session()->flash('alert-danger', 'Sale was successfully deleted!');
        return redirect()->action('SaleController@index');
    }
}
