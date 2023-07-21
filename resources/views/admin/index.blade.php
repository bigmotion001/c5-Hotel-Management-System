@extends('admin.admin_master')

@section('content')

@php
    $room = App\Models\Room::all();
@endphp

<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- users list start -->
        <section class="app-user-list">
            <div class="row">
                <div class="col-6 col-sm-3 col-lg-3 col-xl-3 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="">
                                <div class="avatar bg-light-danger p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather='book'></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">{{ count($room) }}</h2>
                                <p class="card-text">Total Rooms</p>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-sm-3 col-lg-2 col-xl-3 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="">
                                <div class="avatar bg-light-warning p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather='book'></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">#</h2>
                                <p class="card-text">Today's Available Rooms</p>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-6 col-sm-3 col-lg-3 col-xl-3 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="">
                                <div class="avatar bg-light-info p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather='book'></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">#</h2>
                                <p class="card-text">Today's Reserved Rooms</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-3 col-lg-3 col-xl-3 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="">
                                <div class="avatar bg-light-danger p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather='book'></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">#</h2>
                                <p class="card-text">Total Booked Rooms</p>
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
                <div class="col-6 col-sm-3 col-lg-3 col-xl-3 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="">
                                <div class="avatar bg-light-info p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather='book'></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">#</h2>
                                <p class="card-text">Total Registered Guest</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 col-xl-3 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="">
                                <div class="avatar bg-light-warning p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather='wifi'></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">#</h2>
                                <p class="card-text">Total Running Booking</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3 col-xl-3 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="">
                                <div class="avatar bg-light-danger p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather='tv'></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">#</h2>
                                <p class="card-text">Total Booking Request</p>
                            </a>
                        </div>
                    </div>
                </div> <!-- list and filter end -->
                <div class="col-6 col-sm-3 col-lg-3 col-xl-3 col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <a href="">
                                <div class="avatar bg-light-danger p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather='tv'></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">#</h2>
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
                <h3 class="card-title ">Todays Booked Rooms</h3>
            </div>

            <!-- /.box-header -->
            <div class="card-body">

                <div class="table-responsive ">

                    <table id="example1" class="table table-bordered table-striped">



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
