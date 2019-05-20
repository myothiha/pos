<?php

namespace App\Http\Controllers;

use App\CreditBalance;
use App\ReceivableOpening;
use App\Customer;
use App\Location;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use Throwable;


class ReceivableOpeningController extends Controller
{
    public function __construct(){
        $this->location = new Location();
        $this->customer = new Customer();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $receivableOpenings = ReceivableOpening::all();
        return view('admin.receivableOpening.index', [
            'receivableOpenings' => $receivableOpenings,
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

        return view('admin.receivableOpening.create', [
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
        $request->validate([
            'balance' => 'required',
        ]);

        $receivableOpening = new ReceivableOpening();
        $receivableOpening->user_id = Auth::user()->id;
        $receivableOpening->location_id = $request->location_id;
        $receivableOpening->customer_id = $request->customer_id;
        $receivableOpening->balance = $request->balance;

        $creditBalance = CreditBalance::firstOrNew(['customer_id' => $request->customer_id]);

        $creditBalance->amount += $request->balance;

        try {
            DB::transaction(function () use ($receivableOpening, $creditBalance) {
                $receivableOpening->save();
                $creditBalance->save();
            });
        } catch (Throwable $e) {
            Log::error('Receivable Opening Storing Error : ' . $e->getMessage());
            dd($e); // Todo Remove
        }

        $request->session()->flash('alert-success', 'ReceivableOpening has been processed!');
        return redirect()->action('ReceivableOpeningController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param ReceivableOpening $receivableOpening
     * @return void
     */
    public function show(ReceivableOpening $receivableOpening)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ReceivableOpening $receivableOpening
     * @return void
     */
    public function edit(ReceivableOpening $receivableOpening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ReceivableOpening $receivableOpening
     * @return void
     */
    public function update(Request $request, ReceivableOpening $receivableOpening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param ReceivableOpening $receivableOpening
     * @return void
     * @throws \Exception
     */
    public function destroy(Request $request, ReceivableOpening $receivableOpening)
    {
        $creditBalance = CreditBalance::firstOrNew(['customer_id' => $receivableOpening->customer_id]);
        $creditBalance->amount -= $receivableOpening->balance;
        $creditBalance->save();

        $receivableOpening->delete();

        $request->session()->flash('alert-danger', 'Receivable Opening was successfully deleted!');
        return redirect()->action('ReceivableController@index');
    }
}
