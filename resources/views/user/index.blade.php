@extends('frontend.frontend_master')



@section('content')



<div class="hero small-height jarallax" data-jarallax data-speed="0.2" style="position: relative;">
    <div id="open" class="open_icon">
        <i class="fa fa-bars"></i>
    </div>
    <img class="jarallax-img" src="frontend/img/hero_home_1.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">C5 Luxury Hotel Experience</small>
            <h1 class="slide-animated two">User Dashboard</h1>
            <small class="slide-animated one">Welcome {{ Auth::user()->name }}</small>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->


<!-- User Dashboard -->

<div class="container1 my-4" style="position: relative;">


    <div class="user_cont">

        <div id="side_bar" class="side__bar col-sm-12 col-md-6 col-lg-3">
            <!-- <span class="close fa fa-close"></span> -->

            <ul>
                <li><a href="{{ route('user_dashboard') }}"><span class="fa fa-home"></span> Dashboard</a></li>
                <li><a href=""><span class="fa fa-sticky-note"></span> Booking Request</a></li>
                <li><a href="/"><span class="fa fa-medium"></span> My Bookings</a></li>
                <li><a href="/"><span class="fa fa-credit-card-alt"></span> Payment Log</a></li>
                <li><a href="/"><span class="fa fa-ticket"></span> Open Ticket</a></li>
                <li><a href="/"><span class="fa fa-calendar-o"></span> Support Ticket</a></li>
                <li><a href="/"><span class="fa fa-user"></span> Profile Settings</a></li>
                <li><a href="/"><span class="fa fa-key"></span> Change Password</a></li>
                <li><a href="/"><span class="fa fa-sign-out"></span> Logout</a></li>
            </ul>
        </div>

        <div class="box_cont" style="position: relative; z-index:-1;">

            <div class="box">

                <div class="cont border pt-4">

                    <p style="margin-left: 1em;" class="fa fa-newspaper-o icon"></p>

                    <div style="margin-left: 1em;">
                        <h5>Total</h5>
                        <p style="font-weight: 500; font-size:16px">0</p>
                    </div>

                </div>

                <div class="cont border pt-4">

                    <p style="margin-left: 1em;" class="fa fa-get-pocket icon"></p>

                    <div style="margin-left: 1em;">
                        <h5>Request</h5>
                        <p style="font-weight: 500; font-size:16px">0</p>
                    </div>

                </div>

                <div class="cont border pt-4">

                    <p style="margin-left: 1em;" class="fa fa-check icon"></p>

                    <div style="margin-left: 1em;">
                        <h5>Active</h5>
                        <p style="font-weight: 500; font-size:16px">0</p>
                    </div>

                </div>

                <div class="cont border pt-4">

                    <p style="margin-left: 1em;" class="fa fa-times icon"></p>

                    <div style="margin-left: 1em;">
                        <h5>Canceled</h5>
                        <p style="font-weight: 500; font-size:16px">0</p>
                    </div>

                </div>

                <div class="cont border pt-4">

                    <p style="margin-left: 1em;" class="fa fa-outdent icon"></p>

                    <div style="margin-left: 1em;">
                        <h5>Check Out</h5>
                        <p style="font-weight: 500; font-size:16px">0</p>
                    </div>

                </div>

                <div class="cont border pt-4">

                    <p style="margin-left: 1em;" class="fa fa-credit-card-alt icon"></p>

                    <div style="margin-left: 1em;">
                        <h5>Payment</h5>
                        <p style="font-weight: 500; font-size:16px">&dollar;0.00</p>
                    </div>

                </div>



            </div>


            <div class="table mt-4">
                <h5>Recent Bookings</h5>

                <table>
                    <tr>
                        <th>Booking No.</th>
                        <th>Check In - Check Out</th>
                        <th>Total Amount</th>
                        <th>Due</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>23qw567f</td>
                        <td>12am - 12pm</td>
                        <td>#20000</td>
                        <td>5th July</td>
                        <td>Active</td>
                        <td>Change</td>
                    </tr>
                    <tr>
                        <td>23qw567f</td>
                        <td>12am - 12pm</td>
                        <td>#20000</td>
                        <td>5th July</td>
                        <td>Active</td>
                        <td>Change</td>
                    </tr>
                    <tr>
                        <td>23qw567f</td>
                        <td>12am - 12pm</td>
                        <td>#20000</td>
                        <td>5th July</td>
                        <td>Active</td>
                        <td>Change</td>
                    </tr>

                </table>
            </div>

        </div>


    </div>


</div>


<!-- /bg_white -->






@endsection
