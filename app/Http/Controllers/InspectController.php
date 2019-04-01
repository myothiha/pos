<?php

namespace App\Http\Controllers;

use App\Item;
use App\Type;
use App\Category;
use App\Color;
use App\Employee;
use App\Inspect;
use App\Issue;
use Illuminate\Http\Request;

class InspectController extends Controller
{
    public function __construct()
    {
        $this->item = new Item();
        $this->employee = new Employee();
        $this->type = new Type();
        $this->category = new Category();
        $this->color = new Color();
        $this->inspect = new Inspect();
    }

    public function index()
    {
        $inspects = Inspect::all();
        return view('admin.inspect.index', [
            'inspects' => $inspects
        ]);
    }
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function getItem()
     {
         $types = $this->type->all();
         $categories = $this->category->all();
         $colors = $this->color->all();

         return view("admin.inspect.getItem", [
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
     public function searchItems(Request $request)
     {
         $types = $this->type->all();
         $categories = $this->category->all();
         $colors = $this->color->all();

         $items = Item::query()
             ->when($request->itemCode, function ($q) use ($request) {
                 return $q->where('itemCode', 'LIKE', "%{$request->itemCode}%");
             })
             ->when($request->itemName, function ($q) use ($request) {
                 return $q->where('name', 'LIKE', "%{$request->itemName}%");
             })
             ->when($request->color_id, function ($q) use ($request) {
                 return $q->where('color_id', '=', $request->color_id);
             })
             ->when($request->type_id, function ($q) use ($request) {
                 return $q->where('type_id', '=', $request->type_id);
             })
             ->when($request->category_id, function ($q) use ($request) {
                 return $q->where('category_id', '=', $request->category_id);
             })
             ->with('color')->with('category')->get();

             return view("admin.inspect.getItem", [
             'types' => $types,
             'categories' => $categories,
             'colors' => $colors,
             'items' => $items,
         ]);
     }


     public function create(Item $item){

         $employees = $this->employee->all();
         return view("admin.inspect.create", [
             'item' => $item,
             'employees' => $employees,
         ]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Issue $issue
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required',
            'acceptQty' => 'required',
            'rejectQty' => 'required',
        ]);
        $inspect = new Inspect();
        $inspect->employee_id = $request->employee_id;
        $inspect->acceptQty = $request->acceptQty;
        $inspect->rejectQty = $request->rejectQty;
        $inspect->item_id = $request->item_id;
        $inspect->save();

        $request->session()->flash('alert-success', 'Inspect has been processed!');
        return redirect()->action('InspectController@getItem');
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
