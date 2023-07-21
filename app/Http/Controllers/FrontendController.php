<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //about route
    function About() {
        return view('frontend/about');
    }

    //contact route
    function Contact() {
        return view('frontend/contact');
    }
    
    //gallery route
    function Gallery() {
        return view('frontend/gallery');
    }

    //Room_details route
    function Room_details($id) {

        $datas = Roomtype::findOrFail($id);

        return view('frontend/room_details', compact('datas'));
    }

    //All_roomsroute
    function All_rooms() {

        $datas = Roomtype::orderBy('id', 'desc')->get();

        return view('frontend/all_rooms', compact('datas'));
    }
}
