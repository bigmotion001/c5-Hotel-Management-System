<?php

namespace App\Http\Controllers;

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

        return view('backend/carousel/edit_carousel', compact('datas'));
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
}
