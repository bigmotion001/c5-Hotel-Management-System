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
    //gallery route
    function Room_details($id) {

        $datas = Roomtype::findOrFail($id);

        return view('frontend/room_details', compact('datas'));
    }
}
