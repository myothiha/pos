<?php

namespace App\Http\Controllers;

use App\Store;
use App\Transfer;
use App\Item;
use App\Type;
use App\Category;
use App\Color;
use App\Customer;
use App\Location;
use Auth;
use Cart;
use DB;
use Illuminate\Http\Request;
use App\Constants\Cart as CartConst;
use Illuminate\Http\Response;
use Throwable;


class TransferController extends Controller
{
    public function __construct()
    {
        $this->location = new Location();
        $this->customer = new Customer();
        $this->transfer = new Transfer();
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
        $transfers = Transfer::all();
        return view('admin.transfer.index', [
            'transfers' => $transfers
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

        return view("admin.transfer.create", [
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
        $transfer = new Transfer();
        $transfer->user_id = Auth::user()->id;
        $transfer->location_id = $request->location_id;
        $transfer->voucherNo = $request->voucherNo ?? '';
        $transfer->remark = $request->remark ?? '';

        if(Cart::instance(CartConst::TRANSFER)->content()->isEmpty()){
            $request->session()->flash('alert-danger', 'Transfer cannot be processed without any item!');
            return redirect()->action('TransferController@create');
        }

        try {
            DB::transaction(function () use ($request, $transfer) {
                $transfer->save();

                foreach (Cart::instance(CartConst::TRANSFER)->content() as $item)
                {
                    $transfer->items()->attach($item->id, ['quantity' => $item->qty]);

                    $currentStore = Store::firstOrNew([
                        'location_id' => $transfer->location_id,
                        'item_id' => $item->id,
                    ]);

                    if($currentStore->quantity < $item->qty){
                        $transfer->items()->detach();
                        $transfer->delete();

                        $request->session()->flash('alert-danger', 'No Stock in Store!!');
                        return redirect()->action('TransferController@index');
                    }else{
                        $currentStore->quantity -= $item->qty;
                        $currentStore->save();

                        $transferStore = Store::firstOrNew([
                            'location_id' => 2,
                            'item_id' => $item->id,
                        ]);

                        $transferStore->quantity += $item->qty;
                        $transferStore->save();

                        $request->session()->flash('alert-success', 'Transfer has been processed!');
                    }

                    Cart::instance(CartConst::TRANSFER)->destroy();
                }
            });
        } catch (Throwable $e) {
            dd($e->getMessage());
        }

        return redirect()->action('TransferController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Transfer $transfer
     * @return Response
     */
    public function show(Transfer $transfer)
    {
        $items = $transfer->items;
        return view('admin.transfer.detail', [
            'transfer' => $transfer,
            'items' => $items
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Transfer $transfer
     * @return Response
     */
    public function edit(Transfer $transfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Transfer $transfer
     * @return Response
     */
    public function update(Request $request, Transfer $transfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Transfer $transfer
     * @return void
     * @throws \Exception
     */
    public function destroy(Request $request, Transfer $transfer)
    {
        foreach ($transfer->items as $item){
            DB::table('transfer_details')
                ->where('transfer_id', $transfer->id)
                ->where('item_id', $item->id)
                ->update(array('deleted_at' => DB::raw('NOW()')));

            $store = Store::firstOrNew([
                'location_id' => $transfer->location_id,
                'item_id' => $item->id,
            ]);
            $store->quantity += $item->pivot->quantity;
            $store->save();

            $transferStore = Store::firstOrNew([
                'location_id' => 2,
                'item_id' => $item->id,
            ]);

            $transferStore->quantity -= $item->pivot->quantity;
            $transferStore->save();
        }

        $transfer->delete();

        $request->session()->flash('alert-danger', 'Transfer was successfully deleted!');
        return redirect()->action('TransferController@index');
    }
}
