@extends('layouts.frontend.mobile.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3 pt-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span > <i class="fas fa-map-marker-alt"></i></span>
                    </div>
                    <div class="text">
                        <p><span> <strong>Address:</strong> </span> <br/>
                            <span style="font-size: 14px;color: #414346;">
                                Ajman,UAE<br/>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pt-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                    </div>
                    <div class="text">
                        <p><span> <strong>Phone:</strong> </span> <br/>
                            <span style="font-size: 14px;color: #414346;">
                                Tel.: +971 568 718 908<br/>
                            </span>
                        </p>
                        {{--                        <p><span> <strong>Phone: </strong> </span> <a href="tel://1234567920">+ 1235 2355 98</a></p>--}}

                    </div>
                </div>
            </div>
            <div class="col-md-3 pt-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text">
                        {{--                        <p><span> <strong>Email: </strong> </span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>--}}
                        <p><span> <strong>Email:</strong> </span> <br/>
                            <span style="font-size: 14px;color: #414346;">
                                info@mymorich.com
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pt-3">
                <div class="dbox w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-globe"></span>
                    </div>
                    <div class="text">
                        {{--                        <p><span> <strong>Website: </strong> </span> <a href="https://goldenstarkey.com">https://goldenstarkey.com</a></p>--}}
                        <p><span> <strong>Website:</strong> </span> <br/>
                            <span style="font-size: 14px;color: #414346;">
                                https://mymorich.com/
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row d-flex">
            <div class="col-md-7">
                <div class="contact-wrap w-100 px-4">
                    <h3 class="mb-4">Contact Us </h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                        {{--                        Your message was sent, thank you!--}}
                    </div>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="name">Full Name</label>
                                    <input  class="form-control" name="name" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label" for="email">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="subject">Subject</label>
                                    <input class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label" for="#">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="button-68">
                                    <div class="submitting"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 d-flex align-items-stretch">
{{--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.9538909031044!2d55.29957181501112!3d25.272136483861324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43f0110f14a5%3A0xf4978791bda84858!2sMawaz%20Perfum%20Trading%20LLC!5e0!3m2!1sen!2sae!4v1636613138278!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>--}}
            </div>

        </div>
        <hr>

    </div>
@endsection
@section('js')
    {{--    <script src="{{asset('js/google-map.js')}}"></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
@endsection
