@extends('layouts.frontend.desktop.master')
@section('content')
    <!-- Banner Area Start-->

{{--    @include('layouts.frontend.featured_banner')--}}

    <!-- Banner Area End -->

    <!-- arrival-Area Start-->
    {{-- @include('layouts.frontend.second_featured') --}}
    <!-- arrival-Area End-->

    <!-- product-Area Start-->
    <div class="hearo_section">
        <div class="slider owl-carousel" id="single_slider">
            @foreach ($sliders as $slider)
                <div class="slider_image">
                    <img style="object-fit: fill" src="{{asset($slider->image)}}" alt="">
                </div>
            @endforeach
        </div>
    </div>

    <section class="product-area text-center pd-top-35">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="col-lg-3">
                    <div class="section-title fancy-border">
                        <span class="option_highlight">Brands</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($brands as $prd)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-wrap">
                            <div class="thumb" style="width: 130px; height: 120px;">
                                <img src="{{ asset($prd->icon) }}" alt="img" width="100px" style="object-fit: contain;width: 100%;height: 100%;}">

                            </div>
                            <div class="wrap-details">
                                <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                                <h6><a
                                        href="{{ route('brand.products', [$prd->id, $prd->name] ) }}">
                                        <span style="color: #ff8e01">{{ $prd->name }}</span>
                                    </a>
                                </h6>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <hr style="width: 75%">

    <!-- arrival-Area Start-->
    <section class="product-area text-center pd-top-35">
        <div class="container">
            <div class="row mb-4 justify-content-center">
                <div class="col-lg-3">
                    <div class="section-title fancy-border">
                        <span class="option_highlight">New Arrival</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($new_arrivals as $prd)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-wrap">
                            <div class="thumb">
                                @if (count($prd->productImage) > 0)
                                    <img src="{{ thumbnail($prd->productImage[0]->image) }}" alt="img" width="200px" style="object-fit: contain;width: 100%;height: 100%;}">
                                @endif

                                <a class="btn btn-base bg-main" href="{{ route('product.details', [$prd->id, $prd->slug]) }}"><span class="border-1"></span><span
                                        class="border-2"></span>QUICK VIEW</a>
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="far fa-heart"></i></a></li>--}}
{{--                                    <li><a href="#"><img src="{{ asset('FrontendAsset/img/icon/git-compare.png') }}"--}}
{{--                                                         alt="img"></a></li>--}}
{{--                                    <li><a href="#"><img src="{{ asset('FrontendAsset/img/icon/shopping-bag.png') }}"--}}
{{--                                                         alt="img"></a></li>--}}
{{--                                </ul>--}}
                            </div>
                            <div class="wrap-details">
                                <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                                <h6><a
                                        href="{{ route('product.details', [$prd->id, $prd->slug]) }}">
                                        <span style="color: #ff8e01">{{ $prd->name }}</span>
                                    </a>
                                </h6>
                                <div class="star-rating">
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                </div>
                                <span
                                    class="price">AED{{ $prd->sales_price_aed }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <hr style="width: 75%">

    <section class="product-area text-center pd-top-35">
        <div class="container">
            <div class="row  mb-4 justify-content-center">
                <div class="col-lg-3">
                    <div class="section-title fancy-border">
                        <span class="option_highlight">Featured Product</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($featured_products as $prd)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-product-wrap">
                                <div class="thumb">
                                    @if (count($prd->productImage) > 0)
                                        <img src="{{ thumbnail($prd->productImage[0]->image) }}" alt="img" width="200px" style="object-fit: contain;width: 100%;height: 100%;}">
                                    @endif

                                    <a class="btn btn-base bg-main" href="{{ route('product.details', [$prd->id, $prd->slug]) }}"><span class="border-1"></span><span
                                            class="border-2"></span>QUICK VIEW</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="#"><i class="far fa-heart"></i></a></li>--}}
{{--                                        <li><a href="#"><img src="{{ asset('FrontendAsset/img/icon/git-compare.png') }}"--}}
{{--                                                             alt="img"></a></li>--}}
{{--                                        <li><a href="#"><img src="{{ asset('FrontendAsset/img/icon/shopping-bag.png') }}"--}}
{{--                                                             alt="img"></a></li>--}}
{{--                                    </ul>--}}
                                </div>
                                <div class="wrap-details">
                                    <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                                    <h6><a
                                            href="{{ route('product.details', [$prd->id, $prd->slug]) }}">
                                            <span style="color: #ff8e01">{{ $prd->name }}</span>
                                        </a>
                                    </h6>
                                    <div class="star-rating">
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                        <span><i class="la la-star"></i></span>
                                    </div>
                                    <span
                                        class="price">AED{{ $prd->sales_price_aed }}</span>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- product-Area End-->
    <hr style="width: 75%">

    <section class="product-area text-center pd-top-35">
        <div class="container">
            <div class="row  mb-4 justify-content-center">
                <div class="col-lg-3">
                    <div class="section-title fancy-border">
                        <span class="option_highlight">Best Seller</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($best_selling as $prd)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-wrap">
                            <div class="thumb">
                                @if (count($prd->productImage) > 0)
                                    <img src="{{ thumbnail($prd->productImage[0]->image) }}" alt="img" width="200px" style="object-fit: contain;width: 100%;height: 100%;}">
                                @endif

                                <a class="btn btn-base bg-main" href="{{ route('product.details', [$prd->id, $prd->slug]) }}"><span class="border-1"></span><span
                                        class="border-2"></span>QUICK VIEW</a>
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="far fa-heart"></i></a></li>--}}
{{--                                    <li><a href="#"><img src="{{ asset('FrontendAsset/img/icon/git-compare.png') }}"--}}
{{--                                                         alt="img"></a></li>--}}
{{--                                    <li><a href="#"><img src="{{ asset('FrontendAsset/img/icon/shopping-bag.png') }}"--}}
{{--                                                         alt="img"></a></li>--}}
{{--                                </ul>--}}
                            </div>
                            <div class="wrap-details">
                                <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                                <h6><a
                                        href="{{ route('product.details', [$prd->id, $prd->slug]) }}">
                                        <span style="color: #ff8e01">{{ $prd->name }}</span>
                                    </a>
                                </h6>
                                <div class="star-rating">
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                </div>
                                <span
                                    class="price">AED{{ $prd->sales_price_aed }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <hr style="width: 75%">

    <section class="product-area text-center pd-top-35">
        <div class="container">
            <div class="row  mb-4 justify-content-center">
                <div class="col-lg-3">
                    <div class="section-title fancy-border">
                        <span class="option_highlight">Top Reacted</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($top_reacted as $prd)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product-wrap">
                            <div class="thumb">
                                @if (count($prd->productImage) > 0)
                                    <img src="{{ thumbnail($prd->productImage[0]->image) }}" alt="img" width="200px" style="object-fit: contain;width: 100%;height: 100%;}">
                                @endif

                                <a class="btn btn-base bg-main" href="{{ route('product.details', [$prd->id, $prd->slug]) }}"><span class="border-1"></span><span
                                        class="border-2"></span>QUICK VIEW</a>
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="far fa-heart"></i></a></li>--}}
{{--                                    <li><a href="#"><img src="{{ asset('FrontendAsset/img/icon/git-compare.png') }}"--}}
{{--                                                         alt="img"></a></li>--}}
{{--                                    <li><a href="#"><img src="{{ asset('FrontendAsset/img/icon/shopping-bag.png') }}"--}}
{{--                                                         alt="img"></a></li>--}}
{{--                                </ul>--}}
                            </div>
                            <div class="wrap-details">
                                <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                                <h6><a
                                        href="{{ route('product.details', [$prd->id, $prd->slug]) }}">
                                        <span style="color: #ff8e01">{{ $prd->name }}</span>
                                    </a>
                                </h6>
                                <div class="star-rating">
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                </div>
                                <span
                                    class="price">AED{{ $prd->sales_price_aed }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
{{--    @include('layouts.frontend.third_banner')--}}

    <!-- arrival-Area End-->



{{--    @include('layouts.frontend.desktop.parts.product_category')--}}

    @if (ThirdFeatured() != null)
        <!-- offer-Area Start-->
        <section class="offer-area pd-top-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-arrival-wrap pd-bottom-65 pd-top-55 px-0"
                             style="background: url('{{ asset(ThirdFeatured()->banner_image_one) }}'); background-position: center top; background-size: cover;">
                            <div class="overlay-2"></div>
                            <div class="row h-100">
                                <div class="col-lg-12 align-self-center text-center">
                                    <h2 class="text-white">{{ThirdFeatured()->banner_title}}</h2>
                                    <h5 class="text-white mb-5 ">{{ThirdFeatured()->banner_sub_title}}</h5>
                                    <a class="btn btn-base bg-white" href="{{ThirdFeatured()->banner_url}}"><span
                                            class="border-1"></span><span class="border-2"></span>FLASE SALE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- offer-Area End-->
    @endif

    <!-- spaciality-Area Start-->
    <section class="pd-top-65">
        <div class="container-fluid pd-xy-120">
            <div class="spaciality-area" style="background-color: #F5F5F5">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h5>Our Speciality</h5>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-spaciality-wrap">
                            <div class="row h-100 g-0">
                                <div class="col-xl-6 align-self-center order-1 order-xl-0">
                                    <div class="wrap-details">
                                        <h5>High Quality Product</h5>
                                        <span class="btn-d-border" >Get Started <i
                                                class="fa fa-angle-right"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 align-self-end">
                                    <div class="thumb text-end">
                                        <img src="{{ asset('FrontendAsset/img/spaciality/1.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-spaciality-wrap">
                            <div class="row h-100 g-0">
                                <div class="col-xl-6 align-self-center order-1 order-xl-0">
                                    <div class="wrap-details">
                                        <h5>On Time Delivery</h5>
                                        <span class="btn-d-border" >Get Started <i
                                                class="fa fa-angle-right"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 align-self-end">
                                    <div class="thumb text-end">
                                        <img src="{{ asset('FrontendAsset/img/spaciality/2.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-spaciality-wrap">
                            <div class="row h-100 g-0">
                                <div class="col-xl-6 align-self-center order-1 order-xl-0">
                                    <div class="wrap-details">
                                        <h5>Best Price</h5>
                                        <span class="btn-d-border" >Get Started <i
                                                class="fa fa-angle-right"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6 align-self-end">
                                    <div class="thumb text-end">
                                        <img src="{{ asset('FrontendAsset/img/spaciality/3.png') }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- spaciality-Area End-->

{{--    @include('layouts.frontend.desktop.parts.service')--}}

@endsection
@section('js')
    <script>
        $(document).ready(function() {

            $(".owl-carousel#single_slider").owlCarousel({
                loop: true,
                margin: 0,
                items: 1,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    766: {
                        items: 1
                    },
                    767: {
                        items: 1
                    },
                    992: {
                        items: 1
                    }
                }
            });
        });
    </script>





@endsection
