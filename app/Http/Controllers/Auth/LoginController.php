<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    public function index() {

        if(Auth::check()) {
            return back();
        }
        return view('auth.login');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        
        if(!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Wrong credentials');
        }

        return redirect()->route('landingpage');

    }
}
