@php
    $site = App\Models\SiteSetting::find(1);
@endphp

<!DOCTYPE html>
<html lang="zxx">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $site->name }}">
    <meta name="author" content="{{ $site->name }}">
    <title>{{ $site->name }}</title>

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

    <!-- BASE CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/vendors.min.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('frontend/coming_soon_assets/coming-soon.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
</head>

<body>

   <div class="container-fluid">
        <div class="row vh-100 justify-content-center">
            <div class="col-lg-8">
                <div id="wrapper">
                    <div class="row countdown">
                        <div class="col-md-12">
                            <img src="{{ asset($site->logo) }}" width="135" height="45" alt="">
                            <h1>We will be back soon!</h1>
                            <p class="lead">{{ $site->name }}</p>
                        </div>
                        <div id="countdown_wp">
                            <div class="container_count">
                                <div id="days">00</div>days
                            </div>
                            <div class="container_count">
                                <div id="hours">00</div>hours
                            </div>
                            <div class="container_count">
                                <div id="minutes">00</div>minutes
                            </div>
                            <div class="container_count last">
                                <div id="seconds">00</div>seconds
                            </div>
                        </div>
                    </div><!-- End Countdown-->
                </div>
            </div>
        </div>
    </div><!-- End Container-->

    <div id="slides">
        <ul class="slides-container">
            <li><img src="{{ asset('frontend/coming_soon_assets/slide_1.jpg') }}" alt="Image"></li>
            <li><img src="{{ asset('frontend/coming_soon_assets/slide_2.jpg') }}" alt="Image"></li>
            <li><img src="{{ asset('frontend/coming_soon_assets/slide_3.jpg') }}" alt="Image"></li>
        </ul>
    </div><!-- End background slider -->

    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('frontend/js/common_scripts.js') }}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{ asset('frontend/coming_soon_assets/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('frontend/coming_soon_assets/coming_soon_func.js') }}"></script>

</body>


</html>
