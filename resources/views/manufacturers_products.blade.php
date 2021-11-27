@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>{{ $manufacturers->name }}</title>
    <meta property="og:title" content="{{ $manufacturers->name }}" />

        <meta property="og:image" content="{{ thumbnail($manufacturers->icon) }}" />

@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    <div class="container">
        <div class="car_category">
            <div class="category_item">
                <a href={{ route('welcome') }}>
                    <span>Home</span>
                </a>&nbsp;&nbsp;
                <span class="template-text-black">
                    <i class="fas fa-long-arrow-alt-right"></i>
                </span>
                <a href={{ route('welcome') }}>
                    <span>{{ $manufacturers->name}}</span>
                </a>&nbsp;
                <span class="template-text-black">
                    <i class="fas fa-long-arrow-alt-right"></i>
                </span>
                <a href={{ route('welcome') }}>
                    <span> Products </span>
                </a>&nbsp;

            </div>
        </div>
    </div>

    @if (count($products) > 0)
        <div class="container">
            <section class="card_section">
{{--                <div class="card_section_title">--}}
{{--                    {{ __('frontend.newArrival') }}--}}
{{--                </div>--}}
                <div class="card_content">
                    <div class="row">
                        @foreach ($products as $product)
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
            </section>
        </div>
    @else
        <div class="container" style="min-height: 40vh">
            <h3> No Products From This Manufacture </h3>
        </div>
    @endif

@endsection
@section('js')

@endsection
