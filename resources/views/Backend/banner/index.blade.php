@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Banner Name')
@push('pagecss')
<link rel="stylesheet" type="text/css" href="{{asset('BackendAsset/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
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
                    <form class="form form-vertical" method="POST" action="{{route('admin.banner.store')}}" enctype="multipart/form-data">
                      @csrf
                        @include('Backend.banner.part.form')
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    @include('Backend.banner.part.list')
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pagejs')
<script src="{{asset('BackendAsset/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('BackendAsset/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>

@endpush
@push('js')
<script src="{{asset('BackendAsset/app-assets/js/scripts/datatables/datatable.js')}}"></script>

<script>

$(document).ready(function() {
            $("#second_image").show();
            $('#bannerType').on('change', function() {
                let type_of_post = $('#bannerType').val();
                if (type_of_post == 'Main Banner') {
                    $("#second_image").show();
                } else {
                    $("#second_image").hide();
                }
            })
        })

    function deleteSlider(id){
      var brand =  confirm('are you Sure You Want to Delete this Slide');
      if(brand){
        $.ajax({
            url: "/admin/slider/delete/"+id,
            type: 'GET',
            success: function(res) {
                location.reload();
            }
        });
      }
    }

</script>

@endpush
