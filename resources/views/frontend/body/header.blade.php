@php
    $site = App\Models\SiteSetting::find(1);
@endphp


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>{{ $site->name }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset($site->favicon) }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/extensions/sweetalert2.min.css') }}">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/34a4d426e8.js"></script>

    <!-- BASE CSS -->
    <link href="{{ ('../frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ ('../frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ ('../frontend/css/vendors.min.css') }}" rel="stylesheet">

    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css
" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ ('../frontend/css/custom.css') }}" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @livewireStyles

</head>

<body class="datepicker_mobile_full">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    <header>

        <div class="nav__bar">
            <div class="icons-box">
                <label id="menu" for="show-menu" class="menu-icon"><i class="fa fa-bars"></i></label>
                <a href="{{ url('/') }}" class="c5"><img src="{{ asset($site->logo) }}" alt=""></a>
            </div>


            <input type="checkbox" id="show-menu">


            <nav class="menu-list">
                <ul>
                    <li><a href="/">Home</a></li>

                    <li><a href="{{route('about_us_frontend')}}">About Us</a></li>


                    <li class="dropdown">
                        <a id="rooms">Rooms & Suites <i id="angle" class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div id="all_rooms" class="dropdown-content">

                            <ul>
                                @foreach($roomtype as $key => $room)
                                    <a class="drop" href="{{route('room_details', $room->id)}}">
                                        <li>{{$room->name}}</li>
                                    </a>
                                @endforeach
                                <!-- <a href="/">
                                    <li>Executive Room</li>
                                </a>
                                <a href="/">
                                    <li>Delux Room</li>
                                </a>
                                <a href="/">
                                    <li>Studio Room</li>
                                </a>
                                <a href="/">
                                    <li>Delux Suite</li>
                                </a>
                                <a href="/">
                                    <li>Royal Suite</li>
                                </a>
                                <a href="/">
                                    <li>Diplomatic Suite</li>
                                </a>
                                <a href="/">
                                    <li>Presidential Suite</li>
                                </a> -->
                            </ul>

                        </div>
                    </li>

                    <li><a href="{{route('contact_us')}}">Contact</a></li>
                    <li><a href="{{route('gallery')}}">Photo Gallery</a></li>
                    @guest()
                    <li><a href="{{route('login')}}">Login</a></li>
                    @else
                    <li><a href="{{route('user_dashboard')}}">Dashboard</a></li>
                    @endguest

                </ul>

            </nav>

            <div>
                <a href="/#booking_section" class="btn_book">Book Now</a>

            </div>

        </div>
    </header><!-- /Header -->
    <main>
