@php
    $prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href=""><span class="brand-logo">
                    </span>

                    <h2 class="brand-text">C5 Exclusive</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ $route == 'admin.dashboard' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a></li>


            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Hotel</span><i data-feather="more-horizontal"></i></li>


            <li class="  nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Manage Hotel</span></a>
                <ul class="menu-content">
                    <li class="{{ $route == 'amenities' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('amenities') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Amenities</span></a>
                    </li>
                    <li class="{{ $route == 'complement' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('complement') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Complements</span></a>
                    </li>
                    <li class="{{ $route == 'bedtype' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('bedtype') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Bed Type</span></a>
                    </li>
                    <li class="{{ $route == 'room' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('room') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Room</span></a>
                    </li>
                    <li class="{{ $route == 'roomtype' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('roomtype') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Room Types</span></a>
                    </li>

                    <li class="{{ $route == 'create_gallery' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('create_gallery') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Gallery</span></a>
                    </li>

            </li>
        </ul>
        </li>





        <li class="  nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span class="menu-title text-truncate" data-i18n="Invoice">Bookings</span></a>
            <ul class="menu-content">
                <li class="{{ $route == 'admin-all-booking' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin-all-booking') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Booking</span></a>
                </li>
                <li class="{{ $route == 'admin-pending-booking' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin-pending-booking') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Pending Booking</span></a>
                </li>

                <li class="{{ $route == 'admin-active-booking' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin-active-booking') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Active Bookings</span></a>
                </li>
                <li class="{{ $route == 'admin-cancelled-booking' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin-cancelled-booking') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Cancelled Bookings</span></a>
                </li>
                <li class="{{ $route == 'admin-checkoutg' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('admin-checkout') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Checked Out</span></a>
                </li>
        </li>
        </ul>
        </li>














        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Frontend</span><i data-feather="more-horizontal"></i></li>


        <li class="  nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Invoice">Manage Section</span></a>
            <ul class="menu-content">

                <li class="{{ $route == 'carousel' ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{route('carousel')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Carousel</span></a>
                </li>

                <li class="{{ $route == 'about_us' ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{route('about_us')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">About Us</span></a>
                </li>
                <li class="{{ $route == 'facilities' ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{route('facilities')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Facilities</span></a>
                </li>
                <li class="{{ $route == 'testimonials' ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{route('testimonials')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Testimonials</span></a>
                </li>

        </li>
        </ul>
        </li>






        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Extra</span><i data-feather="more-horizontal"></i></li>



        <li class="  nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Invoice">Settings</span></a>
            <ul class="menu-content">
                <li class="{{ $route == 'site-setting' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('site-setting') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Site Settings</span></a>
                </li>
                <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">SEO Settings</span></a>
                </li>




        </li>
        </ul>
        </li>








        <li class="{{ $route == 'admin-view-reception' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('admin-view-reception') }}"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="users">Receptionists</span></a></li>

        <li class="{{ $route == 'admin_profile' ? 'active' : '' }} nav-item"><a class="d-flex align-items-center" href="{{ route('admin_profile') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="user">Admin Profile</span></a></li>






        </ul>
    </div>
</div>
