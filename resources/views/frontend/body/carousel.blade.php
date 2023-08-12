<div id="carousel-home">
    <div class="owl-carousel owl-theme kenburns">
        @foreach($carousel as $key => $carousel)
        <!--/owl-slide-->
        <div class="owl-slide background-image cover" data-background="url(../../uploads/images/{{$carousel->image}})">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 static">
                            <div class="slide-text white text-center">
                                <small class="owl-slide-animated owl-slide-title">{{$carousel->sub_title}}</small>
                                <h2 class="owl-slide-animated owl-slide-title-2">
                                    {{$carousel->title}}
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/owl-slide-->
        @endforeach
    </div>
    <div class="mouse_wp">
        <a href="#first_section" class="btn_scrollto">
            <div class="mouse"></div>
        </a>
    </div>
    <!-- / mouse -->
</div>
