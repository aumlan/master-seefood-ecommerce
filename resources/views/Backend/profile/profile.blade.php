@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Admin Profile')
@push('pagecss')
@endpush
@push('css')
@endpush
@section('breadcrumb')
@endsection
@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <img class="card-img img-fluid mb-1" id="profile_image" src="{{asset(Auth::guard('admin')->user()->image)}}" alt="Card image cap">
                    <h5 class="mt-1">{{Auth::guard('admin')->user()->name}}</h5>
                    <p class="card-text">{{Auth::guard('admin')->user()->email}}</p>
                    <hr class="my-1">
                    <div class="d-flex justify-content-between mt-2">
                        <div class="float-left">
                            <p>Designation :</p>
                            <p class="">Mobile :</p>
                            <p class="">Bio :</p>
                            <p class="">Address :</p>
                        </div>
                        <div class="float-right">
                            <p >{{Auth::guard('admin')->user()->designation}}</p> <br>
                            <p class="">{{Auth::guard('admin')->user()->mobile}}</p> <br>
                            <p class="">{{Auth::guard('admin')->user()->bio}}</p> <br>
                            <p class="">{{Auth::guard('admin')->user()->address}}</p> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-6">
       <form action="{{route('admin.profile.update',Auth::guard('admin')->user()->id)}}" method="POST" enctype="multipart/form-data">
           @csrf
           @include('Backend.profile.parts.profile_edit_form',['button_text'=>'Update'])
       </form>
    </div>
</div>
@endsection
@push('pagejs')
@endpush
@push('js')
@endpush
