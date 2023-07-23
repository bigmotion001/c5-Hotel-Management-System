<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
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

        $datas = Gallery::orderBy('id', 'desc')->get();

        return view('frontend/gallery', compact('datas'));
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

    //user_dashboard route
    function user_dashboard() {


        return view('frontend/user_dashboard');
    }
}
