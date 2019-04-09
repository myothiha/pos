<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.user.login');
    }

    public function checkLogin(Request $request)
    {
//        dd($request->all());
        if( Auth::attempt([ 'email' => $request->email, 'password' => $request->password]))
        {
            return redirect('/admin/');
        }

        return redirect()->back();
    }
}
