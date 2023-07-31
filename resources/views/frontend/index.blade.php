@extends('frontend.frontend_master')



@section('content')


@include('frontend.body.carousel')


    <!-- About Page  -->
    @include('frontend.body.aboutpage')
    <!-- /About Page  -->

    <div class="pattern_2">
        <div class="container margin_120_95" id="first_section">
            <div class="row justify-content-between flex-lg-row-reverse align-items-center">
                <div class="col-lg-5">
                    <div class="parallax_wrapper">
                        <img src="frontend/img/home_2.jpg" alt="" class="img-fluid rounded-img">
                        <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img
                                    src="frontend/img/home_1.jpg" alt="" class="rounded-img"></span></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="intro">
                        <div class="title">
                            <small>About us</small>
                            <h2>Tailored services and the experience of unique holidays</h2>
                        </div>
                        <p class="lead">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.</p>
                        <p><em>Maria...the Owner</em></p>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
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
    </div>
    <!-- /Pattern  -->

    <div class="container margin_120_95">
        <div class="title mb-3">
            <small data-cue="slideInUp">C5 Luxury experience</small>
            <h2 data-cue="slideInUp" data-delay="200">Rooms & Suites</h2>
        </div>
        <div class="row justify-content-center add_bottom_90" data-cues="slideInUp" data-delay="300">
            @foreach ($roomtype as $key => $room)
                @if ($key < 1)
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <a href="{{ route('room_details', $room->id) }}" class="box_cat_rooms">
                            <figure>
                                <div class="background-image"
                                    data-background="url(../backend/assets/images/{{ $room->image1 }})"></div>
                                <div class="info">
                                    <small>From &#8358;{{ $room->fare }}/night</small>
                                    <h3>{{ $room->name }}</h3>
                                    <span>Read more</span>
                                </div>
                            </figure>
                        </a>
                    </div>
                @endif
            @endforeach

            @foreach ($roomtype as $key => $rooms)
                @if ($key > 0 && $key < 3)
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <a href="{{ route('room_details', $rooms->id) }}" class="box_cat_rooms">
                            <figure>
                                <div class="background-image"
                                    data-background="url(../backend/assets/images/{{ $rooms->image1 }})"></div>
                                <div class="info">
                                    <small>From &#8358;{{ $rooms->fare }}/night</small>
                                    <h3>{{ $rooms->name }}</h3>
                                    <span>Read more</span>
                                </div>
                            </figure>
                        </a>
                    </div>
                @endif
            @endforeach

            <p class="text-end"><a href="{{ route('all_rooms') }}" class="btn_1 outline mt-2">View all Rooms</a></p>
        </div>
        <!-- /row-->

        <div class="title text-center mb-5">
            <small data-cue="slideInUp">C5 Hotel</small>
            <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
        </div>
        <div class="row mt-4">
            <div class="col-xl-3 col-md-6">
                <div class="box_facilities no-border" data-cue="slideInUp">
                    <!-- <i class="customicon-private-parking"></i> -->
                    <h3>Private Parking</h3>
                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="box_facilities" data-cue="slideInUp">
                    <!-- <i class="customicon-wifi"></i> -->
                    <h3>High Speed Wifi</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="box_facilities" data-cue="slideInUp">
                    <!-- <i class="customicon-cocktail"></i> -->
                    <h3>Bar & Restaurant</h3>
                    <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="box_facilities" data-cue="slideInUp">
                    <!-- <i class="customicon-swimming-pool"></i> -->
                    <h3>Swimming Pool</h3>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
                </div>
            </div>
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
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.</p>
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
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.</p>
                        <p><a href="about.html" class="btn_1 mt-1 outline">Read more</a></p>
                    </div>
                </div>
            </div>
            <!-- /row-->
        </div>
        <!-- /container-->
    </div>
    <!-- /bg_white -->

    <div class="parallax_section_1 jarallax" data-jarallax data-speed="0.2">
        <img class="jarallax-img kenburns-2" src="frontend/img/hero_home_1.jpg" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center"
            data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title white">
                            <small class="mb-1">Testimonials</small>
                            <h2>What Clients Says</h2>
                        </div>
                        <div class="carousel_testimonials owl-carousel owl-theme nav-dots-orizontal">
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="frontend/img/testimonial_1.jpg" alt=""
                                                class="img-circle">
                                        </figure>
                                        <h4>Roberta<small>12 Oct</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret
                                        sed, mel cu unum nostrud."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="frontend/img/testimonial_1.jpg" alt=""
                                                class="img-circle">
                                        </figure>
                                        <h4>Roberta<small>2 Nov</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret
                                        sed, mel cu unum nostrud."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="frontend/img/testimonial_1.jpg" alt=""
                                                class="img-circle">
                                        </figure>
                                        <h4>Roberta<small>3 Dec</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas elaboraret
                                        sed, mel cu unum nostrud."
                                    </div>
                                </div>
                                <!-- End box_overlay -->
                            </div>
                        </div>
                        <!-- End carousel_testimonials -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /parallax_section_1-->


    <!--/bg_white -->


    <div class="container margin_120_95" id="booking_section">
        <div class="row justify-content-between">
            <div class="col-xl-4">
                <div data-cue="slideInUp">
                    <div class="title">
                        <small>C5 Hotel</small>
                        <h2>Check Availability</h2>
                    </div>
                    <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem
                        sea, prima quidam vim no. Duo nobis persecuti cu. </p>
                    <p class="phone_element no_borders"><a href=""><i
                                class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121 1334</span></a></p>
                </div>
            </div>
            <div class="col-xl-7">
                <div data-cue="slideInUp" data-delay="200">
                    <div class="booking_wrapper">
                        @livewire('booking')
                    </div>
                    <!-- / row -->

                </div>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
@endsection
