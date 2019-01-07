<?php

namespace App\Http\Controllers;

use App\ReceivableOpening;
use App\Customer;
use App\Location;
use Illuminate\Http\Request;


class ReceivableOpeningController extends Controller
{
    public function __construct(){
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  \Illuminate\Http\Request $request
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
     * @param ReceivableOpening $receivableOpening
     * @return void
     */
    public function destroy(ReceivableOpening $receivableOpening)
    {
        //
    }
}
