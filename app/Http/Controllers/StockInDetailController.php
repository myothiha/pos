<?php

namespace App\Http\Controllers;

use App\StockInDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StockInDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.stockindetail.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.stockindetail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param StockInDetail $stockInDetail
     * @return Response
     */
    public function show(StockInDetail $stockInDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param StockInDetail $stockInDetail
     * @return Response
     */
    public function edit(StockInDetail $stockInDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param StockInDetail $stockInDetail
     * @return Response
     */
    public function update(Request $request, StockInDetail $stockInDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param StockInDetail $stockInDetail
     * @return Response
     */
    public function destroy(StockInDetail $stockInDetail)
    {
        //
    }
}
