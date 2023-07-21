<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>C5</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

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

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ ('../frontend/css/custom.css') }}" rel="stylesheet">

   
</head>

<body class="datepicker_mobile_full">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Page Preload -->

    <div class="layer"></div><!-- Opacity Mask -->

    <header>

        <div class="nav__bar">
            <div class="icons-box">
                <label for="show-menu" class="menu-icon"><i class="fa fa-bars"></i></label>
                <a href="/" class="c5">C5<span class="hotel">HOTEL</span></a>
            </div>


            <input type="checkbox" id="show-menu">


            <nav class="menu-list">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('about_us')}}">About Us</a></li>
                    

                    <li class="dropdown">
                        <a id="rooms">Rooms & Suites <i id="angle" class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div id="all_rooms" class="dropdown-content">

                            <ul>
                                @foreach($roomtype as $key => $room)
                                    <a href="{{route('room_details', $room->id)}}">
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
                    
                </ul>

            </nav>

            <div>
                <a href="/" class="btn_book">Book Now</a>

            </div>

        </div>
    </header><!-- /Header -->
    <main>