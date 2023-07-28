@extends('reception.reception_master')
@section('content')

@php
    $rooms = App\Models\Roomtype::where('available_rooms', '!=', 'total_booked')->where('available_rooms', '!=', 0)->get();
@endphp

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header"><h3>Book a new reservation</h3></div>
<div class="card-footer">

</div>
        <div class="card-body">
            <form action="{{ route('reception-reseve-room') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label class="mb-1">Customer name</label>
                            <input type="text" value="{{ old('name') }}" name="name" class="form-control" required>
                        </div>
                    </div>


                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label class="mb-1">Customer Phone</label>
                            <input type="number" value="{{ old('phone') }}" name="phone" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label class="mb-1">Customer Email</label>
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label class="mb-1">Select Room</label>
                            <select name="room_id" class="select2 form-select" id="select2-basic" required>
                                <option value="">Select Room</option>
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->name}}</option>
                                @endforeach


                            </select>
                        </div>
                    </div>


                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label class="mb-1">Checkin date</label>
                            <input type="date" name="chechin_date" class="form-control date" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label>Checkout date</label>
                            <input type="date" name="chechout_date" class="form-control date" required>
                        </div>
                    </div>


                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label class="mb-1">Total Adult</label>
                            <input type="number" value="{{ old('adult') }}" name="adult" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-1">
                        <div class="form-group">
                            <label class="mb-1">Total Children</label>
                            <input type="number" value="{{ old('child') }}" name="child" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12 mb-1">
                        <div class="form-group">
                            <label class="mb-1">Number Of Rooms</label>
                            <input type="number" value="{{ old('total_room') }}" name="total_room" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 mt-2">
                    <input type="submit" class="btn btn-primary" value="Make a reservation">
                </div>
            </form>
        </div>
    </div>

    </div>
</div>





















@endsection
