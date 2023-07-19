<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use App\Models\Bedtype;
use App\Models\Complement;
use App\Models\Room;
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


    //fetch all bedtype page
    public function Bedtype()
    {
        $datas = Bedtype::orderBy('id', 'desc')->get();


        return view('backend/bedtype/bedtype', compact('datas'));
    }

    //add bedtype page
    function Add_bedtype()
    {

        return view('backend/bedtype/add_bedtype');
    }


    //add bedtype function
    function Save_bedtype(Request $request)
    {
        $request->validate([
            'bedtype' => 'required|string',
        ]);

        $data = new Bedtype;

        $data->bedtype = $request->bedtype;


        $data->save();

        Alert::success('Bed Type Added Successfully');
        return redirect('bedtype');
    }

    //update bedtype page
    public function Edit_bedtype($id)
    {
        // dd($id);

        $datas = Bedtype::findOrFail($id);

        return view('backend/bedtype/edit_bedtype', compact('datas'));
    }

    //update bedtype function
    function Updated_bedtype(Request $request, $id)
    {
        $data = Bedtype::findOrFail($id);

        $request->validate([
            'bedtype' => 'required|string',
        ]);

        $data->bedtype = $request->bedtype;

        $data->save();

        Alert::success('Bed Type Updated Successfully');
        return redirect('bedtype');
    }

    //Delete bedtype function
    public function Delete_bedtype($id)
    {
        $data = Bedtype::findOrFail($id);

        $data->delete();

        Alert::success('Bed Tpye Deleted Successfully');
        
        return redirect('bedtype');
    }

    //fetch all room page
    public function Room()
    {
        $datas = Room::orderBy('id', 'desc')->get();


        return view('backend/room/room', compact('datas'));
    }

    //add room page
    function Add_room()
    {

        return view('backend/room/add_room');
    }


    //add room function
    function Save_room(Request $request)
    {
        $request->validate([
            'room_number' => 'required|string',
            'room_type' => 'required|string',
            'room_status' => 'required|string',
        ]);

        $data = new Room;

        $data->room_number = $request->room_number;
        $data->room_type = $request->room_type;
        $data->room_status = $request->room_status;


        $data->save();

        Alert::success('Room Added Successfully');
        return redirect('room');
    }

    //update room page
    public function Edit_room($id)
    {
        // dd($id);

        $datas = room::findOrFail($id);

        return view('backend/room/edit_room', compact('datas'));
    }

    //update room function
    function Updated_room(Request $request, $id)
    {
        $data = room::findOrFail($id);

        $request->validate([
            'room_number' => 'required|string',
            'room_type' => 'required|string',
            'room_status' => 'required|string',
        ]);

        $data->room_number = $request->room_number;
        $data->room_type = $request->room_type;
        $data->room_status = $request->room_status;

        $data->save();

        Alert::success('Room Updated Successfully');
        return redirect('room');
    }

    //Delete room function
    public function Delete_room($id)
    {
        $data = room::findOrFail($id);

        $data->delete();

        Alert::success('Room Deleted Successfully');
        
        return redirect('room');
    }

    //Enable room status
    public function Enable($id)
    {
        $data = room::findOrFail($id);

        $data->room_status = "Disable";

        $data->save();

        Alert::success('Room Status Disabled');
        
        return redirect('room');
    }

    //Enable room status
    public function Disable($id)
    {
        $data = room::findOrFail($id);

        $data->room_status = "Enable";

        $data->save();

        Alert::success('Room Status Enabled');
        
        return redirect('room');
    }

}
