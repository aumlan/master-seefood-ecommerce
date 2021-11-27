@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Coupon')
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
                    <form class="form form-vertical" method="POST" @if($coupon) action="{{route('admin.coupon.coupon_update',$coupon->id)}}" @else action="{{route('admin.coupon.store')}}" @endif enctype="multipart/form-data">
                        @csrf
                        @include('Backend.coupon.part.form',['coupon'=>$coupon,'btnText'=>'Update'])
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    @include('Backend.coupon.part.coupon_list')
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
    function deleteCoupon(id){
      var $coupon =  confirm('are you Sure You Want to Delete this Coupon');
      if($coupon){
        $.ajax({
            url: "/admin/coupon/delete/"+id,
            type: 'GET',
            success: function(res) {
                location.reload();
            }
        });
      }
    }

</script>

@endpush
