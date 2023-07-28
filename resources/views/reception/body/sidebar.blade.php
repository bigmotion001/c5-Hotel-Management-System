<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href=""><span class="brand-logo">
                    </span>

                    <h2 class="brand-text">C5 Exclusive</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('reception.dashboard') }}"><i
                        data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="Dashboards">Dashboard</span><span
                        class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a></li>


            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Hotel</span><i
                    data-feather="more-horizontal"></i></li>





                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('reception-book-room') }}"><i data-feather="user"></i><span
                        class="menu-title text-truncate" data-i18n="user">Book a room</span></a></li>



            <li class="  nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Bookings</span></a>
                <ul class="menu-content">
                    <li class="#"><a class="d-flex align-items-center" href="{{ route('r-pending-booking') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Pending
                                Booking</span></a>
                    </li>

                    <li class=""><a class="d-flex align-items-center" href="{{ route('r-active-booking') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">Active Bookings</span></a>
                    </li>
                    <li class=""><a class="d-flex align-items-center" href="{{ route('r-cancelled-booking') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">Canceled Bookings</span></a>
                    </li>
                    <li class=""><a class="d-flex align-items-center" href="{{ route('r-checkedout-booking') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Preview">Checked out</span></a>
                    </li>
            </li>
        </ul>
        </li>




        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span
                    class="menu-title text-truncate" data-i18n="user">Room Lists</span></a></li>

        <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span
                    class="menu-title text-truncate" data-i18n="user">Profile</span></a></li>



        </ul>
    </div>
</div>
