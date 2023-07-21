<?php

namespace App\Http\Controllers;

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
    //gallery route
    function Room_details($id) {

        return view('frontend/room_details');
    }
}
