<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','My Morich')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('site_image/logo.png')}}">

    <!-- Place favicon.ico in the root directory -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('Frontend/mobile/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/mobile/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/mobile/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/mobile/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/mobile/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/mobile/css/template.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/mobile/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/toastr.min.css') }}">
    @stack('css')
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=613330f9ad38cf0012acf12d&product=sop' async='async'></script>
</head>

<body>
    @yield('content')
    <!-- topBar end -->
    @include('layouts.frontend.mobile.parts.bottom_navigation')
{{--    <div class="space60"></div>--}}
    <div class="space60"></div>
    <!-- JS here -->
    <script src="{{asset('Frontend/mobile/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('Frontend/mobile/js/popper.min.js')}}"></script>
    <script src="{{asset('Frontend/mobile/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Frontend/mobile/js/owl.carousel.min.js')}}"></script>

    <script src="{{asset('Frontend/mobile/js/popper.min.js')}}"></script>
    <script src="{{asset('Frontend/mobile/js/template.js')}}"></script>
    <script src="{{asset('Frontend/desktop/js/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}
    @yield('js')
    @stack('js')
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                margin:80,
                stagePadding:10,
                responsive: {
                    0: {
                        items: 3
                    },
                    767: {
                        items: 3
                    },
                    992: {
                        items: 5
                    }
                }
            });
        });
    </script>
     <script src="{{asset('js/cart.js')}}"></script>
</body>

</html>
