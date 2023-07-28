@extends('reception.reception_master')

@section('content')
    @php
        $today = date('d F Y');
        $user = App\Models\User::all();
        $room = App\Models\Roomtype::sum('total_rooms');
        $availableroom = App\Models\Roomtype::where('available_rooms', '!=', 0)->sum('available_rooms');
        $todaybooked = App\Models\Booking::where('today_booking', $today)->count('checking');
        $todaybookedroom = App\Models\Booking::where('today_booking', $today)->sum('total_room');
        $runningbooking = App\Models\Booking::where('status', 1)->count();
        $canclledbooking = App\Models\Booking::where('status', 2)->count();
        $checkoutbooking = App\Models\Booking::where('status', 3)->count('status');
        //booking
        $todayreservation = App\Models\Booking::where('today_booking', $today)
            ->orderBy('created_at', 'DESC')
            ->get();

        $rooms = App\Models\Roomtype::where('available_rooms', '!=', 0)->get();
    @endphp



    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="app-user-list">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="">
                                    <div class="avatar bg-light-success p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='book'></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ $room }}</h2>
                                    <p class="card-text">Total Rooms</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='book'></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ $availableroom }}</h2>
                                    <p class="card-text">Available Rooms</p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='book'></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ $todaybooked }}</h2>
                                    <p class="card-text">Today's Booking</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='book'></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ $todaybookedroom }}</h2>
                                    <p class="card-text">Today's Total Booked Rooms</p>
                                </a>
                            </div>
                        </div>
                    </div> <!-- list and filter end -->
                    <!-- list and filter end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>







    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="app-user-list">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='book'></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ count($user) }}</h2>
                                    <p class="card-text">Total Registered Guest</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='wifi'></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ $runningbooking }}</h2>
                                    <p class="card-text">Total Running Booking</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='tv'></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ $checkoutbooking }}</h2>
                                    <p class="card-text">Today's Total Checkout</p>
                                </a>
                            </div>
                        </div>
                    </div> <!-- list and filter end -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <a href="">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather='tv'></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">{{ $canclledbooking }}</h2>
                                    <p class="card-text">Total Booking Canceled</p>
                                </a>
                            </div>
                        </div>
                    </div> <!-- list and filter end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>












    <hr>
    <div class="row">
        <br>
        <div class="col-md-12 ">

            <div class="card">

                <div class="card-header with-border">
                    <h3 class="card-title ">Search </h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('search-p') }}">

                        @csrf
                        <div class="form-group mb-1">

                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Search  Booking Number or customer name" />

                        </div>
<input type="submit" value="Search" class="btn btn-primary form-control">

                    </form>


                    <style>
                        input[type=text]:focus {
                            border: 3px solid red;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>



<hr>


    <div class="row">
        <br>
        <div class="col-md-12 ">

            <div class="card">

                <div class="card-header with-border">
                    <h3 class="card-title ">Today's Reservation Request</h3>
                </div>

                <!-- /.box-header -->
                <div class="card-body">

                    <div class="table-responsive ">

                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>Guest</th>
                                    <th>Room</th>
                                    <th>Total Room</th>
                                    <th>Checkin date</th>
                                    <th>Checkout date</th>
                                    <th>Amount</th>
                                    <th>Payment Status</th>
                                    <th>Booking Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($todayreservation as $i)
                                    <tr>
                                        <td>{{ $i->user }}</td>
                                        <td>{{ $i->room->name }}</td>
                                        <td>{{ $i->total_room }}</td>
                                        <td><span class="badge bg-success">{{ $i->checking }}</span></td>
                                        <td><span class="badge bg-secondary">{{ $i->checkout }}</span></td>
                                        <td>₦{{ Number_format($i->amount, 2) }}</td>
                                        <td>
                                            @if ($i->paid == 0)
                                                <span class="badge bg-danger">Pending</span>
                                            @elseif ($i->paid == 1)
                                                <span class="badge bg-success">Paid</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($i->status == 0)
                                                <span class="badge bg-danger">Pending</span>
                                            @elseif ($i->status == 1)
                                                <span class="badge bg-success">Confirmed</span>
                                            @elseif ($i->status == 2)
                                                <span class="badge bg-warning">Cancelled</span>
                                            @elseif ($i->status == 3)
                                                <span class="badge bg-info">Checkedout</span>
                                            @endif
                                        </td>
                                        <td><a href="{{ route('view-booking', $i->id) }}"
                                                class="btn btn-primary">View</a></td>

                                    @empty
                                    <center><h3 class="text-danger">No booking yet</h3></center>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>

                    </div>
                </div>
                <!-- /.box-body -->

            </div>

            <!-- /.box -->
        </div>

    </div>
    <hr>







    <div class="row">
        <br>
        <div class="col-md-12 ">

            <div class="card">

                <div class="card-header with-border">
                    <h3 class="card-title ">Available Room for Booking</h3>
                </div>

                <!-- /.box-header -->
                <div class="card-body">

                    <div class="table-responsive ">

                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>

                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Total Rooms</th>
                                    <th>Available Rooms</th>
                                    <th>Total Booked</th>



                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($rooms as $r)

                                    <tr>

                                        <td>{{ $r->name }}</td>
                                        <td>₦{{ Number_format($r->fare, 2) }}</td>
                                        <td>{{ $r->total_rooms }}</td>
                                        <td>{{ $r->available_rooms }}</td>
                                        <td>{{ $r->total_booked }}</td>





                                    @empty
                                        <h3>No booking yet</h3>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>


                    </div>
                </div>
                <!-- /.box-body -->

            </div>

            <!-- /.box -->
        </div>

    </div>










    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Modal Sizes end -->
@endsection
