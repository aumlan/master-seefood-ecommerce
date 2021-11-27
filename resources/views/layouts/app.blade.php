<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <title>Cloth</title>


    <!--Fevicon icon-->
    <link rel="icon" href="img/fevicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/slick-slider.css')}}">
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('FrontendAsset/css/responsive.css')}}">


    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>

    @include('layouts.frontend.menu')

    @yield('content')



   @include('layouts.frontend.footer')

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-double-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="{{asset('FrontendAsset/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/magnific.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/image-loaded.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/nice-select.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/slick-slider.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/wow.js')}}"></script>
    <!-- main js  -->
    <script src="{{asset('FrontendAsset/js/main.js')}}"></script>

</body>
</html>
