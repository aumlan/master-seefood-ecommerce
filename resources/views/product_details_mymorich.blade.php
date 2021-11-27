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
    <!-- breadcrumb Area Start-->
    <section class="breadcrumb-area" style="background: #fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <nav>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fa fa-home"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="product.html">
                                    Product
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb Area End -->

    <!-- product-details-area start -->
    <div class="product-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-thumbnail-wrapper">
                        <div class="single-thumbnail-slider-2">
                            @if (count($product->productImage) > 0)
                                @foreach ($product->productImage as $prd)
                                    <div class="slider-item">
                                        <img src="{{ mediumImage($prd->image) }}" width="540px" height="444px"
                                             style="object-fit: contain" alt="img">
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="product-thumbnail-carousel-2">

                            @if (count($product->productImage) > 0)
                                @foreach ($product->productImage as $prd)
                                    <div class="single-thumbnail-item">
                                        <img src="{{ mediumImage($prd->image) }}" width="160px" height="132px"
                                             style="object-fit: cover" alt="img">
                                    </div>
                                @endforeach
                            @endif


                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-item-details ms-lg-3 mt-lg-0 mt-4">
                        <h4 class="entry-title">{{ $product->name }}</h4>
                        <div class="category">
                            <span>SKU: {{ $product->sku }}</span>
                            <span>BRAND: {{ $product->brand ? $product->brand->name : '' }}</span>
                        </div>
                        {{-- <div class="star-rating">
                            <span><i class="la la-star"></i></span>
                            <span><i class="la la-star"></i></span>
                            <span><i class="la la-star"></i></span>
                            <span><i class="la la-star"></i></span>
                            <span><i class="la la-star"></i></span>
                        </div> --}}
                        <div class="price">
                            @if($product->discount_price > 0)
                                AED {{ $product->discount_price }}
                                <del style="font-size: 15px"> {{ $product->sales_price_aed }}</del>
                            @else
                                AED {{ $product->sales_price_aed }}
                            @endif
                        </div>

                        <p>{{ $product->short_description }}</p>
                        <div class="product-color">
                            <span class="sub-title">Size:</span>
                            <select class="select_option" name="size" id="size" >
                                @foreach ($product->product_attr as $atrr)
                                    @if (isSize($atrr->configure_attribute_id)!==null)
                                        @php
                                            $getSize =  isSize($atrr->configure_attribute_id)
                                        @endphp
                                        <option value="{{$getSize->name}}" >{{$getSize->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="product-color">
                            <span class="sub-title">Color:</span>
                            <select class="select_option" name="color" id="color" >
                                @foreach ($product->product_attr as $atrr)
                                    @if (isColor($atrr->configure_attribute_id)!==null)
                                        @php
                                            $getColor =  isColor($atrr->configure_attribute_id);
                                        @endphp
                                        <option value="{{$getColor->name}}" >{{$getColor->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="product-quantity">
                            <span class="sub-title">Qty:</span>
                            <form>
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus">
                                    <input type="number" class="input-text qty text" step="1" min="1" max="10000"
                                           name="quantity" value="1" id="quantity_input">
                                    <input type="button" value="+" class="plus">
                                </div>
                            </form>
                        </div>
                        <div class="my-3">
                            <button class="button-68" class="btn btn-main ms-4"
                                    onclick="addToCart({{ $product->id }},
                                        document.getElementById('quantity_input').value,
                                        document.getElementById('size').value,
                                        document.getElementById('color').value)"
                                {{ $product->stock_status == 'In_stock' ? '' : 'disabled' }}
                            >
                                <i class="fas fa-cart-plus"></i>
                                Add to Cart
                            </button>
                        </div>
                        <div class="shareable-link">
                            <span class="sub-title">Share:</span>
                            <ul class="social-area style-3">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-details-area end -->

    <!-- shop-product area start -->
    <div class="product-details-tab-area pd-top-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Additional</button>
                            </li> --}}
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Shopping & Returns </button>
                            </li> --}}
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Reviews </button>
                            </li> --}}
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                {!! $product->description !!}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p class="mb-0">Made with a comfortable and sustainable fabric.</p>
                                <p class="mb-0">Regular to fit inside leg 29" / 74cm.</p>
                                <p class="mb-0">Long to fit inside leg 31" / 79cm.</p>
                                <p class="mb-0">XL Tall to fit inside leg 33" / 84cm.</p>
                                <p class="mb-0">Machine washable.</p>
                                <p class="mb-0">96% Lenzing™ Ecovero™ Viscose, 4% Elastane.</p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <p>Too end instrument possession contrasted motionless. Calling offence six joy feeling.
                                    Coming merits and was talent enough far. Sir joy northward sportsmen education.
                                    Discovery incommode earnestly no he commanded if. Put still any about manor heard. </p>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="review-item">
                                    <h6>Diane</h6>
                                    <span class="date">26th Jan 2021</span>
                                    <div class="star-rating">
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                    </div>
                                    <p>Love these, I have them in several colours, really comfortable, you need to go at
                                        least one size smaller.</p>
                                </div>
                                <div class="review-item">
                                    <h6>Anonymous</h6>
                                    <span class="date">25th Jan 2021</span>
                                    <div class="star-rating">
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                    </div>
                                    <p>I like your joggers .I wear them for yoga ,walking and gardening.They are nice to
                                        wear look good and are practical .</p>
                                </div>
                                <div class="review-item mb-0">
                                    <h6>Nymous</h6>
                                    <span class="date">23th Jan 2021</span>
                                    <div class="star-rating">
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                    </div>
                                    <p>I purchased the wrong size, otherwise not too bad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-product area end -->

    <!-- product-Area Start-->
    <section class="product-area text-center pd-top-40 pd-bottom-55">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-start">
                        <h5>Related Products</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-slider">
                        @foreach ($products as $prd)
                            <div class="item">
                                <div class="single-product-wrap">
                                    <div class="thumb">
                                        @if (count($prd->productImage) > 0)
                                            <img src="{{ thumbnail($prd->productImage[0]->image) }}" alt="img">
                                        @endif
                                        <a class="btn btn-base bg-main" href="cart.html"><span
                                                class="border-1"></span><span class="border-2"></span>QUICK
                                            VIEW</a>
{{--                                        <ul>--}}
{{--                                            <li><a href="#"><i class="far fa-heart"></i></a></li>--}}
{{--                                            <li><a href="#"><img src="img/icon/git-compare.png" alt="img"></a></li>--}}
{{--                                            <li><a href="#"><img src="img/icon/shopping-bag.png" alt="img"></a></li>--}}
{{--                                        </ul>--}}
                                    </div>
                                    <div class="wrap-details">
                                        <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                                        <h6><a href="{{route('product.details',[$prd->id,$prd->slug])}}">{{$prd->name}}</a></h6>
                                        {{-- <div class="star-rating">
                                            <span><i class="la la-star"></i></span>
                                            <span><i class="la la-star"></i></span>
                                            <span><i class="la la-star"></i></span>
                                            <span><i class="la la-star"></i></span>
                                            <span><i class="la la-star"></i></span>
                                        </div> --}}
                                        <span class="price">AED {{$prd->sales_price_aed}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-Area End-->
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
