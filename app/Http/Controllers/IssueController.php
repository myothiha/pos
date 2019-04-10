<?php

namespace App\Http\Controllers;

use App\Issue;
use App\Item;
use App\Type;
use App\Category;
use App\Color;
use App\Employee;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IssueController extends Controller
{
    public function __construct()
    {
        $this->item = new Item();
        $this->employee = new Employee();
        $this->type = new Type();
        $this->category = new Category();
        $this->color = new Color();
        $this->issue = new Issue();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $issues = Issue::all();
        return view('admin.issue.index', [
            'issues' => $issues
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getItem()
    {
        $types = $this->type->all();
        $categories = $this->category->all();
        $colors = $this->color->all();

        return view("admin.issue.getItem", [
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

            return view("admin.issue.getItem", [
            'types' => $types,
            'categories' => $categories,
            'colors' => $colors,
            'items' => $items,
        ]);
    }

    public function create(Item $item){

        $employees = $this->employee->all();
        return view("admin.issue.create", [
            'item' => $item,
            'employees' => $employees,
        ]);
    }

    /**
     * Store the specified resource.
     *
     * @param Request $request
     * @param Item $item
     * @return Response
     */
    public function store(Request $request, Item $item)
    {
        $request->validate([
            'employee_id' => 'required',
            'quantity' => 'required',
            'paint' => 'required',
            'tinder' => 'required',
            'liker' => 'required',
        ]);

        $issue = new Issue();
        $issue->user_id = Auth::user()->id;
        $issue->employee_id = $request->employee_id;
        $issue->type = $request->type;
        $issue->quantity = $request->quantity;
        $issue->paint = $request->paint;
        $issue->tinder = $request->tinder;
        $issue->liker = $request->liker;
        $issue->remark = $request->remark;
        $item->issues()->save($issue);

        $request->session()->flash('alert-success', 'Issue has been processed!');
        return redirect()->action('IssueController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Issue $issue
     * @return Response
     */
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Issue $issue
     * @return Response
     */
    public function edit(Issue $issue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Issue $issue
     * @return void
     */
    public function update(Request $request, Issue $issue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Issue $issue
     * @return void
     * @throws Exception
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect()->action('IssueController@index');
    }
}
