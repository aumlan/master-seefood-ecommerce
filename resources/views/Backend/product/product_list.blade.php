@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Attributes')
@push('pagecss')
<link rel="stylesheet" type="text/css" href="{{asset('BackendAsset/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
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
                    <div class="table-responsive">
                        <table class="table zero-configuration">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Sales Price</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key=>$product )
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->sales_price_aed}}</td>
                                        <td>{{$product->category?$product->category->name:''}}</td>
                                        <td>{{$product->brand?$product->brand->name:''}}</td>
                                        <td class="float-right">
                                            <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-sm btn-primary"><i class="feather icon-edit"></i></a>
                                            <a href="{{route('admin.product.view',$product->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                                            <a href="#" data-toggle="modal" data-target="#product_delete{{$product->id}}" class="btn btn-sm btn-danger"><i class="feather icon-trash"></i></a>
                                             <!-- Modal -->
                                             <div class="modal fade text-left" id="product_delete{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger">
                                                                <h4 class="modal-title" id="myModalLabel1">Delete Product</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Are you sure delete this product??</h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">No</button>
                                                                <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger">Yes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
      var category =  confirm('are you Sure You Want to Delete?');
      if(category){
        $.ajax({
            url: "/admin/attribute/delete/"+id,
            type: 'GET',
            success: function(res) {
                location.reload();
            }
        });
      }
    }

</script>

@endpush
