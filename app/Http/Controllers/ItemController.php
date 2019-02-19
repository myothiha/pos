<?php

namespace App\Http\Controllers;

use App\Item;
use App\Type;
use App\Category;
use App\Color;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
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
        $items = $this->item->all();

        return view("admin.item.index", [
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->type->all();
        $categories = $this->category->all();
        $colors = $this->color->all();

        return view("admin.item.create", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
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
        $request->validate([
            'name' => 'required',
            'itemCode' => 'required',
            'type_id' => 'required',
            'category_id' => 'required',
            'color_id' => 'required',
        ]);

        $item = new $this->item();
        $item->name = $request->name;
        $item->itemCode = $request->itemCode;
        $item->type_id = $request->type_id;
        $item->category_id = $request->category_id;
        $item->color_id = $request->color_id;
        $item->remark = $request->remark;
        $item->save();

        $request->session()->flash('alert-success', 'Item was successful added!');
        return redirect("admin/item");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item $item
     * @return void
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $types = $this->type->all();
        $categories = $this->category->all();
        $colors = $this->color->all();

        return view("admin.item.edit", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required',
            'itemCode' => 'required',
            'type_id' => 'required',
            'category_id' => 'required',
            'color_id' => 'required',
        ]);

        $item->name = $request->name;
        $item->itemCode = $request->itemCode;
        $item->type_id = $request->type_id;
        $item->category_id = $request->category_id;
        $item->color_id = $request->color_id;
        $item->remark = $request->remark;
        $item->save();

        $request->session()->flash('alert-success', 'Item was successful updated!');
        return redirect("admin/item");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item $item
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Request $request, Item $item)
    {
        $item->delete();
        $request->session()->flash('alert-success', 'Item was successful deleted!');
        return redirect("admin/item");
    }
}
