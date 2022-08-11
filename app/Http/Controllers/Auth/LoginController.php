<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function login(Request $req)
    {
    	$req->validate([
    		'email' => 'required|email|exists:users',
    		'password' => 'required'
    	]);

    	$credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }
}
