<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use App\Models\Complement;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UtilitiesController extends Controller
{
    //fetch all amenity page
    function amenities()
    {
        $datas = Amenities::orderBy('id', 'desc')->get();

        // dd($datas);

        return view('backend/amenities/amenities', compact('datas'));
    }

    //add amenity page
    function Add_amenities()
    {

        return view('backend/amenities/add_amenities');
    }


    //add amenity function
    function Save_amenities(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'icon' => 'required',
        ]);

        $data = new Amenities;

        $data->title = $request->title;

        $imageName = time() . '_' . $request->icon->getClientOriginalExtension();

        $request->icon->move('backend/assets/icons', $imageName);

        $data->icon = $imageName;

        $data->save();

        Alert::success('Amenity Added Successfully');
        return redirect('amenities');
    }


    //update amenity page
    function Edit_amenity($id)
    {

        $datas = Amenities::findOrFail($id);


        return view('backend/amenities/edit_amenities', compact('datas'));
    }


    //update amenity function
    function updated_amenity(Request $request, $id)
    {
        $data = Amenities::findOrFail($id);

        $request->validate([
            'title' => 'required|string',
        ]);

        $data->title = $request->title;

        if ($request->icon) {

            $imageName = time() . '_' . $request->icon->getClientOriginalExtension();

            $request->icon->move('backend/assets/icons', $imageName);

            $data->icon = $imageName;
        }

        $data->save();

        Alert::success('Amenity Updated Successfully');
        return redirect('amenities');
    }

    //Delete amenity function
    public function Delete_amenity($id)
    {
        $data = Amenities::findOrFail($id);

        $data->delete();

        Alert::success('Amenity Deleted Successfully');
        return redirect('amenities');
    }

    //fetch all Complement page
    public function complement()
    {
        $datas = Complement::orderBy('id', 'desc')->get();


        return view('backend/complement/complement', compact('datas'));
    }

    //add complement page
    function Add_complement()
    {

        return view('backend/complement/add_complement');
    }


    //add complement function
    function Save_complement(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'item' => 'required',
        ]);

        $data = new Complement;

        $data->title = $request->title;
        $data->item = $request->item;


        $data->save();

        Alert::success('Complement Added Successfully');
        return redirect('complement');
    }

    //update complement page
    public function Edit_complement($id)
    {
        // dd($id);

        $datas = Complement::findOrFail($id);

        return view('backend/complement/edit_complement', compact('datas'));
    }

    //update complement function
    function Updated_complement(Request $request, $id)
    {
        $data = Complement::findOrFail($id);

        $request->validate([
            'title' => 'required|string',
            'item' => 'required|string',
        ]);

        $data->title = $request->title;
        $data->item = $request->item;

        $data->save();

        Alert::success('Complement Updated Successfully');
        return redirect('complement');
    }

    //Delete Complement function
    public function Delete_complement($id)
    {
        $data = Complement::findOrFail($id);

        $data->delete();

        Alert::success('Complement Deleted Successfully');
        
        return redirect('complement');
    }

}