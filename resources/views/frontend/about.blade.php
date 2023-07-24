@extends('frontend.frontend_master')



@section('content')



<div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="frontend/img/hero_home_1.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">C5 Luxury Hotel Experience</small>
                  <h1 class="slide-animated two">About Paradise</h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->

      <!-- About Page  -->
@include('frontend.body.aboutpage')
<!-- /About Page  -->

      
      <!-- /bg_white -->




@endsection