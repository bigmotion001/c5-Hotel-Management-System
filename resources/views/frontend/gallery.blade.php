@extends('frontend.frontend_master')



@section('content')



<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="frontend/img/hero_home_2.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">C5 Luxury Hotel Experience</small>
            <h1 class="slide-animated two">Gallery</h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_95">
    <div class="isotope-wrapper">
        <div class="row justify-content-center">
            @foreach($datas as $key => $data)
            <div class="item col-xl-4 col-lg-6 col-mb-6 mb-4" style="height: 250px; overflow:hidden;border-radius:5%">
                <div class="item-img" data-cue="slideInUp">
                    <img style="width:100%; height: 250px; object-fit:cover;" src="../backend/assets/images/{{$data->image}}" alt="" />
                    <div class="content">
                        <a data-fslightbox="gallery_1" data-type="image" href="frontend/img/gallery/1.jpg">{{$data->title}}</a>
                    </div>
                </div>
            </div>
            @endforeach
            
    </div>
    <!--/isotope-wrapper -->

    <div class="pagination__wrapper">
        <ul class="pagination">
            <li><a href="#0" class="prev"><i class="bi bi-arrow-left-short"></i></a></li>
            <li>
                <a href="#0" class="active">1</a>
            </li>
            <li>
                <a href="#0">2</a>
            </li>
            <li>
                <a href="#0">3</a>
            </li>
            <li>
                <a href="#0">4</a>
            </li>
            <li><a href="#0" class="next"><i class="bi bi-arrow-right-short"></i></a></li>
        </ul>
    </div>
    <!-- /pagination -->

</div>
<!--/container -->




@endsection