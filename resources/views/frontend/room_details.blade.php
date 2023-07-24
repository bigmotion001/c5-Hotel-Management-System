<?php
$str = $datas->amenities;
$str2 = $datas->complements;

eval("\$amenity = $str;");

eval("\$complements = $str2;");

?>
@extends('frontend.frontend_master')



@section('content')



<div class="hero full-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img kenburns" src="../backend/assets/images/{{$datas->image1}}" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center  text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <small class="slide-animated one">C5 Luxury Hotel Experience</small>
                    <h1 class="slide-animated two">{{$datas->name}}</h1>
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
                    <small>C5 Luxury Experience</small>
                    <h2>{{$datas->name}}</h2>
                </div>
                <p>{{$datas->description}}</p>

            </div>
            <div class="row col-lg-6">
                <div class="col-sm-12 room_facilities_list">

                    <ul data-cues="slideInLeft">

                        <h5 style="margin-left: 5px;">Amenities:</h5>

                        @foreach($amenity as $item)
                        <li><i style="font-size: 18px;" class="fa fa-dot-circle-o"></i>{{$item}}</li>
                        @endforeach

                    </ul>

                </div>

                <div class="col-sm-12 room_facilities_list" >
                    <ul data-cues="slideInLeft">

                        <h5 style="margin-left: 5px; padding-top: 25px;">Complements:</h5>

                        @foreach($complements as $items)
                        <li><i style="font-size: 18px;" class="fa fa-dot-circle-o"></i>{{$items}}</li>
                        @endforeach

                    </ul>

                </div>

            </div>
           <div class="text-center mt-5">
            @guest()
            <a class="btn_1 outline" href="/#booking_section">Login to make a reservation</a>
            @else
            <a class="btn_1 outline" href="#booking_section">Make a reservation</a>
            @endguest
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
                    <img src="../backend/assets/images/{{$datas->image1}}" alt="">
                </div>
                <div class="item">
                    <img src="../backend/assets/images/{{$datas->image2}}" alt="">
                </div>
                <div class="item">
                    <img src="../backend/assets/images/{{$datas->image3}}" alt="">
                </div>
                <div class="item">
                    <img src="../backend/assets/images/{{$datas->image4}}" alt="">
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a class="btn_1 outline" data-fslightbox="gallery_1" data-type="image" href="../backend/assets/images/{{$datas->image1}}">FullScreen Gallery</a>
            <a data-fslightbox="gallery_1" data-type="image" href="../backend/assets/images/{{$datas->image2}}"></a>
            <a data-fslightbox="gallery_1" data-type="image" href="../backend/assets/images/{{$datas->image3}}"></a>
            <a data-fslightbox="gallery_1" data-type="image" href="../backend/assets/images/{{$datas->image4}}"></a>
        </div>
    </div>
</div>
<!-- /bg_white -->




@endsection
