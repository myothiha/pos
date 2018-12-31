<?php

namespace App\Http\Controllers;

use App\ReceiveableOpening;
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
     * @param  \App\ReceiveableOpening  $receiveableOpening
     * @return \Illuminate\Http\Response
     */
    public function show(ReceiveableOpening $receiveableOpening)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReceiveableOpening  $receiveableOpening
     * @return \Illuminate\Http\Response
     */
    public function edit(ReceiveableOpening $receiveableOpening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReceiveableOpening  $receiveableOpening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReceiveableOpening $receiveableOpening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReceiveableOpening  $receiveableOpening
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReceiveableOpening $receiveableOpening)
    {
        //
    }
}
