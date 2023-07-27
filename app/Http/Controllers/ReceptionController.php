<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Notifications\C5Notification;
use Illuminate\Support\Facades\Notification;


class ReceptionController extends Controller
{
    //login
    public function Index(){
        return view('reception.auth.login');
    }



    //lgoin
    public function ReceptionLogin(Request $request){
        $check = $request->all();
        if (Auth::guard('reception')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('reception.dashboard')->with('success', 'reception Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    //Receptionist dashboard
    public function Dashboard(){
        return view('reception.index');
    }


    //reception view booking deatils
    public function ViewBookingDetails($id){
        $booking = Booking::findOrFail($id)->first();
        return view('reception.booking.booking_details', compact('booking'));
    }

    //reception update booking
    public function UpdateBooking(Request $request, $id){
        //old booking
        if($request->payment_status == null){
            $payment = $request->old_paymentstatus;
        }else{
            $payment = $request->payment_status;
        }
        if($request->booking_status == null){
            $bstatus = $request->old_bookingstatus;
        }else{
            $bstatus = $request->booking_status;
        }
        if($request->room_number == null){
            $room = $request->old_roomnumber;
        }else{
            $room = $request->room_number;
        }





        if($request->booking_status == 0){
            $status = "Pending";
        }elseif($request->booking_status == 1){
            $status = "Confirmed";

        }elseif($request->booking_status == 2){
            $status = "Canceled";

        }elseif($request->booking_status == 3){
            $status = "Checked Out";
        }
        $site = SiteSetting::find(1);
$book = Booking::findOrFail($id);
$user = User::where('email', $book->email)->first();
        $type = $request->type;

        if($type == null){

            Booking::findOrFail($id)->update([
                'room_number' => $room,
                'paid' => $payment,
                'status' => $bstatus,
            ]);
            return redirect()->back()->with('success', 'Booking Updated Successfully..');

        }else{
            Booking::findOrFail($id)->update([
                'room_number' => $room,
                'paid' => $payment,
                'status' => $bstatus,
            ]);


//send email
$notifyuserdata = [
    'body' => $book->user. ','. ' ' . 'We wish to inform you that the status of your booking is now marked as'. ' ' .$status.'.'. ' '. ' Thank your for chosen' . ' ' . $site->name,
    'text' => $book->booking_id,
    'url' => route('login'),
    'thankyou' => 'Status:' . ' '. $status,
];

Notification::send($user, new C5Notification($notifyuserdata));




            return redirect()->back()->with('success', 'Booking Updated Successfully..');
        }







    }
}
