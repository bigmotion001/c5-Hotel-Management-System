<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;

use Illuminate\Http\Request;

class SectionsController extends Controller
{
    //carousel page
    public function Carousel()
    {
        $datas = Carousel::orderBy('id', 'desc')->get();

        return view('backend.carousel.carousel', compact('datas'));
    }


    //Add carousel page
    function Add_carousel()
    {
        return view('backend.carousel.add_carousel');
    }


    //Add carousel function
    function Save_carousel(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
        ]);

        $data = new Carousel();

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        $imageName = time() . '_' . $request->image->getClientOriginalExtension();

        $request->image->move('uploads/images', $imageName);

        $data->image = $imageName;

        $data->save();

        return redirect('carousel')->with('success', 'Carousel Added Successfully');
    }

    //Edit carousel page
    public function Edit_carousel($id)
    {
        $datas = Carousel::findOrFail($id);

        return view('backend.carousel.edit_carousel', compact('datas'));
    }

    //Update carousel function
    function Updated_carousel(Request $request, $id)
    {
        $data = Carousel::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        if ($request->image) {
            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('uploads/images', $imageName);

            $data->image = $imageName;
        }

        $data->save();

        return redirect('carousel')->with('success', 'Carousel Updated Successfully');
    }

    //Delete carousel function
    public function Delete_carousel($id)
    {
        $data = Carousel::findOrFail($id);

        $data->delete();

        return redirect('carousel')->with('success', 'Carousel Deleted Successfully');
    }


    //About_us page
    public function About_us()
    {
        $datas = About::orderBy('id', 'desc')->get();

        return view('backend.about_us.about_us', compact('datas'));
    }

    //Edit carousel page
    public function Edit_about_us($id)
    {
        $datas = About::findOrFail($id);

        return view('backend.about_us.edit_about_us', compact('datas'));
    }

    //Update about_us function
    function Updated_about_us(Request $request, $id)
    {
        $data = About::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);

        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        if ($request->image1) {
            $imageName = time() . '_image1' . $request->image1->getClientOriginalExtension();

            $request->image1->move('uploads/images', $imageName);

            $data->image1 = $imageName;
        }

        if ($request->image2) {
            $imageName = time() . '_image2' . $request->image2->getClientOriginalExtension();

            $request->image2->move('uploads/images', $imageName);

            $data->image2 = $imageName;
        }

        $data->save();

        return redirect('about_us')->with('success', 'About Us Updated Successfully');
    }
}
