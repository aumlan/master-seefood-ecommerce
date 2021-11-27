<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')
    <title>Simco Mart @yield('title')</title>
    {{-- <link rel="apple-touch-icon" href="{{favIcon()}}"> --}}
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{favIcon()}}"> --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/components.css')}}">
    <!-- End: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    @stack('pagecss')
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    @stack('css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <div class="app" id="app">
    <!-- BEGIN: Header-->
    @include('layouts.backend.parts.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
     @include('layouts.backend.parts.leftsidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                @yield('breadcrumb')
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts.backend.parts.footer')
    <!-- END: Footer-->
    </div>
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('backendAsset/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->
    @stack('pagejs')
    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backendAsset/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backendAsset/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('backendAsset/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <!-- END: Page CSS-->
    @stack('js')
</body>
<!-- END: Body-->
</html>
