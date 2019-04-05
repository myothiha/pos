<?php

namespace App\Http\Controllers;

use App\Supplier;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->supplier = new Supplier();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $suppliers = $this->supplier->all();

        return view("admin.supplier.index", [
            'suppliers' => $suppliers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.supplier.create');
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

        $supplier = new $this->supplier();
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->save();

        $request->session()->flash('alert-success', 'Supplier was successful added!');
        return redirect("admin/supplier");
    }

    /**
     * Display the specified resource.
     *
     * @param Supplier $supplier
     * @return void
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Supplier $supplier
     * @return Response
     */
    public function edit(Supplier $supplier)
    {
        return view("admin.supplier.edit", [
            'supplier' => $supplier
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Supplier $supplier
     * @return Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->save();

        $request->session()->flash('alert-success', 'Supplier was successful updated!');
        return redirect("admin/supplier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Supplier $supplier
     * @return Response
     * @throws Exception
     */
    public function destroy(Request $request, Supplier $supplier)
    {
        $supplier->Delete();
        $request->session()->flash('alert-danger', 'Supplier was successful deleted!');
        return redirect("admin/supplier");
    }
}
