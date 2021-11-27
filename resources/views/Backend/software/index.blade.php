@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Category')
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
                    <form class="form form-vertical" method="POST" action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
                      @csrf
                        @include('Backend.software.part.form')
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    @include('Backend.software.part.category_list')
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
    function deleteCategory(id){
      var category =  confirm('are you Sure You Want to Delete this Category');
      if(category){
        $.ajax({
            url: "/admin/category/delete/"+id,
            type: 'GET',
            success: function(res) {
                location.reload();
            }
        });
      }
    }

</script>

@endpush
