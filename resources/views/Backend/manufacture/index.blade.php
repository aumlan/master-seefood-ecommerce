@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Brand Name')
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
                    <form class="form form-vertical" method="POST" @if($manufacture) action="{{route('admin.manufactures.update',$manufacture->id)}}" @else action="{{route('admin.manufactures.store')}}" @endif enctype="multipart/form-data">
                      @csrf
                            @include('Backend.manufacture.part.form',['manufature'=>$manufacture,'btnText'=>'Add'])
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    @include('Backend.manufacture.part.list')
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
    function deleteManuFacture(id){
      var brand =  confirm('are you Sure You Want to Delete this Manufactures');
      if(brand){
        $.ajax({
            url: "/admin/manufactures/delete/"+id,
            type: 'GET',
            success: function(res) {
                location.reload();
            }
        });
      }
    }

</script>

@endpush
