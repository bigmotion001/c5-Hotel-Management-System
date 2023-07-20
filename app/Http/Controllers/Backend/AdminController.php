<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //admin index
    public function Index(){
        return view('admin.auth.login');
    }

    //admin login
    public function AdminLogin(Request $request){
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('success', 'Admin Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    //admin dash baord
    public function Dashboard(){
        return view('admin.index');
    }
}
