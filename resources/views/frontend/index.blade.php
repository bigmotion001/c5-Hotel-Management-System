@extends('frontend.frontend_master')



@section('content')

@include('frontend.body.carousel')
<!-- /pinned content -->


<!-- About Page  -->
@include('frontend.body.aboutpage')
<!-- /About Page  -->

<!--All Rooms-->
@include('frontend.body.allRooms')
<!-- /All Rooms-->


<!--/carousel-->





<!-- /row-->
<div class="title text-center mb-5">
    <small data-cue="slideInUp">C5 Hotel</small>
    <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
</div>
<div class="row mt-4">
    @foreach($facilities as $key => $facility)
    @if($key < 4) <div class="col-xl-3 col-md-6">
        <a href="{{route('facility_details', $facility->id)}}">
            <div class="box_facilities no-border" data-cue="slideInUp">
                <!-- <i class="customicon-private-parking"></i> -->
                <h3>{{$facility->title}}</h3>
                <p>{!! Str::limit($facility->sub_title, 75, '...') !!}</p>
            </div>
        </a>
</div>
@endif
@endforeach
<!-- /Row -->
</div>
<!-- /container-->

<div class="marquee mb-5">
    <div class="track">
        <div class="content">&nbsp;C5 Luxury Hotel Experience a Home Away From Home.</div>
    </div>
</div>
<!-- /marquee-->



<!-- /parallax_section_1-->

@include('frontend.body.testimony')
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
                <p class="phone_element no_borders"><a href=""><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121 1334</span></a></p>
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