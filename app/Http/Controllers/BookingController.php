<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //user book room
    public function UserBookRoom(Request $request){
        //validate
        $request->validate([
            'checking_date' => 'required',
            'checkout_date' => 'required',
            'room_name' => 'required',
            'adults_booking' => 'required',
            'childs_booking' => 'required',
            'room_qty' => 'required',
        ]);

        $id = Roomtype::findOrFail($request->room_name);
        if($request->adults_booking> $id->adult){
            return redirect()->back()->with('success', 'Room Type Added Successfully');
        }
    }
}
