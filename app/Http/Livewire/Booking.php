<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Roomtype;


class Booking extends Component
{
    public $room, $room_name, $adults_booking, $checking_date, $checkout_date, $childs_booking, $room_qty;

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

        if($this->adults_booking >  $this->room->adult){
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Adults can not be more than' .  ' ' . $this->room->adult . ' ' . ' in this room',
                'icon'=>'error',
                'iconColor'=>'red',
            ]);

        }elseif($this->childs_booking >  $this->room->child){
            $this->dispatchBrowserEvent('swal', [
                'title' => 'Children can not be more than' .  ' ' . $this->room->child . ' ' . ' in this room',
                'icon'=>'error',
                'iconColor'=>'red',
            ]);

        }
    }
}
