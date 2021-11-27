
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/vendors/css/vendors.min.css')}}">
        <!-- END: Vendor CSS-->
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/themes/dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/themes/semi-dark-layout.css')}}">
        <!-- End: Theme CSS-->
            <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/core/colors/palette-gradient.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/app-assets/css/pages/authentication.css')}}">
            <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('backendAsset/assets/css/style.css')}}">
        <!-- END: Custom CSS-->
    <title>@yield('auth_title')</title>
</head>
<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" >
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
    <div class="content-body">
        @yield('auth_content')
    </div>
        </div>
    </div>
      <!-- BEGIN: Vendor JS-->
      <script src="{{ asset('backendAsset/app-assets/vendors/js/vendors.min.js')}}"></script>
      <!-- BEGIN Vendor JS-->
      <script src="{{ asset('js/app.js') }}"></script>
      <!-- BEGIN: Theme JS-->
      <script src="{{asset('backendAsset/app-assets/js/core/app-menu.js')}}"></script>
      <script src="{{asset('backendAsset/app-assets/js/core/app.js')}}"></script>
      <script src="{{asset('backendAsset/app-assets/js/scripts/components.js')}}"></script>
      <!-- END: Theme JS-->
</body>
</html>
