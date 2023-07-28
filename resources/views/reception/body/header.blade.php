<!DOCTYPE html>


<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Mouau">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="{{ '/backend/app-assets/images/ico/apple-icon-120.html' }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">



    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/charts/apexcharts.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('backend/pp-assets/vendors/css/extensions/toastr.min.css') }}"> --}}
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/extensions/sweetalert2.min.css') }}">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/pages/dashboard-ecommerce.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/plugins/charts/chart-apex.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ 'backend/app-assets/css/plugins/extensions/ext-component-toastr.min.css' }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Page CSS-->

    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css') }}">
    <!-- END: Page CSS-->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>


    <!---TOASTER CSS CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/plugins/forms/form-quill-editor.min.css') }}">

    <!---datatable-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout  vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">



    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>




                </ul>








            </div>





            



            <ul class="nav navbar-nav align-items-center ms-auto">



                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a>
                </li>



                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{ Auth::guard('reception')->user()->email }}</span><span
                                class="user-status">{{ Auth::guard('reception')->user()->name }}</span></div><span
                            class="avatar">

                            <img class="round"
                                src="{{ '/backend/app-assets/images/portrait/small/avatar-s-11.jpg' }}"
                                alt="avatar" height="40" width="40"><span
                                class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="#"><i class="me-50" data-feather="user"></i>
                            Profile</a><a class="dropdown-item" href="app-email.html">

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="page-account-settings-account.html"><i class="me-50"
                                    data-feather="settings"></i>
                                Settings</a>

                            <a class="dropdown-item" href="#"><i class="me-50" data-feather="power"></i>
                                Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
