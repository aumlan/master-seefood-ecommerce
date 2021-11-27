@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>{{ $product->name }}</title>
    <meta property="og:title" content="{{ $product->name }}" />
    <meta property="og:description" content="{!! $product->short_description !!}" />
    @if (count($product->productImage) > 0)
        <meta property="og:image" content="{{ thumbnail($product->productImage[0]->image) }}" />
    @endif
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    <div class="container">
        <div class="car_category">
            <div class="category_item">
                <a href="#">
                    <span>Dubai</span>
                </a>&nbsp;&nbsp;<span class="template-text-grey"><i class="fas fa-long-arrow-alt-right"></i></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="carNamePrice">
            <div class="carName">
                <h4 class="mb-0">{{ $product->name }}</h4>
                <p>{{ $product->created_at->diffForHumans() }}</p>
            </div>
            <div class="carPrice">
                @if ($product->discount_price)
                    <del><span class="h4" style="color:#8a8a8a">$
                            {{ $product->sales_price }}</span></del> &nbsp;&nbsp;&nbsp;
                    <span style="color:#fc0000" class="h4">$ {{ $product->sales_price }}</span>
                @else
                    <span style="color:#fc0000" class="h4">$ {{ $product->sales_price }}</span>
                <br/>
                    <span style="color:#fc0000" class="h5">€ {{ $product->sales_price_euro }}</span>

                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div id="slider_custom">
                    <ul>
                        @if (count($product->productImage) > 0)
                            @foreach ($product->productImage as $image)
                        <li><img src={{ mediumImage($image->image) }}></li>
                            @endforeach
                        @endif
                    </ul>
                    <a href="#" id="sliderNext">></a>
                    <a href="#" id="sliderPrev"><</a>
                </div>

