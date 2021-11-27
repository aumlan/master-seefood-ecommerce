@extends('Backend.auth.auth_master')
@section('auth_title','Login Admin Pannel')
@section('auth_content')
<section class="row flexbox-container">
            <div class="col-xl-8 col-11 d-flex justify-content-center">
                <div class="card bg-authentication rounded-0 mb-0">
                    <div class="row m-0">
                        <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                            <img src="{{asset('backendAsset/app-assets/images/pages/login.png')}}" alt="branding logo">
                        </div>
                        <div class="col-lg-6 col-12 p-0">
                            <div class="card rounded-0 mb-0 px-2">
                                <div class="card-header pb-1">
                                    <div class="card-title">
                                        <h4 class="mb-0">Admin Login </h4>
                                    </div>
                                </div>
                                <p class="px-2">Welcome back, please login to your account.</p>
                                <div class="card-content">
                                    <div class="card-body pt-1">
                                        <form method="POST" action="{{ route('admin.login.submit') }}">
                                            @csrf
                                            <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus id="user-name" placeholder="Enter Email" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                                <label for="user-name">Email</label>
                                            </fieldset>

                                            <fieldset class="form-label-group position-relative has-icon-left">
                                                <input type="password" class="form-control  @error('password') is-invalid @enderror " name="password" autocomplete="current-password" id="user-password" placeholder="Password" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-lock"></i>
                                                </div>
                                                <label for="user-password">Password</label>
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
                                                            <span class="">Remember me</span>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                    @if (Route::has('admin.password.request'))
                                                    <div class="text-right"><a href="{{ route('admin.password.request') }}" class="card-link">Forgot Password?</a></div>
                                                    @endif
                                            </div>
                                            <input type="submit" class="btn btn-primary float-right btn-inline" value="Login">
                                        </form>
                                    </div>
                                </div>
                                <div class="login-footer">
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection