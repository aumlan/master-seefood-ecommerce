@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'brandModel Name')
@push('pagecss')
<link rel="stylesheet" type="text/css" href="{{asset('BackendAsset/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css"
      href="{{ asset('backendAsset/app-assets/vendors/css/forms/select/select2.min.css') }}">
@endpush
@push('css')
@endpush
@section('breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" @if($brandModel) action="{{route('admin.brandModel.brandModel_update',$brandModel->id)}}" @else action="{{route('admin.brandModel.store')}}" @endif enctype="multipart/form-data">
                      @csrf
                            @include('Backend.brandModel.part.form',['brandModel'=>$brandModel,'btnText'=>'Update'])
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    @include('Backend.brandModel.part.brand_list')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pagejs')
<script src="{{asset('BackendAsset/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('BackendAsset/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backendAsset/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('backendAsset/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
@endpush
@push('js')
    <script src="{{asset('BackendAsset/app-assets/js/scripts/datatables/datatable.js')}}"></script>
<script>
    (function(window, document, $) {
        'use strict';

        // Basic Select2 select
        $(".select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    });

    function deleteCategory(id){
      var brandModel =  confirm('are you Sure You Want to Delete this brandModel');
      if(brandModel){
        $.ajax({
            url: "/admin/brandModel/delete/"+id,
            type: 'GET',
            success: function(res) {
                location.reload();
            }
        });
      }
    }

</script>

@endpush
