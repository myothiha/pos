<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->type = new Type();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $types = $this->type->all();

        return view("admin.type.index", [
            'types' => $types,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.type.create');
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

        $type = new $this->type();
        $type->name = $request->name;
        $type->save();

        $request->session()->flash('alert-success', 'Type was successful added!');
        return redirect("admin/type");
    }

    /**
     * Display the specified resource.
     *
     * @param Type $type
     * @return Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Type $type
     * @return Response
     */
    public function edit(Type $type)
    {
        return view("admin.type.edit", [
            'type' => $type
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Type $type
     * @return Response
     */
    public function update(Request $request, Type $type)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $type->name = $request->name;
        $type->save();

        $request->session()->flash('alert-success', 'Type was successful updated!');
        return redirect("admin/type");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Type $type
     * @return Response
     */
    public function destroy(Request $request, Type $type)
    {
        $type->Delete();
        $request->session()->flash('alert-danger', 'Employee was successful deleted!');
        return redirect("admin/type");
    }
}
