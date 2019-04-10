<?php

namespace App\Http\Controllers;

use App\Location;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',[
            'users' =>$users
        ]);
    }

    public function create()
    {
        $locations = Location::get();
        return view('admin.user.create', [
            'locations' => $locations
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
            'role' => 'required',
            'location' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->location_id = $request->location;
        $user->save();

        $request->session()->flash('alert-success', 'User was successful added!');
        return redirect()->action('UserController@index');
    }

    public function edit(User $user)
    {
        $locations = Location::get();
        return view('admin.user.edit',[
            'user' => $user,
            'locations' => $locations
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'role' => 'required',
            'location' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->role = $request->role;
        $user->location_id = $request->location;
        $user->save();

        $request->session()->flash('alert-success', 'User was successful updated!');
        return redirect()->action('UserController@index');
    }

    public function destroy(Request $request, User $user)
    {
        $user->delete();

        $request->session()->flash('alert-success', 'User was successful deleted!');
        return redirect()->action('UserController@index');
    }
}
