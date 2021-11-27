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
                                    <th >Order ID</th>
                                    <th >Date</th>
                                    <th >Total</th>
                                    <th >Status</th>

                                    <th></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key=>$order )
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $order->total }}</td>
                                        <td>
                                            @if ($order->status == 'pending')
                                                <span class=" bg-warning text-white rounded p-1">Pending</span>
                                            @elseif($order->status == 'processing')
                                                <span class="border bg-info text-white rounded p-1">Processing</span>
                                            @elseif($order->status == 'completed')
                                                <span class="border bg-success text-white rounded p-1">Completed</span>
                                            @elseif($order->status == 'declined')
                                                <span class="border bg-danger text-white rounded p-1">Declined</span>
                                            @elseif($order->status == 'on_delivery')
                                                <span class="border bg-dark text-white rounded p-1">On Delivery</span>
                                            @endif
                                        </td>
                                        <td>
                                            <input type="hidden" id="orderID" name="orderID" value="{{$order->id }}">
                                            <select class="select2 form-control" name="" id="selectStatus">
                                                <option disabled>Select Category</option>
                                                <option {{ ($order->status) == 'pending' ? 'selected' : '' }}  value="pending">Pending</option>
                                                <option {{ ($order->status) == 'processing' ? 'selected' : '' }}  value="processing">Processing</option>
                                                <option {{ ($order->status) == 'on_delivery' ? 'selected' : '' }}  value="on_delivery">On Delivery</option>
                                                <option {{ ($order->status) == 'completed' ? 'selected' : '' }}  value="completed">Completed</option>
                                                <option {{ ($order->status) == 'declined' ? 'selected' : '' }}  value="declined">Declined</option>
                                            </select>
                                        </td>
                                        <td class="float-right">
{{--                                            <a href="{{route('admin.order.edit',$order->id)}}" class="btn btn-sm btn-primary"><i class="feather icon-edit"></i></a>--}}
                                            <a href="{{route('admin.order.view',$order->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                                            <a href="#" data-toggle="modal" data-target="#order_delete{{ $order->id }}" class="btn btn-sm btn-danger"><i class="feather icon-trash"></i></a>
                                             <!-- Modal -->
                                             <div class="modal fade text-left" id="order_delete{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-danger">
                                                                <h4 class="modal-title" id="myModalLabel1">Delete order</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Are you sure delete this order??</h5>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">No</button>
                                                                <a href="{{route('admin.order.delete',$order->id)}}" class="btn btn-danger">Yes</a>
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
    //Status update ajax
    $(document).ready(function () {
        $(document).on('change','#selectStatus',function () {
            let status = $(this).val();
            let orderID = $(this).prev().val();
            var token =  $('input[name="csrfToken"]').attr('value');

            $.ajax({
                type: 'GET',
                headers: {
                    'X-CSRFToken': token
                },
                url: '/admin/order/updateOrderStatus/'+orderID,
                data: {'status': status,
                    'orderID':orderID},
                success: (data) => {
                    location.reload();
                },
                error: (error) => {
                    console.log(error);
                }
            })
        });
    });

    // $('#status_id').on('change', function() {
    //     var selectedText = $(this).find('option:selected').text();
    //     alert(selectedText);
    // });
    //
    // // $('select').on(function() {
    // //     var selectedText = $(this).find('.status_id option:selected').text();
    // //     alert(selectedText);
    // // });
    //
    // function OrderStatusChange(id){
    //     // var value = $(this).("[name='status_id']");
    //     //var value = $(this).val('.orderID');
    //     //var value = $(this).attr('orderID');
    //     //var value = $('.status_id').$(event.target).val();
    //     var value = $(this).find('#status_id option:selected').val();
    //
    //
    //     var selectedText = $(this).find('.status_id option:selected').text();
    //     alert(selectedText);
    //
    //
    //
    //
    //
    //   // var value= $('.status_id').val();
    //   //var id= $('.orderID').val();
    //   var id= id;
    //     //alert(value);
    //   // if(category){
    //   //   $.ajax({
    //   //       url: "/admin/attribute/delete/"+id,
    //   //       type: 'GET',
    //   //       success: function(res) {
    //   //           location.reload();
    //   //       }
    //   //   });
    //   // }
    // }

</script>

@endpush
