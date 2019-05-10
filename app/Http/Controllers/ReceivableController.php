<?php

namespace App\Http\Controllers;

use App\CreditBalance;
use App\Receivable;
use App\Customer;
use App\Location;
use App\Repositories\Customers\ReceivableRepository;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use Throwable;

class ReceivableController extends Controller
{

    protected $receivableRepository;

    public function __construct(ReceivableRepository $receivableRepository)
    {
        $this->receivableRepository = $receivableRepository;
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
        $receivables = Receivable::all();
        return view('admin.receivable.index', [
            'receivables' => $receivables
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCustomer()
    {
        $customers = $this->customer->all();

        return view("admin.receivable.getCustomer", [
            'customers' => $customers,
        ]);
    }

    public function create(Request $request)
    {
        $customer = Customer::find($request->customer_id);

        $locations = $this->location->all();

        return view('admin.receivable.create', [
            'locations' => $locations,
            'customer' => $customer,
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
            'amount' => 'required',
        ]);

        $receivable = new Receivable();
        $receivable->user_id = Auth::user()->id;
        $receivable->voucherNo = $request->voucherNo;
        $receivable->amount = $request->amount;
        $receivable->customer_id = $request->customer_id;
        $receivable->location_id = $request->location_id;

        $creditBalance = CreditBalance::firstOrNew(['customer_id' => $receivable->customer_id]);

        if($creditBalance->amount < $receivable->amount){
            $request->session()->flash('alert-danger', 'Customer cannot paid more than his credit balance!!!');
            return redirect()->action('ReceivableController@create', [
                'customer_id' => $receivable->customer_id
            ]);
        }else{
            $creditBalance->amount -= $receivable->amount;
            $request->session()->flash('alert-success', 'Receivable has been processed!');
        }

        try {
            DB::transaction(function () use ($receivable, $creditBalance) {
                $receivable->save();
                $creditBalance->save();
            });
        } catch (Throwable $e) {
            Log::error('Save Receivable Error: ' . $e->getMessage());
            dd($e->getMessage()); //Todo remove
        }

        return redirect()->action('ReceivableController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Receivable $receivable
     * @return void
     */
    public function show(Receivable $receivable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Receivable $receivable
     * @return void
     */
    public function edit(Receivable $receivable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Receivable $receivable
     * @return void
     */
    public function update(Request $request, Receivable $receivable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Receivable $receivable
     * @return void
     */
    public function destroy(Receivable $receivable)
    {
        //
    }
}
