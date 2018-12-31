<?php

namespace App\Http\Controllers;

use App\Receiveable;
use Illuminate\Http\Request;

class ReceiveableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.receiveable.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.receiveable.create');
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
     * @param  \App\Receiveable  $receiveable
     * @return \Illuminate\Http\Response
     */
    public function show(Receiveable $receiveable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receiveable  $receiveable
     * @return \Illuminate\Http\Response
     */
    public function edit(Receiveable $receiveable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receiveable  $receiveable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receiveable $receiveable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receiveable  $receiveable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receiveable $receiveable)
    {
        //
    }
}
