@extends('layouts.frontend.mobile.master')
@section('meta')
    <title>{{ $brand->name }}</title>
    <meta property="og:title" content="{{ $brand->name }}" />

        <meta property="og:image" content="{{ thumbnail($brand->icon) }}" />

@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="container py-3">
        <div class="car_category">
            <div class="category_item">
                <a href={{ route('welcome') }}>
                    <span>Home</span>
                </a>&nbsp;&nbsp;
                <span class="template-text-black">
                    <i class="fas fa-long-arrow-alt-right"></i>
                </span>
                <a href={{ route('welcome') }}>
                    <span>{{ $brand->name}}</span>
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
                            <div class="col-lg-3 col-6 mb-3">
                                <a href="{{ route('product.details', [$product->id, $product->slug]) }}">
                                    <div class="card" style="width: 100%;">
                                        @if (count($product->productImage) > 0)
                                            <img class="card-img-top"
                                                 src="{{ thumbnail($product->productImage[0]->image) }}"
                                                 alt="Card image cap">
                                    @endif
                                </a>
                                <div class="card-body p-1">
                                    <div class=" d-flex justify-content-between">
                                        <div class="mobileCardDetails w-100">
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

                                        {{--                                        <div class="cart add_to_cart align-items-center" onclick="addToCart({{ $product->id }}, 1)">--}}
                                        {{--                                        <span class="cart-icon">--}}
                                        {{--                                            <ion-icon name="cart-outline"></ion-icon>--}}
                                        {{--                                        </span>--}}
                                        {{--                                        </div>--}}
                                    </div>



                                </div>
                            </div>

                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    @endif

@endsection
@section('js')

@endsection
