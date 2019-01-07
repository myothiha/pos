<?php

namespace App\Http\Controllers;

use App\StockOpening;
use App\Location;
use App\Category;
use Illuminate\Http\Request;

class StockOpeningController extends Controller
{
    public function __construct(){
        $this->location = new Location();
        $this->category = new Category();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.stockopening.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = $this->location->all();
        $categories = $this->category->all();

        return view('admin.stockOpening.create', [
            'categories' => $categories,
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
     * @param  \App\StockOpening  $stockOpening
     * @return \Illuminate\Http\Response
     */
    public function show(StockOpening $stockOpening)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockOpening  $stockOpening
     * @return \Illuminate\Http\Response
     */
    public function edit(StockOpening $stockOpening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockOpening  $stockOpening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockOpening $stockOpening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockOpening  $stockOpening
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockOpening $stockOpening)
    {
        //
    }
}
