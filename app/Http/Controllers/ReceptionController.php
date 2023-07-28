<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Roomtype;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Models\User;
use App\Notifications\C5Notification;
use Illuminate\Support\Facades\Notification;


class ReceptionController extends Controller
{
    //login
    public function Index()
    {
        return view('reception.auth.login');
    }



    //lgoin
    public function ReceptionLogin(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('reception')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('reception.dashboard')->with('success', 'reception Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }

    //Receptionist dashboard
    public function Dashboard()
    {
        return view('reception.index');
    }


    //reception view booking deatils
    public function ViewBookingDetails($id)
    {
        $booking = Booking::findOrFail($id);
        return view('reception.booking.booking_details', compact('booking'));
    }

    //reception update booking
    public function UpdateBooking(Request $request, $id)
    {



        //old booking
        if ($request->payment_status == null) {
            $payment = $request->old_paymentstatus;
        } else {
            $payment = $request->payment_status;
        }
        if ($request->booking_status == null) {
            $bstatus = $request->old_bookingstatus;
        } else {
            $bstatus = $request->booking_status;
        }
        if ($request->room_number == null) {
            $broom = $request->old_roomnumber;
        } else {
            $broom = $request->room_number;
        }





        if ($request->booking_status == 0) {
            $status = "Pending";
        } elseif ($request->booking_status == 1) {
            $status = "Confirmed";
        } elseif ($request->booking_status == 2) {
            $status = "Canceled";
        } elseif ($request->booking_status == 3) {
            $status = "Checked Out";
        }
        $site = SiteSetting::find(1);
        $book = Booking::findOrFail($id);
        $user = User::where('email', $book->email)->first();
        $type = $request->type;

        if ($type == null) {

            //update rooms
            if ($request->booking_status == 3) {
                $room = Roomtype::findOrFail($book->room_id);
                $room->available_rooms += $book->total_room;
                $room->total_booked -= $book->total_room;
                $room->save();
            }
            //don't send email

            Booking::findOrFail($id)->update([
                'room_number' => $broom,
                'paid' => $payment,
                'status' => $bstatus,
            ]);









            return redirect()->back()->with('success', 'Booking Updated Successfully..');
        } else {

            //send email
            Booking::findOrFail($id)->update([
                'room_number' => $broom,
                'paid' => $payment,
                'status' => $bstatus,
            ]);

            //update rooms
            if ($request->booking_status == 3) {
                $room = Roomtype::where('id', $book->room_i)->first();
                $room->available_rooms += $book->total_room;
                $room->total_booked -= $book->total_room;
                $room->save();
            }


            //send email
            $notifyuserdata = [
                'body' => $book->user . ',' . ' ' . 'We wish to inform you that the status of your booking is now marked as' . ' ' . $status . '.' . ' ' . ' Thank your for chosen' . ' ' . $site->name,
                'text' => $book->booking_id,
                'url' => route('login'),
                'thankyou' => 'Status:' . ' ' . $status,
            ];

            Notification::send($user, new C5Notification($notifyuserdata));




            return redirect()->back()->with('success', 'Booking Updated Successfully..');
        }
    }


    //reception booka room
    public function ReceptionBookRoom(Request $request)
    {
$room = Roomtype::findOrfail($request->room_id);
        $total_amount = $room->fare * $request->total_room;
        Booking::create([
            'user' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'room_id' => $request->room_id,
            'booking_id' => 'C5-' . rand(999948958, 9748739872) . 'H',
            'checking' => date('d F Y', strtotime($request->chechin_date)),
            'checkout' => date('d F Y', strtotime($request->chechout_date)),
            'amount' => $total_amount,
            'total_room' => $request->total_room,
            'total_day' => Carbon::parse($request->chechin_date)->diffInDays(Carbon::parse($request->chechout_date)),
            'total_adults' => $request->adult,
            'total_children' => $request->child,
            'today_booking' => Carbon::now()->format('d F Y'),
            'monthly_booking' => Carbon::now()->format('F'),
            'yearly_booking' => Carbon::now()->format('Y'),
        ]);
        return redirect()->route('r-pending-booking')->with('success', 'Booking Saved Successfully..');
    }



    //search booking
    public function Search(Request $request){
        $item = $request->search;

        $search = Booking::where('booking_id', 'LIKE', "%$item%")->orwhere('user', 'LIKE', "%$item%")->
        select('user',  'room_id' , 'total_room', 'checking', 'checkout', 'amount', 'paid', 'status', 'id')->get();
        return view('reception.search.result', compact('search'));
    }
}
