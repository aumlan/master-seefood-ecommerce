@extends('layouts.frontend.desktop.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">

    <!-- BEGIN: Custom CSS-->
@endpush
@section('content')
    <div class="app-content content" >

        <div class="content-wrapper">

            <div class="content-body my-5">
                <section class="row flexbox-container" style="justify-content: center">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card rounded-0 mb-0 p-5" >
                            <div class="row m-0">

                                <div>
                                    <img src="site_image/login.jpg" alt="login" width="400" >
                                </div>
                                <div class="p-0 ml-3">
                                    <div class="card rounded-0 " style="border: none !important; margin-bottom: 0 !important;">
                                        <div >
                                            <div class="card-title">
                                                <h4 class="pl-4">Login</h4>
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
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                    <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                                    <span style="font-size: 13px">Remember me</span> <br>
                                                                </div>
                                                            </fieldset>
                                                        </div>

                                                        @if (Route::has('password.request'))
                                                            <div class="text-right"><a href="{{ route('password.request') }}" class="card-link"><span style="font-size: 13px">Forgot Password?</span>  </a></div>
                                                        @endif
                                                    </div>
{{--                                                    <a href="{{ route('register') }}" class="btn btn-outline-primary float-left btn-inline">Register</a>--}}
{{--                                                    <input type="submit" class="btn btn-primary float-right btn-inline" value="Login">--}}
                                                    <button type="submit" class="button-68" role="button">
                                                        <a href="{{ route('register') }}" >Register</a>
                                                    </button>

                                                    <button type="submit" class="button-68" role="button">Login</button>
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
