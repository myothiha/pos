<?php

namespace App\Http\Controllers;

use App\Item;
use App\Type;
use App\Category;
use App\Color;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

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
     * @return Response
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
     * @return Response
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
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'itemCode' => 'required',
            'type_id' => 'required',
            'category_id' => 'required',
            'color_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (count(Item::where('itemCode', $request->itemCode)->get()) > 0){
            $request->session()->flash('alert-danger', 'Item Code is already used!');
            return redirect()->back();
        }

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
     * @param Item $item
     * @return void
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Item $item
     * @return Response
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
     * @param Request $request
     * @param Item $item
     * @return Response
     */
    public function update(Request $request, Item $item)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'itemCode' => 'required',
            'type_id' => 'required',
            'category_id' => 'required',
            'color_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($item->itemCode != $request->itemCode){
            if (count(Item::where('itemCode', $request->itemCode)->get()) > 0){
                $request->session()->flash('alert-danger', 'Item Code is already used!');
                return redirect()->back();
            }
        }

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
     * @param Request $request
     * @param Item $item
     * @return Response
     * @throws Exception
     */
    public function destroy(Request $request, Item $item)
    {
        $item->delete();
        $request->session()->flash('alert-success', 'Item was successful deleted!');
        return redirect("admin/item");
    }
}
