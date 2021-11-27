@extends('layouts.frontend.mobile.master')
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="hearo_section">
        <div class="slider owl-carousel" id="single_slider">
            @foreach ($sliders as $slider)
                <div class="slider_image">
                    <img style="object-fit: fill;width: 100%;height: 250px" src="{{asset($slider->image)}}" alt="" >
                </div>
            @endforeach
        </div>
    </div>

    <div class="cardSection">
        <div class="cardSectionTitle">
            <div class="titleText">
               <p>{{ __('frontend.popularBrands') }}</p>
            </div>
            <div class="titleIcon">
                <span>{{ __('frontend.seeMore') }}<i class="fas fa-arrow-right"></i></span>
            </div>
        </div>

        <div class="BrandsCard">
            <div class="brands">
                @foreach ($brands as $brand)
                    <a href="{{ route('brand.products', [$brand->id, $brand->name] ) }}" class="text-dark">
                        <div class="brand">
                            <div class="brandIcon">
                                <img src="{{ asset($brand->icon) }}" alt="" srcset="">
                            </div>
                            <div class="brandName">
                                <p>{{ $brand->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>

    @if (count($new_arrivals) > 0)
        <div class="cardSection">
            <div class="cardSectionTitle">
                <div class="titleText">
                    <p>{{ __('frontend.newArrival') }} </p>
                </div>
                <div class="titleIcon">
                    <a href="#" class="text-dark"><span>{{ __('frontend.seeMore') }}<i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="cardContentMobile owl-carousel">
                @foreach ($new_arrivals as $product)
                    <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                        <div class="mobileCard">
                            <div class="mobileCardImg">
                                @if (count($product->productImage) > 0)
                                    <img src="{{ thumbnail($product->productImage[0]->image) }}" alt="" srcset="">
                                @endif
                            </div>
                            <div class="mobileCardDetails">
                                <div class="d-flex justify-content-between">

                                    @if ($product->discount_price)
                                        <del>
                                            <p class="mb-0 font-weight-bold" style="color: #8a8a8a">AED
                                                {{ $product->sales_price }}</p>
                                        </del>
                                        <p class="mb-0 font-weight-bold template_primary_color">AED
                                            {{ $product->discount_price }}</p>
                                    @else
                                        @if($currencies->selected_currency == 'usd')
                                            <p class="mb-0 font-weight-bold template_primary_color">$ {{ $product->sales_price }}</p>
                                        @elseif($currencies->selected_currency == 'euro')
                                            <p class="mb-0 font-weight-bold template_primary_color">€ {{ $product->sales_price_euro }}</p>
                                        @elseif($currencies->selected_currency == 'aed')
                                            <p class="mb-0 font-weight-bold template_primary_color">AED {{ $product->sales_price_aed }}</p>
                                        @endif
                                    @endif
                                </div>
                                <p class="template_dark_color font-weight-bold">
                                    {{ Str::limit($product->name, 15, '...') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    @if (count($featured_products) > 0)
        <div class="cardSection">
            <div class="cardSectionTitle">
                <div class="titleText">
{{--                    <p>{{ __('frontend.specialOffers') }}</p>--}}
                    <p>Featured Products</p>
                </div>
                <div class="titleIcon">
                    <a href="#" class="text-dark"><span>{{ __('frontend.seeMore') }}<i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="cardContentMobile owl-carousel">
                @foreach ($featured_products as $product)
                    <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                        <div class="mobileCard">
                            <div class="mobileCardImg">
                                @if (count($product->productImage) > 0)
                                    <img src="{{ thumbnail($product->productImage[0]->image) }}" alt="" srcset="">
                                @endif
                            </div>
                            <div class="mobileCardDetails">
                                <div class="d-flex justify-content-between">

                                    @if ($product->discount_price)
                                        <del>
                                            <p class="mb-0 font-weight-bold" style="color: #8a8a8a">AED
                                                {{ $product->sales_price_aed }}</p>
                                        </del>
                                        <p class="mb-0 font-weight-bold template_primary_color">AED
                                            {{ $product->discount_price }}</p>
                                    @else
                                        <p class="mb-0 font-weight-bold template_primary_color">AED {{ $product->sales_price_aed }}</p>
                                    @endif
                                </div>
                                <p class="template_dark_color font-weight-bold">
                                    {{ Str::limit($product->name, 15, '...') }}</p>
                            </div>
                            {{-- <div class="mobile_carts" >
                                <div class="cart_icon">
                                    <ion-icon name="cart-outline"></ion-icon>
                                </div>
                            </div> --}}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    @if (count($best_selling) > 0)
        <div class="cardSection">
            <div class="cardSectionTitle">
                <div class="titleText">
                    <p>{{ __('frontend.bestSelling') }}</p>
                </div>
                <div class="titleIcon">
                    <a href="#" class="text-dark"><span>{{ __('frontend.seeMore') }} <i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
            <div class="cardContentMobile owl-carousel">
                @foreach ($best_selling as $product)
                    <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                        <div class="mobileCard">
                            <div class="mobileCardImg">
                                @if (count($product->productImage) > 0)
                                    <img src="{{ thumbnail($product->productImage[0]->image) }}" alt="" srcset="">
                                @endif
                            </div>
                            <div class="mobileCardDetails">
                                <div class="d-flex justify-content-between">

                                    @if ($product->discount_price)
                                        <del>
                                            <p class="mb-0 font-weight-bold" style="color: #8a8a8a">AED
                                                {{ $product->sales_price }}</p>
                                        </del>
                                        <p class="mb-0 font-weight-bold template_primary_color">AED
                                            {{ $product->discount_price }}</p>
                                    @else
                                        <p class="mb-0 font-weight-bold template_primary_color">AED
                                            {{ $product->sales_price }}</p>
                                    @endif
                                </div>
                                <p class="template_dark_color font-weight-bold">
                                    {{ Str::limit($product->name, 15, '...') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

    @if (count($top_reacted) > 0)
<div class="cardSection">
    <div class="cardSectionTitle">
        <div class="titleText">
            <p>Top Reacted</p>
        </div>
        <div class="titleIcon">
            <a href="#" class="text-dark"><span>{{ __('frontend.seeMore') }}<i class="fas fa-arrow-right"></i></span></a>
        </div>
    </div>
    <div class="cardContentMobile owl-carousel">
        @foreach ($top_reacted as $product)
            <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                <div class="mobileCard">
                    <div class="mobileCardImg">
                        @if (count($product->productImage) > 0)
                            <img src="{{ thumbnail($product->productImage[0]->image) }}" alt="" srcset="">
                        @endif
                    </div>
                    <div class="mobileCardDetails">
                        <div class="d-flex justify-content-between">

                            @if ($product->discount_price)
                                <del>
                                    <p class="mb-0 font-weight-bold" style="color: #8a8a8a">AED
                                        {{ $product->sales_price }}</p>
                                </del>
                                <p class="mb-0 font-weight-bold template_primary_color">AED
                                    {{ $product->discount_price }}</p>
                            @else
                                @if($currencies->selected_currency == 'usd')
                                    <p class="mb-0 font-weight-bold template_primary_color">$ {{ $product->sales_price }}</p>
                                @elseif($currencies->selected_currency == 'euro')
                                    <p class="mb-0 font-weight-bold template_primary_color">€ {{ $product->sales_price_euro }}</p>
                                @elseif($currencies->selected_currency == 'aed')
                                    <p class="mb-0 font-weight-bold template_primary_color">AED {{ $product->sales_price_aed }}</p>
                                @endif
                            @endif
                        </div>
                        <p class="template_dark_color font-weight-bold">
                            {{ Str::limit($product->name, 15, '...') }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endif

@endsection
@push('js')
    <script>
        $('.Searchbox__keyword__input').keyup(function() {
            let typeInput = $('.Searchbox__keyword__input').val();

        });
    </script>

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


@endpush
