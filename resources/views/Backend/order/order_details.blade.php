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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="tab-pane fade rounded myShadow bg-white p-2 active show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h4 class="font-italic mb-4">Biller Details</h4>

                                <div class="table-responsive">
                                    <table class="table dataTable mb-6 table-striped ">
                                        <tbody>
                                        <tr>
                                            <td class="order-id">Name: </td>
                                            <td> {{ $ordersDetails->customer_name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="order-date">Phone: </td>
                                            <td> {{ $ordersDetails->customer_phone_number }}</td>
                                        </tr>
                                        <tr>
                                            <td class="order-status">Email: </td>
                                            <td> {{ $ordersDetails->email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="order-total">Address: </td>
                                            <td> {{ $ordersDetails->address }}</td>
                                        </tr>
                                        <tr>
                                            <td class="order-total">City: </td>
                                            <td> {{ $ordersDetails->city }}</td>
                                        </tr>
                                        <tr>
                                            <td class="order-total">Status: </td>
                                            <td> {{ $ordersDetails->status }}</td>
                                        </tr>
                                        <tr>
                                            <td class="order-total">Payment Method: </td>
                                            <td> {{ $ordersDetails->payment_method }}</td>
                                        </tr>
                                        <tr>
                                            <td class="order-total">Payment Status: </td>
                                            <td> {{ $ordersDetails->payment_status }}</td>
                                        </tr>
                                        <tr>
                                            <td class="order-total">Total: </td>
                                            <td> {{ $ordersDetails->total }}</td>

                                        </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tab-pane fade rounded myShadow bg-white p-2 active show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <h4 class="font-italic mb-4">Order Details</h4>
                                <div class="table-responsive">
                                    <table class="table dataTable mb-6 table-striped ">
                                        <thead>
                                        <tr>
                                            <th class="order-id">Product Name</th>
                                            <th class="order-date">Quantity</th>
                                            <th class="order-status">Price</th>
                                            <th class="order-total">Sub Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($ordersDetails->products as $details)

                                            <tr>
                                                <td class="order-id">{{ $details->product->name}}</td>

                                                <td class="order-total">
                                                    <span class="order-price">{{ $details->quantity }}</span>
                                                </td>
                                                <td class="order-total">
                                                    <span class="order-price">{{ $details->price }}</span>
                                                </td>
                                                <td class="order-total">
                                                    <span class="order-price">{{ $details->sub_total  }}</span>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot class="thead-light">
                                        <tr>
                                            <th colspan="2"></th>
                                            <th scope="col" class="text-center">Total</th>
                                            <th scope="col" > {{  $ordersDetails->total }}  {{ strtoupper($currencies->selected_currency)  }} </th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

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
