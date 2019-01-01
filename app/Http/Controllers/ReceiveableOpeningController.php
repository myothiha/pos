<?php

namespace App\Http\Controllers;

use App\ReceivableOpening;
use Illuminate\Http\Request;

class ReceiveableOpeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.receiveableOpening.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.receiveableOpening.create');
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
     * @param  \App\ReceivableOpening  $receiveableOpening
     * @return \Illuminate\Http\Response
     */
    public function show(ReceivableOpening $receiveableOpening)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReceivableOpening  $receiveableOpening
     * @return \Illuminate\Http\Response
     */
    public function edit(ReceivableOpening $receiveableOpening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReceivableOpening  $receiveableOpening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReceivableOpening $receiveableOpening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReceivableOpening  $receiveableOpening
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReceivableOpening $receiveableOpening)
    {
        //
    }
}
