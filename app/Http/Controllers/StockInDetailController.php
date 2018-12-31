<?php

namespace App\Http\Controllers;

use App\StockInDetail;
use Illuminate\Http\Request;

class StockInDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.stockindetail.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stockindetail.create');
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
     * @param  \App\StockInDetail  $stockInDetail
     * @return \Illuminate\Http\Response
     */
    public function show(StockInDetail $stockInDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockInDetail  $stockInDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(StockInDetail $stockInDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockInDetail  $stockInDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockInDetail $stockInDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockInDetail  $stockInDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockInDetail $stockInDetail)
    {
        //
    }
}
