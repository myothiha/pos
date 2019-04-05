<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->location = new Location();
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $locations = $this->location->all();

        return view("admin.location.index", [
            'locations' => $locations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.location.create');
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

        $location = new $this->location();
        $location->name = $request->name;
        $location->save();

        $request->session()->flash('alert-success', 'Location was successful added!');
        return redirect("admin/location");
    }

    /**
     * Display the specified resource.
     *
     * @param Location $location
     * @return void
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Location $location
     * @return Response
     */
    public function edit(Location $location)
    {
        return view("admin.location.edit", [
            'location' => $location
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Location $location
     * @return Response
     */
    public function update(Request $request, Location $location)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $location->name = $request->name;
        $location->save();

        $request->session()->flash('alert-success', 'Location was successful updated!');
        return redirect("admin/location");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Location $location
     * @return Response
     * @throws \Exception
     */
    public function destroy(Request $request, Location $location)
    {
        $location->Delete();
        $request->session()->flash('alert-danger', 'Location was successful deleted!');
        return redirect("admin/location");
    }
}
