<?php

namespace App\Http\Controllers;

use App\SaleDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.saledetail.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.saledetail.create');
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
     * @param SaleDetail $saleDetail
     * @return Response
     */
    public function show(SaleDetail $saleDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SaleDetail $saleDetail
     * @return Response
     */
    public function edit(SaleDetail $saleDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param SaleDetail $saleDetail
     * @return Response
     */
    public function update(Request $request, SaleDetail $saleDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SaleDetail $saleDetail
     * @return Response
     */
    public function destroy(SaleDetail $saleDetail)
    {
        //
    }
}
