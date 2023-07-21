<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceptionController extends Controller
{
    //login
    public function Index(){
        return view('reception.auth.login');
    }



    //lgoin
    public function ReceptionLogin(Request $request){
        $check = $request->all();
        if (Auth::guard('reception')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('reception.dashboard')->with('success', 'reception Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    //Receptionist dashboard
    public function Dashboard(){
        return view('reception.index');
    }
}
