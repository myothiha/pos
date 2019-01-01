<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    protected $redirectTo = "/";

    public function checkLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => $request->role])) {
            return redirect($this->redirectTo);
        }

        return redirect('/login');
    }

}
