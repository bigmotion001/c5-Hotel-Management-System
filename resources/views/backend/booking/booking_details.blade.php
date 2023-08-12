@extends('admin.admin_master')
@section('content')




@section('content')
    @php
        $roomNumber = App\Models\Room::where('room_type', $booking->room->name)->get();
    @endphp
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <tbody>
                            <td>
                                <h4><b>Booking No: <br> <span class="text-info">{{ $booking->booking_id }}</span></b></h4>
                            </td>

                            <td>
                                @if ($booking->paid == 0)
                                    <h4 class=""><b>Payment Status: <br> <span class="text-danger">Pending</span></b>
                                    </h4>
                                @elseif ($booking->paid == 1)
                                    <h4 class=""><b>Payment Status: <br> <span class="text-success">Paid</span></b>
                                    </h4>
                                @endif
                            </td>
                            <td>
                                @if ($booking->status == 0)
                                    <h4 class=""><b>Booking Status: <br> <span class="text-danger">Pending</span></b>
                                    </h4>
                                @elseif ($booking->paid == 1)
                                    <h4 class=""><b>Booking Status: <br> <span
                                                class="text-success">Confirmed</span></b></h4>
                                @elseif ($booking->paid == 2)
                                    <h4 class=""><b>Booking Status: <br> <span
                                                class="text-warning">Cancelled</span></b></h4>
                                @elseif ($booking->paid == 3)
                                    <h4 class=""><b>Booking Status: <br> <span class="text-info">Checked
                                                Out</span></b></h4>
                                @endif
                            </td>
                            <td>
                                <h4><b>Booking Date: <br> <span class="text-info">{{ $booking->checking }}</span></b></h4>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <div class="row ">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Room Type</th>
                                    <th>Total Room</th>
                                    <th>Price</th>

                                    <th>Total Day</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td class="text-left">{{ $booking->room->name }}</td>
                                    <td>{{ $booking->total_room }}</td>
                                    <td>₦{{ number_format($booking->room->fare) }}</td>

                                    <td>{{ $booking->total_day }}</td>
                                    <td>₦{{ number_format($booking->amount) }} </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <hr>

                    <br> <br>
                    <h5 class="mb-1">update payment and booking info</h5>

                    <form method="post" action="{{ route('update-booking', $booking->id) }}">
                        @csrf
                        <input type="hidden" name="old_paymentstatus" value="{{ $booking->paid }}">
                        <input type="hidden" name="old_bookingstatus" value="{{ $booking->status }}">
                        <input type="hidden" name="old_roomnumber" value="{{ $booking->room_number }}">
                        <div class="row mt-25">
                            <div class="col-lg-4">
                                <div class="form-group mb-1">
                                    <label class="mb-1">Payment Status<span class="text-danger">*</span></label>
                                    <select name="payment_status" class="select2 form-select" id="select2-basic" >
                                        @if ($booking->paid == 1)
                                            <option value="">Completed</option>
                                        @elseif ($booking->paid == 0)
                                        <option value="">Pending</option>
                                        @else
                                        <option value="">Select payment status</option>
                                        @endif
                                        <option value="0" >Pending
                                        </option>
                                        <option value="1" >Completed
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="mb-1">Booking Status<span class="text-danger">*</span></label>
                                    <select name="booking_status" class="select2 form-select" id="select2-basic" >
                                        @if ($booking->status == 0)
                                        <option value="">Pending</option>
                                        @elseif ($booking->status == 1)
                                        <option value="">Approved</option>
                                        @elseif ($booking->status == 2)
                                        <option value="">Canceled</option>
                                        @elseif ($booking->status == 3)
                                        <option value="">Checked Out</option>
                                        @else
                                        <option value="">Select Booking Status</option>
                                        @endif
                                        <option value="0">Pending</option>
                                        <option value="1">Approved</option>
                                        <option value="2">Canceled</option>
                                        <option value="3">Checked Out</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="mb-1">Assign Room Number<span class="text-danger">*</span></label>
                                    <select name="room_number" class="select2 form-select" id="select2-basic">
                            <option value="">
                                {{ $booking->room_number != null ? $booking->room_number : ' Select Room Number' }}
                            </option>
                                        @foreach ($roomNumber as $n)

                    <option value="{{ $n->room_number }}">{{ $n->room_number }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center mt-1">
                                    <div class="form-check form-switch form-check-primary">
                                        <input type="checkbox" class="form-check-input" id="customSwitch10" value="1"
                                            name="type" />
                                        <label class="form-check-label" for="customSwitch10">
                                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                                        </label>
                                    </div>
                                    <label class="form-check-label fw-bolder" for="customSwitch10">Send confirmation email
                                        to customer?</label>
                                </div>
                            </div>
                        </div> <br> --}}

                        {{-- <div class="row mt-25">
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary" value="Update This Booking">
                            </div>
                        </div> --}}
                    </form>
                    <a href="{{  route('admin-delete-booking', $booking->id) }}" class="btn btn-danger" id="delete">Delete Booking</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Merge Room and Date</div>
                <div class="card-body">
                    <form novalidate="" data-validate="parsley" id="RoomDateFormId">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Check In<span class="red">*</span></label>
                                    <input type="text" name="checkin_date" id="checkin_date"
                                        class="form-control parsley-validated" placeholder="yyyy-mm-dd"
                                        value="{{ $booking->checking }}" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="checkout_date">Check Out<span class="red">*</span></label>
                                    <input type="text" name="checkout_date" id="checkout_date"
                                        class="form-control parsley-validated" placeholder="yyyy-mm-dd"
                                        value="{{ $booking->checkout }}" readonly>
                                </div>
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="room">Room Number<span class="red">*</span></label>
                                    <input type="number" name="room" id="room"
                                        class="form-control parsley-validated" value="{{ $booking->room_number }}"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>




                    </form>
                </div>
            </div>
            <div class="card mt-25">
                <div class="card-header">Customer Information</div>
                <div class="card-body">
                    <p><strong>Name</strong>: {{ $booking->user }}</p>

                    <p><strong>Phone</strong>: {{ $booking->phone }}</p>
                    <p><strong>Email</strong>: {{ $booking->email }}</p>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

