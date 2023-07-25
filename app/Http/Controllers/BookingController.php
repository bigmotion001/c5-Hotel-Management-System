<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //user book room
    public function UserBookRoom(Request $request){
        dd($request->all());
    }
}
