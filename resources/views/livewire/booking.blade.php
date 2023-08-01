@php
    $rooms = App\Models\Roomtype::where('available_rooms', '!=', 'total_booked')->where('available_rooms', '!=', 0)->get();
@endphp


<div>






    <form wire:submit.prevent="Booking()">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">

                    <label>Checking date</label>
                    <input type="date"  wire:model="checking_date"
                        class="form-control date" required>
                </div>
                @error('checking_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Checkout date</label>
                    <input type="date" wire:model="checkout_date" class="form-control date" required>
                </div>
                @error('checkout_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="col-lg-6">


                    <select  wire:model="room_name" class="wide form-control">
                        <option>Select Room</option>
                        @foreach ($rooms as $r)
                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                        @endforeach


                    </select>

                @error('room_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-6">
                        <div class="qty-buttons mb-3 version_2">
                            <input type="button" value="+" class="qtyplus"
                            name="adults_booking">
                            <input type="text" maxlength="5"  name="adults_booking"  wire:model="adults_booking" id="adults_booking"
                                value="" class="qty form-control" placeholder="Adults"
                                required>
                            <input type="button" value="-" class="qtyminus"
                            name="adults_booking">
                        </div>
                        @error('adults_booking')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="col-6">
                        <div class="mb-3 qty-buttons version_2">
                            <input type="button" value="+" class="qtyplus"
                            name="childs_booking">
                            <input type="text" name="childs_booking" wire:model="childs_booking" id="childs_booking"
                                value="" class="qty form-control" placeholder="Childs"
                                required>
                            <input type="button" value="-" class="qtyminus"
                            name="childs_booking">
                        </div>
                    </div>
                    @error('childs_booking')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="mb-3 qty-buttons version_2">
                        <input type="button" value="+"  class="qtyplus" name="room_qty"
                            required>
                        <input type="text" wire:model="room_qty" name="room_qty" id="room_qty"
                            class="qty form-control" placeholder="Number of rooms" required>
                        <input type="button" value="-" class="qtyminus" name="room_qty">
                    </div>
                </div>
                @error('room_qty')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
        </div>
        @guest()
            <p class="text-end mt-4"><a href="{{ route('login') }}" class="btn_1 outline">Login to make
                    a reservation</a></p>
        @else

            <input type="submit" wire:loading.remove class="btn btn-info btn_1 outline" value="Make a reservation" wire:loading.attr="disabled">


                         <div wire:loading >
                           <button class="btn btn-danger btn_1 outline">Processing reservation...</button>
                        </div>
        @endguest
    </form>
























</div>
