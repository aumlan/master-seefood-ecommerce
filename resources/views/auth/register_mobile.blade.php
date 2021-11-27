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
                <section >
                    <div class="col-xl-8 col-12 d-flex justify-content-center">
                        <div class="card  rounded-0 mb-0" >
                            <div class="row m-0">

                                <div>
                                    <img src="site_image/register.jpg" alt="login" width="372" style="padding-bottom: 10px">
                                </div>
                                <div class="col-11 p-0 ml-3 mb-4">
                                    <div class="card rounded-0 text-center" style="border: none !important; margin-bottom: 0 !important;">
                                        <div >
                                            <div class="card-title">
                                                <h4 class="mb-">Register</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="form-label-group mb-2">
                                                        <input id="inputName" value="{{ old('name') }}" name="name" autocomplete="name" autofocus class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                                                    </div>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <div class="form-label-group mb-2">
                                                        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-label-group mb-2">
                                                        <input type="number" id="inputPhone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone" required autocomplete="phone">
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>





                                                    <div class="form-label-group mb-2">
                                                        <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-label-group mb-2">
                                                        <input type="password" id="inputConfPassword" name="password_confirmation" class="form-control" placeholder="Confirm Password" required autocomplete="new-password">
                                                    </div>

                                                    <a href="{{route('login')}}" class="button-68">Login</a>
                                                    <button type="submit" class="button-68">Register</button>
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

