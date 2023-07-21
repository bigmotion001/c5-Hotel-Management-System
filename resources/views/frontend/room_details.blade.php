@extends('frontend.frontend_master')



@section('content')



<div class="hero full-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img kenburns" src="img/rooms/1.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center  text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <small class="slide-animated one">Luxury Hotel Experience</small>
                    <h1 class="slide-animated two">Sierra Double Room</h1>
                    <p class="slide-animated three">Exquisite furnishings for a cosy ambience</p>
                </div>
            </div>
        </div>
        <div class="mouse_wp slide-animated four">
            <a href="#first_section" class="btn_explore">
                <div class="mouse"></div>
            </a>
        </div>
        <!-- / mouse -->
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="bg_white" id="first_section">
    <div class="container margin_120_95">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="title">
                    <small>Luxury Experience</small>
                    <h2>A deeply space that invites you to truly Switch Off.</h2>
                </div>
                <p>The dark wood panelling and furnishings, deluxe red-draped four-poster bed, and magnificent black stone bathroom evoke the charm of a secluded Sierra Nevada getaway. The intimate scale and finish give the room a distinctly personal feel.</p>
                <p>The dark wood panelling and furnishings, deluxe red-draped four-poster bed, and magnificent black stone bathroom evoke the charm.</p>
            </div>
            <div class="col-lg-6">
                <div class="room_facilities_list">
                    <ul data-cues="slideInLeft">
                        <li><i class="icon-hotel-double_bed_2"></i> King Size Bed</li>
                        <li><i class="icon-hotel-safety_box"></i> Safety Box</li>
                        <li><i class="icon-hotel-patio"></i>Balcony</li>
                        <li><i class="icon-hotel-tv"></i> 32 Inch TV</li>
                        <li><i class="icon-hotel-disable"></i> Disable Access</li>
                        <li><i class="icon-hotel-dog"></i> Pet Allowed</li>
                        <li><i class="icon-hotel-bottle"></i> Welcome Bottle</li>
                        <li><i class="icon-hotel-wifi"></i> Wifi / Netflix access</li>
                        <li><i class="icon-hotel-hairdryer"></i> Air Dryer</li>
                        <li><i class="icon-hotel-condition"></i> Air Condition</li>
                        <li><i class="icon-hotel-loundry"></i>Loundry Service</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_white -->

<div class="bg_white add_bottom_120">
    <div class="container-fluid p-lg-0">
        <div data-cues="zoomIn">
            <div class="owl-carousel owl-theme carousel_item_centered kenburns rounded-img">
                <div class="item">
                    <img src="img/rooms/opt_5.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/rooms/opt_1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/rooms/opt_4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/rooms/opt_6.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_5.jpg">FullScreen Gallery</a>
            <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_1.jpg"></a>
            <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_4.jpg"></a>
            <a data-fslightbox="gallery_1" data-type="image" href="img/rooms/opt_6.jpg"></a>
        </div>
    </div>
</div>
<!-- /bg_white -->




@endsection