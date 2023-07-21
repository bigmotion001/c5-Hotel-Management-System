@extends('frontend.frontend_master')



@section('content')

@php
    $site = App\Models\SiteSetting::find(1);
@endphp

<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="frontend/img/hero_home_2.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">C5 Luxury Hotel Experience</small>
            <h1 class="slide-animated two">Contact Us</h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_95">
    <div class="row justify-content-between">
        <div class="col-xl-4 col-lg-5 order-lg-2">
            <div class="contact_info">
                <ul class="clearfix">
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        <h4>Address</h4>
                        <div>{{ $site->address }}</div>
                    </li>
                    <li>
                        <i class="bi bi-envelope-paper"></i>
                        <h4>Email address</h4>
                        <p><a href="#">{{ $site->email }}</a></p>
                    </li>
                    <li>
                        <i class="bi bi-telephone"></i>
                        <h4>Telephone</h4>
                        <div>{{ $site->phone }}<br><small>Monday to Friday 9am - 7pm</small></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 order-lg-1">
            <h3 class="mb-3">Get in Touch</h3>
            <div id="message-contact"></div>
            <form method="post" action="#" id="contactform" autocomplete="off">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="name_contact" name="name_contact" placeholder="Name">
                            <label for="name_contact">Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="lastname_contact" name="lastname_contact" placeholder="Last Name">
                            <label for="lastname_contact">Last name</label>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="email" id="email_contact" name="email_contact" placeholder="Email">
                            <label for="email_contact">Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="phone_contact" name="phone_contact" placeholder="Telephone">
                            <label for="phone_contact">Telephone</label>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Message" id="message_contact" name="message_contact"></textarea>
                    <label for="message_contact">Message</label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text" id="verify_contact" name="verify_contact" placeholder="Are you human? 3 + 1 =">
                            <label for="verify_contact">Are you human? 3 + 1 =</label>
                        </div>
                    </div>
                </div>
                <p class="mt-3"><input type="submit" value="Submit" class="btn_1 outline" id="submit-contact"></p>
            </form>
        </div>
    </div>
    <!-- /row -->
</div>
<!--/container -->




@endsection
