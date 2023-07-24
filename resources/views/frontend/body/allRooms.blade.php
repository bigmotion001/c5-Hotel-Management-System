<div class="container margin_120_95">
    <div class="title mb-3">
        <small data-cue="slideInUp">C5 Luxury experience</small>
        <h2 data-cue="slideInUp" data-delay="200">Rooms & Suites</h2>
    </div>
    <div class="row justify-content-center add_bottom_90" data-cues="slideInUp" data-delay="300">
        @foreach($roomtype as $key => $room)
        @if($key < 1) <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
            <a href="{{route('room_details', $room->id)}}" class="box_cat_rooms">
                <figure>
                    <div class="background-image" data-background="url(../backend/assets/images/{{$room->image1}})"></div>
                    <div class="info">
                        <small>From &#8358;{{$room->fare}}/night</small>
                        <h3>{{$room->name}}</h3>
                        <span>Read more</span>
                    </div>
                </figure>
            </a>
    </div>
    @endif
    @endforeach

    @foreach($roomtype as $key => $rooms)
    @if($key > 0 && $key < 3) <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <a href="{{route('room_details', $rooms->id)}}" class="box_cat_rooms">
            <figure>
                <div class="background-image" data-background="url(../backend/assets/images/{{$rooms->image1}})"></div>
                <div class="info">
                    <small>From &#8358;{{$rooms->fare}}/night</small>
                    <h3>{{$rooms->name}}</h3>
                    <span>Read more</span>
                </div>
            </figure>
        </a>
</div>
@endif
@endforeach

<p class="text-end"><a href="{{route('all_rooms')}}" class="btn_1 outline mt-2">View all Rooms</a></p>
</div>