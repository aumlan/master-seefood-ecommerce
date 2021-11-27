@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>Software Activation</title>

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
                    <span> Software Activation</span>
                </a>&nbsp;

            </div>
        </div>
    </div>

    @if (count($softwares) > 0)
        <div class="container">
            <section class="card_section">
{{--                <div class="card_section_title">--}}
{{--                    {{ __('frontend.newArrival') }}--}}
{{--                </div>--}}
                <div class="card_content">
                    <div class="row">
                        @foreach ($softwares as $software)
                            <div class="col-lg-3">
                                <a href={{ route('software.product.list', [$software->id, $software->name]) }}>
                                    <div class="card" style="width: 100%;">
                                            <img class="card-img-top"
                                                 src="{{ asset($software->icon) }}"
                                                 alt="Card image cap" />
                                </a>
                                <div class="card-body text-center">
                                    <div class="recent-listing-header">
                                        <div class="recent-listing-title">{{ $software->name }} </div>
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
