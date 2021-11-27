@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'brandModelYear Name')
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
                    <form class="form form-vertical" method="POST" @if($brandModelYear) action="{{route('admin.brandModelYear.brandModelYear_update',$brandModelYear->id)}}" @else action="{{route('admin.brandModelYear.store')}}" @endif enctype="multipart/form-data">
                      @csrf
                            @include('Backend.brandModelYear.part.form',['brandModelYear'=>$brandModelYear,'btnText'=>'Update'])
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    @include('Backend.brandModelYear.part.brand_list')
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

    function setSubModel() {
        var brand_id = $('#brand_id').val();
        if (brand_id != null) {
            $.ajax({
                url: '{{ url('admin/get/brand/submodel') }}/' + brand_id,
                type: 'GET',
                dataType: 'json',
            })
                .done(function(response) {
                    console.log(response)
                    data = '<option value="">Select Sub Model</option>';
                    selected = '';
                    $.each(response, function(index, val) {
                        console.log('ok');
                        data += '<option value=' + val.id + ' ' + selected + '>' + val.name + '</option>';
                    });
                    $('#sub_model_id').html(data);
                });

        } else {}
    }


    function deleteCategory(id){
      var brandModelYear =  confirm('are you Sure You Want to Delete this brandModelYear');
      if(brandModelYear){
        $.ajax({
            url: "/admin/brandModelYear/delete/"+id,
            type: 'GET',
            success: function(res) {
                location.reload();
            }
        });
      }
    }

</script>

@endpush
