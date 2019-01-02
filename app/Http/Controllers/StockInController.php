<?php

namespace App\Http\Controllers;

use App\StockIn;
use App\Item;
use App\Type;
use App\Category;
use App\Color;
use App\Supplier;
use App\Location;
use Illuminate\Http\Request;

class StockInController extends Controller
{
    public function __construct()
    {
        $this->supplier = new Supplier();
        $this->location = new Location();
        $this->item = new Item();
        $this->type = new Type();
        $this->category = new Category();
        $this->color = new Color();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.stockin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = $this->location->all();
        $suppliers = $this->supplier->all();
        $types = $this->type->all();
        $items = $this->item->all();
        $categories = $this->category->all();
        $colors = $this->color->all();

        return view("admin.stockin.create", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
            'items' => $items,
            'locations' => $locations,
            'suppliers' => $suppliers,
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
     * @param  \App\StockIn  $stockIn
     * @return \Illuminate\Http\Response
     */
    public function show(StockIn $stockIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StockIn  $stockIn
     * @return \Illuminate\Http\Response
     */
    public function edit(StockIn $stockIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StockIn  $stockIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StockIn $stockIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StockIn  $stockIn
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockIn $stockIn)
    {
        //
    }
}
