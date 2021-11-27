@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Social Frontend Settings')
@push('pagecss')
    <link rel="stylesheet" type="text/css" href="{{asset('BackendAsset/app-assets/css/colors.css')}}">
@endpush
@push('css')
@endpush
@section('breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="nav-vertical">
                        <ul class="nav nav-tabs nav-left flex-column" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="baseVerticalLeft-tab1" data-toggle="tab" aria-controls="tabVerticalLeft1" href="#tabVerticalLeft1" role="tab" aria-selected="true">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="baseVerticalLeft-tab2" data-toggle="tab" aria-controls="tabVerticalLeft2" href="#tabVerticalLeft2" role="tab" aria-selected="false">Social Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="baseVerticalLeft-tab3" data-toggle="tab" aria-controls="tabVerticalLeft3" href="#tabVerticalLeft3" role="tab" aria-selected="false">Tab 3 </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel" aria-labelledby="baseVerticalLeft-tab1">
                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake
                                    carrot
                                    cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.
                                </p>
                            </div>
                            <div class="tab-pane pl-3" style="overflow: hidden" id="tabVerticalLeft2" role="tabpanel" aria-labelledby="baseVerticalLeft-tab2">
                                <h4 class="card-title">Social Media Links</h4>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <form action="{{route('admin.settings.frontend-settings.social-update')}}" method="post">
                                            @csrf
                                             @include('Backend.settings.Parts.SocialSettings')
                                        </form>
                                    </div>
                                    <div class="col-lg-5 d-flex align-items-center justify-content-center">
                                        <div>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                              @if($socialSettings->facebook)<a href="{{$socialSettings->facebook}}" target="_blank" class="btn btn-outline-primary"><i class="feather icon-facebook"></i></a>@endif
                                              @if($socialSettings->instagram)<a href="{{$socialSettings->instagram}}" target="_blank" class="btn btn-outline-info"><i class="feather icon-instagram"></i></a>@endif
                                              @if($socialSettings->youtube)<a href="{{$socialSettings->youtube}}" target="_blank" class="btn btn-outline-info"><i class="fa fa-youtube-play"></i></a>@endif
                                              @if($socialSettings->twitter)<a href="{{$socialSettings->twitter}}" target="_blank" class="btn btn-outline-danger"><i class="feather icon-twitter"></i></a>@endif
                                              @if($socialSettings->linkedin)<a href="{{$socialSettings->linkedin}}" target="_blank" class="btn btn-outline-info"><i class="fa fa-linkedin"></i></a>@endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabVerticalLeft3" role="tabpanel" aria-labelledby="baseVerticalLeft-tab3">
                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                                    candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                                    sweet sesame snaps.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pagejs')
@endpush
@push('js')

@endpush
