<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Inspect;
use App\Issue;
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
        $issues = Issue::all();

        return view('admin.inspect.index', [
            'issues' => $issues,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Issue $issue
     * @return \Illuminate\Http\Response
     */
    public function create(Issue $issue)
    {
        return view('admin.inspect.create', [
            'issue' => $issue,
            'employees' => Employee::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Issue $issue
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Issue $issue)
    {
        $inspect = new Inspect();
        $inspect->employee_id = $request->employee_id;
        $inspect->acceptQty = $request->acceptQty;
        $inspect->rejectQty = $request->rejectQty;

        $issue->inspects()->save($inspect);

        return redirect()->action('InspectController@index');
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
