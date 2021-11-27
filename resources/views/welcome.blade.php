@extends('layouts.frontend.desktop.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
{{--    <div class="hearo_section">--}}
{{--        <div class="slider owl-carousel" id="single_slider">--}}
{{--            @foreach ($sliders as $slider)--}}
{{--            <div class="slider_image">--}}
{{--                <img style="object-fit: cover" src="{{asset($slider->image)}}" alt="">--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container">--}}
{{--        <section class="card_section">--}}
{{--            <div class="card_section_title">--}}
{{--                {{ __('frontend.popularBrands') }}--}}
{{--            </div>--}}
{{--            <div class="popular_brand_list">--}}
{{--                @foreach (Brand() as $brand)--}}
{{--                    --}}{{-- <a href="{{ route('car.by.brand', $brand->id) }}"> --}}
{{--                    <a href="#">--}}
{{--                        <div class="brand">--}}
{{--                            <div class="brandIcon">--}}
{{--                                <img src="{{ asset($brand->icon) }}" alt="" srcset="">--}}
{{--                            </div>--}}
{{--                            <div class="brandName">--}}
{{--                                <p>{{ $brand->name }}</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
    <div class="container">
        <section class="card_section">
            <div class="card_section_title">
                {{ __('frontend.specialOffers') }}
            </div>
            <div class="card_content">
                <div class="row">
                    @foreach ($Special_offers as $product)
                        <div class="col-lg-3">
                            <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                                <div class="card" style="width: 100%;">
                                    @if (count($product->productImage) > 0)
                                        <img class="card-img-top"
                                            src="{{ thumbnail($product->productImage[0]->image) }}" alt="Card image cap">
                                    @endif
                            </a>
                            <div class="card-body">
                                <div class="lisitng-price">
                                    @if ($product->discount_price)
                                        <del><span style="color:#8a8a8a">$
                                                {{ $product->sales_price }}</span></del>
                                        <span>$ {{ $product->sales_price }}</span>
                                    @else
                                        @if($currencies->selected_currency == 'usd')
                                            <span>$ {{ $product->sales_price }}</span>
                                        @elseif($currencies->selected_currency == 'euro')
                                            <span>€ {{ $product->sales_price_euro }}</span>
                                        @elseif($currencies->selected_currency == 'aed')
                                            <span>AED {{ $product->sales_price_aed }}</span>
                                        @endif
                                    @endif
                                </div>
                                <div class="recent-listing-header">
                                    <div class="recent-listing-title">{{ $product->name }} </div>
                                </div>
                                <div class="cart add_to_cart" onclick="addToCart({{ $product->id }})">
                                    <span class="cart-icon">
                                        <ion-icon name="cart-outline"></ion-icon>
                                    </span>
                                </div>
                            </div>
                        </div>

                </div>
                @endforeach
            </div>
    </div>
    </section>
    </div>
    @if (count($best_selling) > 0)
        <div class="container">
            <section class="card_section">
                <div class="card_section_title">
                    {{ __('frontend.bestSelling') }}
                </div>
                <div class="card_content">
                    <div class="row">
                        @foreach ($best_selling as $product)
                            <div class="col-lg-3">
                                <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                                    <div class="card" style="width: 100%;">
                                        @if (count($product->productImage) > 0)
                                            <img class="card-img-top"
                                                src="{{ thumbnail($product->productImage[0]->image) }}"
                                                alt="Card image cap">
                                        @endif
                                </a>
                                <div class="card-body">
                                    <div class="lisitng-price">
                                        @if ($product->discount_price)
                                            <del><span style="color:#8a8a8a">$
                                                    {{ $product->sales_price }}</span></del>
                                            <span>$ {{ $product->sales_price }}</span>
                                        @else
                                            @if($currencies->selected_currency == 'usd')
                                                <span>$ {{ $product->sales_price }}</span>
                                            @elseif($currencies->selected_currency == 'euro')
                                                <span>€ {{ $product->sales_price_euro }}</span>
                                            @else
                                                <span>AED {{ $product->sales_price_aed }}</span>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="recent-listing-header">
                                        <div class="recent-listing-title">{{ $product->name }} </div>
                                    </div>
                                    <div class="cart add_to_cart" onclick="addToCart({{ $product->id }}, 1)">
                                        <span class="cart-icon">
                                            <ion-icon name="cart-outline"></ion-icon>
                                        </span>
                                    </div>
                                </div>
                            </div>

                    </div>
    @endforeach
    </div>
    </div>
    </section>
    </div>
    @endif
    @if (count($new_arrivals) > 0)
        <div class="container">
            <section class="card_section">
                <div class="card_section_title">
                    {{ __('frontend.newArrival') }}
                </div>
                <div class="card_content">
                    <div class="row">
                        @foreach ($new_arrivals as $product)
                            <div class="col-lg-3">
                                <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                                    <div class="card" style="width: 100%;">
                                        @if (count($product->productImage) > 0)
                                            <img class="card-img-top"
                                                src="{{ thumbnail($product->productImage[0]->image) }}"
                                                alt="Card image cap">
                                        @endif
                                </a>
                                <div class="card-body">
                                    <div class="lisitng-price">
                                        @if ($product->discount_price)
                                            <del><span style="color:#8a8a8a">$
                                                    {{ $product->sales_price }}</span></del>
                                            <span>$ {{ $product->sales_price }}</span>
                                        @else
                                            @if($currencies->selected_currency == 'usd')
                                                <span>$ {{ $product->sales_price }}</span>
                                            @elseif($currencies->selected_currency == 'euro')
                                                <span>€ {{ $product->sales_price_euro }}</span>
                                            @else
                                                <span>AED {{ $product->sales_price_aed }}</span>
                                            @endif

                                        @endif
                                    </div>
                                    <div class="recent-listing-header">
                                        <div class="recent-listing-title">{{ $product->name }} </div>
                                    </div>
                                    <div class="cart add_to_cart" onclick="addToCart({{ $product->id }}, 1)">
                                        <span class="cart-icon">
                                            <ion-icon name="cart-outline"></ion-icon>
                                        </span>
                                    </div>
                                </div>
                            </div>

                    </div>
    @endforeach
    </div>
    </div>
    </section>
    </div>
    @endif

    @if (count($free_shipping) > 0)
        <div class="container">
            <section class="card_section">
                <div class="card_section_title">
                    {{ __('frontend.freeExpressShipping') }}
                </div>
                <div class="card_content">
                    <div class="row">
                        @foreach ($free_shipping as $product)
                            <div class="col-lg-3">
                                <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                                    <div class="card" style="width: 100%;">
                                        @if (count($product->productImage) > 0)
                                            <img class="card-img-top"
                                                src="{{ thumbnail($product->productImage[0]->image) }}"
                                                alt="Card image cap">
                                        @endif
                                </a>
                                <div class="card-body">
                                    <div class="lisitng-price">
                                        @if ($product->discount_price)
                                            <del><span style="color:#8a8a8a">$
                                                    {{ $product->sales_price }}</span></del>
                                            <span>$ {{ $product->sales_price }}</span>
                                        @else
                                            @if($currencies->selected_currency == 'usd')
                                                <span>$ {{ $product->sales_price }}</span>
                                            @elseif($currencies->selected_currency == 'euro')
                                                <span>€ {{ $product->sales_price_euro }}</span>
                                            @else
                                                <span>AED {{ $product->sales_price_aed }}</span>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="recent-listing-header">
                                        <div class="recent-listing-title">{{ $product->name }} </div>
                                    </div>
                                    <div class="cart add_to_cart" onclick="addToCart({{ $product->id }}, 1)">
                                        <span class="cart-icon">
                                            <ion-icon name="cart-outline"></ion-icon>
                                        </span>
                                    </div>

                                </div>
                            </div>

                    </div>
    @endforeach
    </div>
    </div>
    </section>
    </div>
    @endif
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
