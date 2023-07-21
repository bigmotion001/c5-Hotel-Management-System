<?php

namespace App\Http\Controllers;

use App\Models\Amenities;
use App\Models\Bedtype;
use App\Models\Complement;
use App\Models\Gallery;
use App\Models\Room;
use App\Models\Roomtype;
use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    //fetch all amenity page
    public function amenities()
    {
        $datas = Amenities::orderBy('id', 'desc')->get();

        return view('backend/amenities/amenities', compact('datas'));
    }

    //add amenity page
    public function Add_amenities()
    {
        return view('backend/amenities/add_amenities');
    }


    //add amenity function
    public function Save_amenities(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $data = new Amenities;

        $data->title = $request->title;

        $data->save();

        return redirect('amenities')->with('success', 'Amenity Added Successfully');
    }

    //update amenity page
    public function Edit_amenity($id)
    {
        $datas = Amenities::findOrFail($id);

        return view('backend/amenities/edit_amenities', compact('datas'));
    }


    //update amenity function
    public function updated_amenity(Request $request, $id)
    {
        $data = Amenities::findOrFail($id);

        $request->validate([
            'title' => 'required|string',
        ]);

        $data->title = $request->title;

        $data->save();

        return redirect('amenities')->with('success', 'Amenity Updated Successfully');
    }

    //Delete amenity function
    public function Delete_amenity($id)
    {
        $data = Amenities::findOrFail($id);

        $data->delete();

        return redirect('amenities')->with('success', 'Amenity Deleted Successfully');
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

        return redirect('complement')->with('success', 'Complement Added Successfully');
    }

    //update complement page
    public function Edit_complement($id)
    {

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

        return redirect('complement')->with('success', 'Complement Updated Successfully');
    }

    //Delete Complement function
    public function Delete_complement($id)
    {
        $data = Complement::findOrFail($id);

        $data->delete();

        return redirect('complement')->with('success', 'Complement Deleted Successfully');
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

        return redirect('bedtype')->with('success', 'Bed Type Added Successfully');
    }

    //update bedtype page
    public function Edit_bedtype($id)
    {
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

        return redirect('bedtype')->with('success', 'Bed Type Updated Successfully');
    }

    //Delete bedtype function
    public function Delete_bedtype($id)
    {
        $data = Bedtype::findOrFail($id);

        $data->delete();

        return redirect('bedtype')->with('success', 'Bed Tpye Deleted Successfully');
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

        return redirect('room')->with('success', 'Room Added Successfully');
    }

    //update room page
    public function Edit_room($id)
    {
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

        return redirect('room')->with('success', 'Room Updated Successfully');
    }

    //Delete room function
    public function Delete_room($id)
    {
        $data = room::findOrFail($id);

        $data->delete();

        return redirect('room')->with('success', 'Room Deleted Successfully');
    }

    //Enable room status
    public function Enable($id)
    {
        $data = room::findOrFail($id);

        $data->room_status = "Disable";

        $data->save();

        return redirect('room')->with('success', 'Room Status Disabled');
    }

    //Enable room status
    public function Disable($id)
    {
        $data = room::findOrFail($id);

        $data->room_status = "Enable";

        $data->save();

        return redirect('room')->with('success', 'Room Status Enabled');
    }

    //fetch all room page
    public function Roomtype()
    {
        $datas = Roomtype::orderBy('id', 'desc')->get();

        return view('backend/roomtype/roomtype', compact('datas'));
    }

    //add room page
    function Add_roomtype()
    {
        $amenities = Amenities::orderBy('id', 'desc')->get();

        $complements = Complement::orderBy('id', 'desc')->get();

        return view('backend/roomtype/add_roomtype', compact('amenities', 'complements'));
    }

    //add room function
    function Save_roomtype(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'adult' => 'required',
            'child' => 'required',
            'fare' => 'required',
            'cancellation_fee' => 'required',
            'amenities' => 'required',
            'complements' => 'required',
            'total_rooms' => 'required',
            'total_beds' => 'required',
            'description' => 'required',
            'cancellation_policy' => 'required',

            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'image4' => 'required',
        ]);

        $data = new Roomtype;

        $data->name = $request->name;
        $data->adult = $request->adult;
        $data->child = $request->child;
        $data->fare = $request->fare;
        $data->cancellation_fee = $request->cancellation_fee;

        $data->amenities = json_encode($request->amenities);
        $data->complements = json_encode($request->complements);

        $data->total_rooms = $request->total_rooms;
        $data->total_beds = $request->total_beds;
        $data->description = $request->description;
        $data->cancellation_policy = $request->cancellation_policy;

        $imageName = time() . '_' . $request->image1->getClientOriginalExtension();

        $request->image1->move('backend/assets/images', $imageName);

        $data->image1 = $imageName;

        $imageName = time() . '_' . $request->image2->getClientOriginalExtension();

        $request->image2->move('backend/assets/images', $imageName);

        $data->image2 = $imageName;

        $imageName = time() . '_' . $request->image3->getClientOriginalExtension();

        $request->image3->move('backend/assets/images', $imageName);

        $data->image3 = $imageName;

        $imageName = time() . '_' . $request->image4->getClientOriginalExtension();

        $request->image4->move('backend/assets/images', $imageName);

        $data->image4 = $imageName;


        $data->save();

        return redirect('roomtype')->with('success', 'Room Type Added Successfully');
    }

    //update room page
    public function Edit_roomtype($id)
    {

        $datas = Roomtype::findOrFail($id);

        $amenities = Amenities::orderBy('id', 'desc')->get();

        $complements = Complement::orderBy('id', 'desc')->get();

        return view('backend/roomtype/edit_roomtype', compact('datas', 'amenities', 'complements'));
    }

    //update room function
    function Updated_roomtype(Request $request, $id)
    {
        $data = Roomtype::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'adult' => 'required',
            'child' => 'required',
            'fare' => 'required',
            'cancellation_fee' => 'required',
            'amenities' => 'required',
            'complements' => 'required',
            'total_rooms' => 'required',
            'total_beds' => 'required',
            'description' => 'required',
            'cancellation_policy' => 'required',

        ]);


        $data->name = $request->name;
        $data->adult = $request->adult;
        $data->child = $request->child;
        $data->fare = $request->fare;
        $data->cancellation_fee = $request->cancellation_fee;

        $data->amenities = json_encode($request->amenities);
        $data->complements = json_encode($request->complements);

        $data->total_rooms = $request->total_rooms;
        $data->total_beds = $request->total_beds;
        $data->description = $request->description;
        $data->cancellation_policy = $request->cancellation_policy;

        if ($request->image1) {
            $imageName = time() . '_' . $request->image1->getClientOriginalExtension();

            $request->image1->move('backend/assets/images', $imageName);

            $data->image1 = $imageName;
        }

        if ($request->image2) {
            $imageName = time() . '_' . $request->image2->getClientOriginalExtension();

            $request->image2->move('backend/assets/images', $imageName);

            $data->image2 = $imageName;
        }

        if ($request->image3) {
            $imageName = time() . '_' . $request->image3->getClientOriginalExtension();

            $request->image3->move('backend/assets/images', $imageName);

            $data->image3 = $imageName;
        }

        if ($request->image4) {
            $imageName = time() . '_' . $request->image4->getClientOriginalExtension();

            $request->image4->move('backend/assets/images', $imageName);

            $data->image4 = $imageName;
        }

        $data->save();

        return redirect('roomtype')->with('success', 'Room Type Updated Successfully');
    }

    //Delete room function
    public function Delete_roomtype($id)
    {
        $data = Roomtype::findOrFail($id);

        $data->delete();

        return redirect('roomtype')->with('success', 'Room Type Deleted Successfully');
    }

    //fetch all Gallery page
    function Create_gallery()
    {
        $datas = Gallery::orderBy('id', 'desc')->get();

        return view('backend/gallery/gallery', compact('datas'));
    }

    //add gallery page
    function Add_gallery()
    {
        return view('backend/gallery/add_gallery');
    }


    //add gallery function
    function Save_gallery(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required',
        ]);

        $data = new Gallery;

        $data->title = $request->title;

        $imageName = time() . '_' . $request->image->getClientOriginalExtension();

        $request->image->move('backend/assets/images', $imageName);

        $data->image = $imageName;

        $data->save();

        return redirect('create_gallery')->with('success', 'Image Added Successfully');
    }


    //update gallery page
    function Edit_gallery($id)
    {
        $datas = Gallery::findOrFail($id);

        return view('backend/gallery/edit_gallery', compact('datas'));
    }


    //update gallery function
    function updated_gallery(Request $request, $id)
    {
        $data = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'required|string',
        ]);

        $data->title = $request->title;

        if ($request->image) {

            $imageName = time() . '_' . $request->image->getClientOriginalExtension();

            $request->image->move('backend/assets/images', $imageName);

            $data->image = $imageName;
        }

        $data->save();

        return redirect('create_gallery')->with('success', 'Galery Updated Successfully');
    }

    //Delete gallery function
    public function Delete_gallery($id)
    {
        $data = Gallery::findOrFail($id);

        $data->delete();

        return redirect('create_gallery')->with('success', 'Image Deleted Successfully');
    }
}
