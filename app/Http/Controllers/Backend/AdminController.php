<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Reception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //admin index
    public function Index()
    {
        return view('admin.auth.login');
    }

    //admin login
    public function AdminLogin(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('success', 'Admin Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    //admin dash baord
    public function Dashboard()
    {
        return view('admin.index');
    }

    //admin profile
    public function AdminProfile()
    {
        $admin = Admin::where('id', Auth::guard('admin')->user()->id)->first();

        return view('admin.profile.index', compact('admin'));
    }

    //admin update profile
    public function AdminProfileUpdate(Request $request)
    {
        Admin::where('id', Auth::guard('admin')->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'Admin profile updated Successfully');
    }

    //admin update password
    public function AdminPasswordUpdate(Request $request)
    {

        $request->validate([
            'password' => 'required|confirmed',
            'current_password' => 'required',
        ]);
        //check password
        $hashedPassword = Auth::guard('admin')->user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            Admin::findorFail(Auth::guard('admin')->user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('success', 'Password updated Successfully');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }
    }

    //=======================================ADMIN RECEPTIONSIST
    //admin view receptionist
    public function AdminViewReceptionists()
    {
        $recept = Reception::all();
        return view('backend.receptionists.index', compact('recept'));
    }

    //admin add reception
    public function AdminAddReceptionists(Request $request)
    {
        $type = $request->type;
        if ($type != null) {
            Admin::create([

                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            return redirect()->back()->with('success', 'Admin add successfully');
        } else {

            Reception::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            return redirect()->back()->with('success', 'Receptionist add successfully');
        }
    }

    //admin delete receptionist
    public function AdminDELETEReceptionists($id)
    {
        Reception::find($id)->delete();
        return redirect()->back()->with('success', 'Receptionist deleted successfully');
    }


    //admin edit recept
    public function AdminUPDATEReceptionists(Request $request, $id){
        $password = $request->password;

           if($password != null){
               Reception::findOrFail($id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make( $request->name),
               ]);
               return redirect()->back()->with('success', 'Receptionist Updated successfully');
           }else{

            Reception::findOrFail($id)->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,

               ]);
               return redirect()->back()->with('success', 'Receptionist Updated successfully');

           }

        $recp = Reception::findOrFail($id);
            return view('backend.receptionists.index', compact('recp'));

    }

    //admin view booking details
    public function AdminViewBookingDetails($id){
        $booking =  Booking::findOrFail($id)->first();
        return view('backend.booking.booking_details', compact('booking'));
    }
}
