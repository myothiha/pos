<?php

namespace App\Http\Controllers;

use App\ReceivableOpening;
use Illuminate\Http\Request;

class ReceivableOpeningController extends Controller
{
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
        return view('admin.receivable.create');
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
