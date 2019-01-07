<?php

namespace App\Http\Controllers;

use App\Receivable;
use App\Customer;
use App\Location;
use App\Repositories\Customers\ReceivableRepository;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.receivable.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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

        $creditBalance = $this->receivableRepository->getCredit($customer);

        $locations = $this->location->all();

        return view('admin.receivable.create', [
            'locations' => $locations,
            'creditBalance' => $creditBalance,
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
        $customer = Customer::find($request->customer_id);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receivable  $receivable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receivable $receivable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receivable  $receivable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receivable $receivable)
    {
        //
    }
}
