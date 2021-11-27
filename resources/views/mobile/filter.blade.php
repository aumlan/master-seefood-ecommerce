@extends('layouts.frontend.mobile.master')
@push('css')
    <style>
        .bg_image {
            width: 100%;
            height: 120px;
            position: relative;
        }

        .conditional_image {
            position: absolute;
            top: 0;
            left: 0%;
            margin: 0 auto;
            width: 100% !important;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #dbdbdbb0;
        }

        .conditional_image img {
            width: 50% !important;
            object-fit: contain;
            filter: contrast(120%);
        }

    </style>
@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="space10"></div>
    <div class="cardContentMobile searchPage" style="overflow: hidden">
        @foreach ($cars as $Car)
            <a href="{{ route('car.details', $Car->id) }}">
                <div class="mobileCard">
                    <div class="mobileCardImg">
                        @if (count($Car->CarImage) > 0)
                            @if ($Car->pub_place == 'Sold')
                                <div class="bg_image">
                                    <img src="{{ thumbnail($Car->CarImage[0]->image) }}" alt="" srcset="">
                                    <div class="conditional_image">
                                        <img src="{{ asset('image/sold.png') }}" alt="" srcset="">
                                    </div>
                                </div>
                            @elseif ($Car->pub_place == 'Reserved')
                                <div class="bg_image">
                                    <img src="{{ thumbnail($Car->CarImage[0]->image) }}" alt="{{ $Car->title }}"
                                        srcset="">
                                    <div class="conditional_image">
                                        <img src="{{ asset('image/reserved.png') }}" alt="" srcset="">
                                    </div>
                                </div>

                            @else
                                <img src="{{ thumbnail($Car->CarImage[0]->image) }}" alt="" srcset="">
                            @endif
                        @endif
                    </div>
                    <div class="mobileCardDetails">
                        <h6 class="mb-0 template_primary_color">AED {{ $Car->new_price }}</h6>
                        <p class="template_dark_color font-weight-bold">{{ Str::limit($Car->title, 15, '...') }}</p>
                        <p class="template_grey_color"> {{ $Car->year }} • {{ $Car->km }} km</p>
                    </div>
                </div>
            </a>
        @endforeach
        @if ($cars->hasPages())
            <p>Total Result : {{ $cars->total() }}</p>
            {{ $cars->links('vendor.pagination.custom_pagination') }}
        @endif
    </div>
@endsection
@push('js')

@endpush
