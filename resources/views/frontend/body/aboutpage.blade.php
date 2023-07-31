@foreach($about as $key => $about)
<div class="pattern_2">
    <div class="container margin_120_95" id="first_section">
        <div class="row justify-content-between flex-lg-row-reverse align-items-center">
            <div class="col-lg-5">
                <div class="parallax_wrapper">
                    <img src="../../uploads/images/{{$about->image1}}" alt="" class="img-fluid rounded-img">
                    <div data-cue="slideInUp" class="img_over"><span data-jarallax-element="-30"><img src="../../uploads/images/{{$about->image2}}" alt="" class="rounded-img"></span></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="intro">
                    <div class="title">
                        <small>About us</small>
                        <h2>{{$about->title}}</h2>
                    </div>
                    <p class="lead">{{$about->sub_title}}</p>
                </div>
            </div>
        </div>
        <!-- /Row -->
    </div>

</div>
@endforeach

