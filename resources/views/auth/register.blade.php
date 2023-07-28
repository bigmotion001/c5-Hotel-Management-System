@extends('frontend.frontend_master')



@section('content')

@php
    $site = App\Models\SiteSetting::find(1);
@endphp

<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
    <img class="jarallax-img" src="frontend/img/hero_home_2.jpg" alt="">
    <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container">
            <small class="slide-animated one">{{ $site->name }}</small>
            <h1 class="slide-animated two">Register</h1>
        </div>
    </div>
</div>
<!-- /Background Img Parallax -->

<div class="container margin_120_95">
    <div class="row justify-content-between">

        <div class="col-xl-12 col-lg-12 order-lg-1">
            <h3 class="mb-3">Login</h3>
            <div id="message-contact"></div>
            <form method="POST" action="{{ route('register') }}" id="contactform" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" :value="old('name')" required autofocus autocomplete="username" type="text" id="name" name="name" placeholder="Full Name" required>
                            <label for="name_contact">Full Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" :value="old('email')" required autofocus autocomplete="username" type="email" id="email" name="email" placeholder="Email" required>
                            <label for="name_contact">Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="number"
                            name="phone" placeholder="Phone Number" required>
                            <label for="lastname_contact">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <select name="gender" required class="form-control">
                                <option value="">Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label for="lastname_contact">Gender</label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-floating mb-4">
                            <textarea name="address" class="form-control" cols="20" rows="5" required></textarea>
                            <label for="lastname_contact">Address</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="text"
                            name="nationality" placeholder="Nametionality" required>
                            <label for="lastname_contact">Nationality</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating mb-4">
                            <input class="form-control" type="password"
                            name="password" placeholder="Password" required>
                            <label for="lastname_contact">Password</label>
                        </div>
                    </div>
                </div>
                <!-- /row -->

                <!-- /row -->


                <p class="mt-3"><input type="submit" value="Register Now" class="btn_1 outline" id="submit-contact"></p>
            </form>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered? login') }}
            </a>
        </div>
    </div>
    <!-- /row -->
</div>
<!--/container -->




@endsection
