@extends('layouts.frontend.mobile.master')
@section('meta')
    <title>Dashboard</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
    <style>
        .nav-pills-custom .nav-link {
            color: #515050;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: #45b649;
            background: #fff;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: '';
                display: block;
                border-top: 8px solid transparent;
                border-left: 10px solid #fff;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }



    </style>
@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <!-- Demo header-->
    <section class="py-5 header bg-light">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="tab-pane fade shadow rounded myShadow bg-white p-4 active show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                    <div class="tab-pane fade shadow rounded myShadow bg-white p-4 active show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">Order Details</h4>
                        <div class="table-responsive">
                            <table class="table dataTable mb-6 table-striped ">
                                <thead>
                                <tr>
                                    <th class="order-id">Product Name</th>
                                    <th class="order-date">Quantity</th>
                                    <th class="order-status">Price</th>
                                    <th class="order-status">Size</th>
                                    <th class="order-status">Color</th>
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
                                            <span class="order-price">{{ $details->size }}</span>
                                        </td>
                                        <td class="order-total">
                                            <span class="order-price">{{ $details->color }}</span>
                                        </td>
                                        <td class="order-total">
                                            <span class="order-price">{{ $details->sub_total  }}</span>
                                        </td>
                                    </tr>
                                @endforeach



                                </tbody>
                                <tfoot class="thead-light">
                                <tr>
                                    <th colspan="3"></th>
                                    <th scope="col" class="text-center">Total</th>
                                    <th colspan="3" > {{  $ordersDetails->total }} AED</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
