@extends('layouts.frontend.mobile.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">

    <!-- BEGIN: Custom CSS-->
@endpush

@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="app-content content">

        <div class="content-wrapper">

            <div class="content-body my-5">
                <section class=" flexbox-container" style="justify-content: center">
                    <div class="col-xl-8 col-12 d-flex justify-content-center">
                        <div class="card  rounded-0 mb-0" >
                            <div class="row m-0">

                                <div>
                                    <img src="site_image/login.jpg" alt="login" width="380px" >
                                </div>
                                <div class="col-11 p-0 ml-3">
                                    <div class="card rounded-0 text-center" style="border: none !important; margin-bottom: 0 !important;">
                                        <div >
                                            <div class="card-title">
                                                <h4 class="mb-">Login</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">

                                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus id="user-name" placeholder="Enter Email" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>

                                                    </fieldset>



                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control  @error('password') is-invalid @enderror " name="password" autocomplete="current-password" id="user-password" placeholder="Password" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>

                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">


                                                        @if (Route::has('password.request'))
                                                            <div class="text-right"><a href="{{ route('password.request') }}" class="card-link"><span style="font-size: 13px">Forgot Password?</span>  </a></div>
                                                        @endif
                                                    </div>


                                                    <div class="form-group d-flex justify-content-between ">
                                                        <div>
                                                            <input type="submit" class="button-68" value="Login" style="width: 100px">
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('register') }}" class="button-68" >Register</a>

                                                        </div>
                                                    </div>







                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    @push('js')
        <!-- BEGIN: Vendor JS-->
        <script src="{{ asset('backendAsset/app-assets/vendors/js/vendors.min.js')}}"></script>
        <!-- BEGIN Vendor JS-->
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- BEGIN: Theme JS-->
        <script src="{{asset('backendAsset/app-assets/js/core/app-menu.js')}}"></script>
        <script src="{{asset('backendAsset/app-assets/js/core/app.js')}}"></script>
        <script src="{{asset('backendAsset/app-assets/js/scripts/components.js')}}"></script>
        <!-- END: Theme JS-->
    @endpush

@endsection
