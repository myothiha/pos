<?php

namespace App\Http\Controllers;

use App\Inspect;
use Illuminate\Http\Request;

class InspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.inspect.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inspect.create');
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
     * @param  \App\Inspect  $inspect
     * @return \Illuminate\Http\Response
     */
    public function show(Inspect $inspect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inspect  $inspect
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspect $inspect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inspect  $inspect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspect $inspect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inspect  $inspect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspect $inspect)
    {
        //
    }
}
