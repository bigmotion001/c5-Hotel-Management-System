@extends('frontend.frontend_master')



@section('content')


<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="../frontend/img/rooms/2.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">C5 Luxury Hotel Experience</small>
            <h1 class="slide-animated two">Our Rooms & Suites</h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_0">

    <div class="container margin_120_95 pb-0" id="first_section">
    @foreach($datas as $key => $data)
        <div class="row_list_version_1">
            <div class="pinned-image rounded_container pinned-image--medium">
                <div class="pinned-image__container">
                    <img src="../backend/assets/images/{{$data->image2}}" alt="">
                </div>
            </div>
            <!-- /pinned-image -->
            <div class="row justify-content-start">
                <div class="col-lg-8">
                    <div class="box_item_info" data-jarallax-element="-30">
                        <small>From &#8358;{{$data->fare}}/night</small>
                        <h2>{{$data->name}}</h2>
                    <p>{{$data->description}}</p>
                        
                        <div class="box_item_footer d-flex align-items-center justify-content-between">
                            <a href="#0" class="btn_4 learn-more">
                                <span class="circle">
                                    <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">Book Now</span>
                            </a>
                            <a href="{{route('room_details', $data->id)}}" class="animated_link">
                                <strong>Read more</strong>
                            </a>
                        </div>
                        <!-- /box_item_footer -->
                    </div>
                    <!-- /box_item_info -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /row_list_version_1 -->
        @endforeach
        

    </div>
    <!-- /container -->

</div>
<!-- /container -->


@endsection