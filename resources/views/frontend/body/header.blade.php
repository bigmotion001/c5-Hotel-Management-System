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

    <!-- BASE CSS -->
    <link href="{{ ('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ ('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ ('frontend/css/vendors.min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ ('frontend/css/custom.css') }}" rel="stylesheet">

   
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
                    <li><a href="/">About Us</a></li>
                    

                    <li class="dropdown">
                        <a id="rooms">Rooms & Suites <i id="angle" class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div id="all_rooms" class="dropdown-content">

                            <ul>
                                <a href="/">
                                    <li>Standard Room</li>
                                </a>
                                <a href="/">
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
                                </a>
                            </ul>

                        </div>
                    </li>

                    <li><a href="/">Contact</a></li>
                    <li><a href="/">Photo Gallery</a></li>
                    
                </ul>

            </nav>

            <div>
                <a href="/" class="btn_book">Book Now</a>

            </div>

        </div>
    </header><!-- /Header -->

    <div class="nav_panel">
        <a href="#" class="closebt open_close_nav_panel"><i class="bi bi-x"></i></a>
        <div class="logo_panel"><img src="img/logo_sticky.png" width="135" height="45" alt=""></div>
        <div class="sidebar-navigation">
            <nav>
                <ul class="level-1">
                    <li class="parent"><a href="#0">Home</a>
                        <ul class="level-2">
                            <li class="back"><a href="#0">Back</a></li>
                            <li><a href="index-2.html">Home Video Bg</a></li>
                            <li><a href="index-3.html">Home Carousel</a></li>
                            <li><a href="index-4.html">Home FlexSlider</a></li>
                            <li><a href="index-5.html">Home Youtube/Vimeo</a></li>
                            <li><a href="index-6.html">Home Parallax</a></li>
                            <li><a href="index-7.html">Home Parallax 2</a></li>
                        </ul>
                    </li>
                    <li class="parent"><a href="#0">Rooms & Suites</a>
                        <ul class="level-2">
                            <li class="back"><a href="#0">Back</a></li>
                            <li><a href="room-list-1.html">Room list 1</a></li>
                            <li><a href="room-list-2.html">Room list 2</a></li>
                            <li><a href="room-list-3.html">Room list 3</a></li>
                            <li><a href="room-details.html">Room details</a></li>
                            <li><a href="room-details-booking.html">Working Booking Request</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="restaurant.html">Restaurant</a></li>
                    <li><a href="news-1.html">News & events</a></li>
                    <li><a href="contacts.html">Contact</a></li>
                    <li class="parent"><a href="#0">Other Pages</a>
                        <ul class="level-2">
                            <li class="back"><a href="#0">Back</a></li>
                            <li><a href="404.html">Error Page</a></li>
                            <li><a href="gallery.html">Masonry Gallery</a></li>
                            <li><a href="menu-of-the-day.html">Menu of the day</a></li>
                            <li><a href="modal-advertise-1.html">Modal Advertise</a></li>
                            <li><a href="cookie-bar.html">GDPR Cookie Bar</a></li>
                            <li><a href="coming-soon.html" target="_blank">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="parent"><a href="#0">Menu Versions</a>
                        <ul class="level-2">
                            <li class="back"><a href="#0">Back</a></li>
                            <li><a href="menu-2.html">Menu Version 2 <span class="custom_badge">Hot</span></a></li>
                            <li><a href="menu-3.html">Menu Version 3</a></li>
                            <li><a href="menu-4.html">Menu Version 4</a></li>
                            <li><a href="menu-5.html">Menu Version 5</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="panel_footer">
                    <div class="phone_element"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121 1334</span></a></div>
                </div>
                <!-- /panel_footer -->
            </nav>
        </div>
        <!-- /sidebar-navigation -->
    </div>
    <!-- /nav_panel -->

    <main>