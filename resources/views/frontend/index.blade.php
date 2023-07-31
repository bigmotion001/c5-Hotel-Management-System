@extends('frontend.frontend_master')



@section('content')


<!-- carousel  -->
@include('frontend.body.carousel')
<!--/carousel-->


<!-- About Page  -->
@include('frontend.body.aboutpage')
<!-- /About Page  -->

<div class="pinned-image pinned-image--medium">
    <div class="pinned-image__container" id="section_video">
        <video loop="loop" muted="muted" id="video_home">
            <source src="frontend/video/swimming_pool_2.mp4" type="video/mp4">
            <source src="frontend/video/swimming_pool_2.webm" type="video/webm">
            <source src="frontend/video/swimming_pool_2.ogv" type="video/ogg">
        </video>
        <div class="pinned-image__container-overlay"></div>
    </div>
    <div class="pinned_over_content">
        <div class="title white">
            <small data-cue="slideInUp" data-delay="200">C5 Luxury Hotel Experience</small>
            <h2 data-cue="slideInUp" data-delay="300">Enjoy in a very<br> Immersive Relax</h2>
        </div>
    </div>
</div>
<!-- /pinned content -->

<!--All Rooms-->
@include('frontend.body.allRooms')
<!-- /All Rooms-->

<div class="title text-center mb-5">
    <small data-cue="slideInUp">C5 Hotel</small>
    <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
</div>
<div class="row mt-4">
    @foreach($facilities as $key => $facility)
    @if($key < 4)
    <div class="col-xl-3 col-md-6">
        <a href="{{route('facility_details', $facility->id)}}">
            <div class="box_facilities no-border" data-cue="slideInUp">
                <!-- <i class="customicon-private-parking"></i> -->
                <h3>{{$facility->title}}</h3>
                <p>{{$facility->sub_title}}</p>
            </div> 
        </a>
    </div>
    @endif
    @endforeach
    
</div>
<!-- /Row -->
</div>
<!-- /container-->

<div class="marquee">
    <div class="track">
        <div class="content">&nbsp;C5 Luxury Hotel Experience a Home Away From Home.</div>
    </div>
</div>
<!-- /marquee-->

<div class="bg_white">
    <div class="container margin_120_95">
        <div class="row justify-content-between d-flex align-items-center add_bottom_90">
            <div class="col-lg-6">
                <div class="pinned-image rounded_container pinned-image--small mb-4">
                    <div class="pinned-image__container">
                        <img src="frontend/img/local_amenities_1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="title">
                    <small>Local Amenities</small>
                    <h3>Restaurants</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p><a href="about.html" class="btn_1 mt-1 outline">Read more</a></p>
                </div>
            </div>
        </div>
        <!-- /row-->
        <div class="row justify-content-between d-flex align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="pinned-image rounded_container pinned-image--small mb-4">
                    <div class="pinned-image__container">
                        <img src="frontend/img/local_amenities_3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-lg-1">
                <div class="title">
                    <small>Local Amenities</small>
                    <h3>Art & Culture</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p><a href="about.html" class="btn_1 mt-1 outline">Read more</a></p>
                </div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /container-->
</div>
<!-- /bg_white -->


<!--Testimony-->
@include('frontend.body.testimony')
<!--Testimony-->


<!--/bg_white -->


<div class="container margin_120_95" id="booking_section">
    <div class="row justify-content-between">
        <div class="col-xl-4">
            <div data-cue="slideInUp">
                <div class="title">
                    <small>C5 Hotel</small>
                    <h2>Check Availability</h2>
                </div>
                <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. </p>
                <p class="phone_element no_borders"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121 1334</span></a></p>
            </div>
        </div>
        <div class="col-xl-7">
            <div data-cue="slideInUp" data-delay="200">
                <div class="booking_wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="custom_select">
                                <select class="wide">
                                    <option>Select Room</option>
                                    <option>Double Room</option>
                                    <option>Deluxe Room</option>
                                    <option>Superior Room</option>
                                    <option>Junior Suite</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="qty-buttons mb-3 version_2">
                                        <input type="button" value="+" class="qtyplus" name="adults_booking">
                                        <input type="text" name="adults_booking" id="adults_booking" value="" class="qty form-control" placeholder="Adults">
                                        <input type="button" value="-" class="qtyminus" name="adults_booking">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 qty-buttons version_2">
                                        <input type="button" value="+" class="qtyplus" name="childs_booking">
                                        <input type="text" name="childs_booking" id="childs_booking" value="" class="qty form-control" placeholder="Childs">
                                        <input type="button" value="-" class="qtyminus" name="childs_booking">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / row -->
                <p class="text-end mt-4"><a href="#0" class="btn_1 outline">Check Now</a></p>
            </div>
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->



























































@endsection