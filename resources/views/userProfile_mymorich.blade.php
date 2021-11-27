@extends('layouts.frontend.desktop.master')
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


    <!-- Demo header-->
    <section class="pt-5 header bg-light">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-3 p-3 shadow active " id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="fas fa-columns mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Dashboard</span></a>

{{--               <i class="fa fa-calendar-minus mr-2">--}}
{{--                        <i class="fa fa-star mr-2"></i>--}}

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-orders-tab" data-toggle="pill" href="#v-pills-orders" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fas fa-shopping-bag mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Orders</span></a>

                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="fa fa-user-circle mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Personal Info</span></a>

{{--                        <a type="submit" class="nav-link mb-3 p-3 shadow" id="v-pills-logout-tab" href="{{ route('logout') }}" >--}}
{{--                            <i class="fas fa-sign-out-alt mr-2"></i>--}}

{{--                            <span class="font-weight-bold small text-uppercase">Logout</span></a>--}}

{{--                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-logout-tab" data-toggle="pill" href="#v-pills-logout" role="tab" aria-controls="v-pills-settings" aria-selected="false">--}}
                        <form action="{{ url('/logout')}}" method="POST">
                            @csrf
                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-logout-tab" href="{{ route('logout') }}" >
                            <i class="fas fa-sign-out-alt mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Logout</span></a>
                        </form>
                    </div>
                </div>


                <div class="col-md-9">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade shadow rounded myShadow bg-white show active pl-4 text-center" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                            <span class="font-italic mb-4">Hello {{ strtoupper(auth()->user()->name) }}</span>
                            <img src="site_image/Auto_Insurance.png" alt="user image" width="350px">

                        </div>

                        <div class="tab-pane fade shadow rounded myShadow bg-white p-4" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <h4 class="font-italic mb-4">Orders</h4>

                            <div class="table-responsive">
                                <table class="table dataTable mb-6 table-striped ">
                                    <thead>
                                    <tr>
                                        <th class="order-id">Order</th>
                                        <th class="order-date">Date</th>
                                        <th class="order-status">Status</th>
                                        <th class="order-total">Total</th>
                                        <th class="order-actions">Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td class="order-id">#{{ $order->id }}</td>
                                            <td class="order-date">
                                                {{ $order->created_at->format('d-m-Y') }}
                                            </td>

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
                                            <td class="order-total">
                                                <span class="order-price">{{ $order->total }}</span>

                                            </td>

                                            <td class="order-action">
                                                <a href="{{ route('user.order.details', $order->id) }}"
                                                   class=" btn-primary p-2 btn-sm rounded text-white">Order Details</a>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="tab-pane fade shadow rounded myShadow bg-white p-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <h4 class="font-italic mb-4">Personal Info</h4>
                            <div class="row" id="account-details-table">
                                <div class="col-sm-6 mb-6">
                                    <div class="ecommerce-address billing-address pr-lg-8">
                                        <address class="mb-4">
                                            <table class="address-table">
                                                <tbody>
                                                <tr>
                                                    <th>Name:</th>
                                                    <td id="name2">{{ Auth::user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email:</th>
                                                    <td id="email2">{{ Auth::user()->email }}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-6">
                                    <div class="ecommerce-address shipping-address pr-lg-8">
                                        @if (!empty(Auth::user()->image))
                                            <img id="oldPhoto"
                                                 src="{{ asset('uploads/users/' . Auth::user()->image) }}"
                                                 alt="user image">
                                        @else
                                            <img hidden id="oldPhoto" src="" alt="user image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade shadow rounded myShadow bg-white p-4" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <h4 class="font-italic mb-4">Logout</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
