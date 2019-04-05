<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class ColorController extends Controller
{
    public function __construct()
    {
        $this->color = new Color();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $colors = $this->color->all();

        return view("admin.color.index", [
            'colors' => $colors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.color.create');
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
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $color = new $this->color();
        $color->name = $request->name;
        $color->save();

        $request->session()->flash('alert-success', 'Color was successful added!');
        return redirect("admin/color");
    }

    /**
     * Display the specified resource.
     *
     * @param Color $color
     * @return Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Color $color
     * @return Response
     */
    public function edit(Color $color)
    {
        return view("admin.color.edit", [
            'color' => $color
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Color $color
     * @return Response
     */
    public function update(Request $request, Color $color)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $color->name = $request->name;
        $color->save();

        $request->session()->flash('alert-success', 'Color was successful updated!');
        return redirect("admin/color");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Color $color
     * @return Response
     */
    public function destroy(Request $request, Color $color)
    {
        $color->delete();
        $request->session()->flash('alert-danger', 'Color was successful delete!');
        return redirect("admin/color");
    }
}
