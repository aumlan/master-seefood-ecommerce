@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>{{ $brand->name }}</title>
    <meta property="og:title" content="{{ $brand->name }}" />

        <meta property="og:image" content="{{ thumbnail($brand->icon) }}" />

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
                        @foreach ($products as $prd)
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
            </section>
        </div>
    @else
        <div class="container text-center" style="min-height: 40vh">
            <h3> Results Page </h3>

            <div style="background-color: #fcfcfc;min-height: 160px;text-align: center;width: 100%;padding-top: 65px">
                <h5>No Products in This Brand. Look at <a href="/">other items in our store</a> </h5>
            </div>

        </div>
    @endif

@endsection
@section('js')

@endsection