{{--                @if (count($product->productImage) > 0)--}}
{{--                    <div class="single_slider_custom_area">--}}
{{--                        <div class="single_slider_custom owl-carousel" id="single_slider_custom">--}}
{{--                            @foreach ($product->productImage as $image)--}}
{{--                                <div class="slider_custom_image">--}}
{{--                                    <img src="{{ mediumImage($image->image) }}" alt="" srcset="">--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endif--}}

                <div class="space40"></div>
                {{-- <div class="item_overview">
                    <div class="item_overview_title">
                        <h5>Item overview</h5>
                    </div>
                    <div class="item_list">
                        <div class="item">
                            <p>HISTORY CHECK</p>
                            <div class="item_icon">
                                <img src="{{ asset('Frontend/desktop/img/icon/car-history-check-icon.svg') }}" alt=""
                                    srcset="">
                            </div>
                            <p class="template_text_primary">Request</p>
                        </div>
                        <div class="item">
                            <p>TRIM</p>
                            <div class="item_icon">
                                <img src="{{ asset('Frontend/desktop/img/icon/Trim.png') }}" alt="" srcset="">
                            </div>
                            <p>Sport</p>
                        </div>
                        <div class="item">
                            <p>KILOMETERS</p>
                            <div class="item_icon">
                                <img src="{{ asset('Frontend/desktop/img/icon/Km.png') }}" alt="" srcset="">
                            </div>
                            <p>{{ $car->km }} KM</p>
                        </div>
                        <div class="item">
                            <p>WARRANTY</p>
                            <div class="item_icon">
                                <img src="{{ asset('Frontend/desktop/img/icon/Warranty.png') }}" alt="" srcset="">
                            </div>
                            <p>{{ $car->warranty }} Months</p>
                        </div>
                        <div class="item">
                            <p>COLOR</p>
                            <div class="item_icon">
                                <img src="{{ asset('Frontend/desktop/img/icon/Color.png') }}" alt="" srcset="">
                            </div>
                            <p>{{ $car->CarBodyColor->name }}</p>
                        </div>
                        <div class="item">
                            <p>YEAR</p>
                            <div class="item_icon">
                                <img src="{{ asset('Frontend/desktop/img/icon/Calendar.png') }}" alt="" srcset="">
                            </div>
                            <p>{{ $car->year }}</p>
                        </div>
                    </div>
                </div> --}}
                @if (count($product->productSpecification) > 0)
                    <div class="item_overview">
                        <div class="item_overview_title">
                            <h5>Product Specs</h5>
                        </div>
                        <table class="table">
                            <tbody>
                                @foreach ($product->productSpecification as $specs)
                                    <tr>
                                        <th>{{$specs->attribute_name}}</th>
                                        <td>{{$specs->attribute_description}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                <div class="item_overview" style="border-top: 1px solid #ddd;">
                    <div class="item_overview_title">
                        <h5>Description</h5>
                    </div>
                    <p>{!! $product->description !!}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="seller_contact">
                    <a href="#"  onclick="addToCart({{ $product->id }})">
                        <div class="template_btn_lg_danger">Add To Cart</div>
                    </a>


                    <a href="https://wa.me/00971505781258?text=Hi" target="_blank">
                        <div class=" mt-3 round template_btn_lg_green">
                            <ion-icon name="logo-whatsapp"></ion-icon> &nbsp;&nbsp;&nbsp;WHATSAPP
                        </div>
                    </a>
                </div>
                <br>
                <div class="sharethis-inline-share-buttons"></div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(function(){

                var slider_custom = $('#slider_custom');
                var slider_customWrap = $('#slider_custom ul');
                var slider_customImg = $('#slider_custom ul li');
                var prevBtm = $('#sliderPrev');
                var nextBtm = $('#sliderNext');
                var length = slider_customImg.length;
                var width = slider_customImg.width();
                var thumbWidth = width/length;

                slider_customWrap.width(width*(length+2));

                //Set up
                slider_custom.after('<div id="' + 'pager' + '"></div>');
                var dataVal = 1;
                slider_customImg.each(
                    function(){
                        $(this).attr('data-img',dataVal);
                        $('#pager').append('<a data-img="' + dataVal + '"><img src=' + $('img', this).attr('src') + ' width=' + thumbWidth + '></a>');
                        dataVal++;
                    });
                //Copy 2 images and put them in the front and at the end
                $('#slider_custom ul li:first-child').clone().appendTo('#slider_custom ul');
                $('#slider_custom ul li:nth-child(' + length + ')').clone().prependTo('#slider_custom ul');

                slider_customWrap.css('margin-left', - width);
                $('#slider_custom ul li:nth-child(2)').addClass('active');

                var imgPos = pagerPos = $('#slider_custom ul li.active').attr('data-img');
                $('#pager a:nth-child(' +pagerPos+ ')').addClass('active');


                //Click on Pager
                $('#pager a').on('click', function() {
                    pagerPos = $(this).attr('data-img');
                    $('#pager a.active').removeClass('active');
                    $(this).addClass('active');

                    if (pagerPos > imgPos) {
                        var movePx = width * (pagerPos - imgPos);
                        moveNext(movePx);
                    }

                    if (pagerPos < imgPos) {
                        var movePx = width * (imgPos - pagerPos);
                        movePrev(movePx);
                    }
                    return false;
                });

                //Click on Buttons
                nextBtm.on('click', function(){
                    moveNext(width);
                    return false;
                });

                prevBtm.on('click', function(){
                    movePrev(width);
                    return false;
                });

                //Function for pager active motion
                function pagerActive() {
                    pagerPos = imgPos;
                    $('#pager a.active').removeClass('active');
                    $('#pager a[data-img="' + pagerPos + '"]').addClass('active');
                }

                //Function for moveNext Button
                function moveNext(moveWidth) {
                    slider_customWrap.animate({
                        'margin-left': '-=' + moveWidth
                    }, 500, function() {
                        if (imgPos==length) {
                            imgPos=1;
                            slider_customWrap.css('margin-left', - width);
                        }
                        else if (pagerPos > imgPos) {
                            imgPos = pagerPos;
                        }
                        else {
                            imgPos++;
                        }
                        pagerActive();
                    });
                }

                //Function for movePrev Button
                function movePrev(moveWidth) {
                    slider_customWrap.animate({
                        'margin-left': '+=' + moveWidth
                    }, 500, function() {
                        if (imgPos==1) {
                            imgPos=length;
                            slider_customWrap.css('margin-left', -(width*length));
                        }
                        else if (pagerPos < imgPos) {
                            imgPos = pagerPos;
                        }
                        else {
                            imgPos--;
                        }
                        pagerActive();
                    });
                }

            });

            // $(".owl-carousel#single_slider_custom").owlCarousel({
            //     loop: true,
            //     margin: 0,
            //     items: 1,
            //     autoplay: true,
            //     autoplayTimeout: 2000,
            //     autoplayHoverPause: true,
            //     navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            //     nav: true,
            //     dots: false,
            //     responsive: {
            //         0: {
            //             items: 1
            //         },
            //         766: {
            //             items: 1
            //         },
            //         767: {
            //             items: 1
            //         },
            //         992: {
            //             items: 1
            //         }
            //     }
            // });
        });
    </script>
@endsection
