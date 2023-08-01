<?php

namespace App\Http\Livewire;

use App\Models\Booking as ModelsBooking;

use Livewire\Component;
use App\Models\Roomtype;
use App\Models\User;
use App\Notifications\C5Notification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Booking extends Component
{
    public $room, $room_name, $adults_booking, $checking_date, $total_amount, $checkout_date, $childs_booking, $room_qty, $user, $booking_id;

    public function render()
    {

        return view('livewire.booking');
    }

    public function Booking(){


         //validate
         $this->validate([
            'checking_date' => 'required',
            'checkout_date' => 'required',
            'room_name' => 'required',
            'adults_booking' => 'required',
            'childs_booking' => 'required',
            'room_qty' => 'required',
        ]);
        $this->room = Roomtype::findOrFail($this->room_name);
        $this->total_amount = $this->room->fare * $this->room_qty;
        $this->user =  User::where('id', Auth::user()->id)->first();

        if($this->checking_date ===  $this->checkout_date){
            $this->dispatchBrowserEvent('swal', [
                'title' => "Checkin date can't be same as checkout date",
                'icon'=>'error',
                'iconColor'=>'red',
            ]);

        }
        elseif($this->checkout_date <  $this->checking_date){
            $this->dispatchBrowserEvent('swal', [
                'title' => "Invalid checkout date",
                'icon'=>'error',
                'iconColor'=>'red',
            ]);

        }


        elseif($this->adults_booking >  $this->room->adult){
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Adults can not be more than' .  ' ' . $this->room->adult . ' ' . ' in this room',
                'icon'=>'error',
                'iconColor'=>'red',
            ]);

        }
        elseif($this->childs_booking >  $this->room->child){
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Children can not be more than' .  ' ' . $this->room->child . ' ' . ' in this room',
                'icon'=>'error',
                'iconColor'=>'red',
            ]);

        }
        elseif($this->room->available_rooms == 0 || $this->room->available_rooms ==  $this->room->total_booked){
            $this->dispatchBrowserEvent('swal', [
                'title' => 'The selected room is currently not available at the moment',
                'icon'=>'error',
                'iconColor'=>'red',
            ]);

        }
else{
    $this->booking_id = 'C5-'. rand(999948958,9748739872).'H';
    $this->room->available_rooms -=$this->room_qty;
    $this->room->total_booked +=$this->room_qty;
    $this->room->save();

    //send booking
   ModelsBooking::create([
        'user' => $this->user->name,
        'phone' => $this->user->phone,
        'email' => $this->user->email,
        'room_id' => $this->room->id,
        'booking_id' => $this->booking_id,
        'checking' => date('d F Y', strtotime($this->checking_date)),
        'checkout' => date('d F Y', strtotime($this->checkout_date)),
        'amount' => $this->total_amount,
        'total_room' => $this->room_qty,
        'total_day' => Carbon::parse($this->checking_date)->diffInDays(Carbon::parse($this->checkout_date)),
        'total_adults' => $this->adults_booking,
        'total_children' => $this->childs_booking,
        'today_booking' => Carbon::now()->format('d F Y'),
      'monthly_booking' => Carbon::now()->format('F'),
      'yearly_booking' => Carbon::now()->format('Y'),
        'created_at' => Carbon::now(),
    ]);



//send email
$notifyuserdata = [
    'body' => $this->user->name. ','. ' ' . 'We have recieved your room reservation order, kindly walk in to any of our branch with your reservation number:' . ' ' . '#'.$this->booking_id . ' ' . ' to complete your order. Please note that, your reservation will expire within 24 hours.',
    'text' => $this->booking_id,
    'url' => route('login'),
    'thankyou' => 'Status: Pending',
];

Notification::send($this->user, new C5Notification($notifyuserdata));


    $this->dispatchBrowserEvent('swal', [
        'title' => 'Dear, '. ' '. $this->user->name. ' '. 'your reservation has been processed, kindly check your email address for your reservation number',
        'icon'=>'success',
        'iconColor'=>'green',
    ]);
}




    }//end

}
