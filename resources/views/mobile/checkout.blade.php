@extends('layouts.frontend.mobile.master')
@push('css')

@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="page-content" style="background-color:#F7F8FA">
        <div class="container pt-5">


            <form action="{{ route('place_order') }}" method="POST" >
                @csrf
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                <div class="row mb-9">
                    <div class="col-lg-7 pr-lg-4 mb-4 border-radius px-4 py-4 mr-5">
                        <div>
                            <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-3 justify-content-center">
                                Billing Details
                            </h3>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><label class="font-weight-bold text-dark">Name
                                        *</label>
                                </div>
                                <div class="col-md-9"><input style="border: 1px solid gray" type="text"
                                                             placeholder="House number and street name"
                                                             class="form-control text-dark form-control-md mb-2" name="name"
                                                             value="{{ $users->name }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><label class="font-weight-bold text-dark">Street address
                                        *</label>
                                </div>
                                <div class="col-md-9"><input style="border: 1px solid gray" type="text"
                                                             placeholder="House number and street name"
                                                             class="form-control text-dark form-control-md mb-2" name="address"
                                                             value="{{ $users->address }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><label class="font-weight-bold text-dark">Phone
                                        *</label>
                                </div>
                                <div class="col-md-9"><input style="border: 1px solid gray" type="number"
                                                             placeholder="Contact Number" class="form-control text-dark form-control-md mb-2"
                                                             name="phone" required id="phone">
                                    <small id="phoneError" style="color: red"></small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><label class="font-weight-bold text-dark">City / Zip
                                        *</label>
                                </div>

                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6"><input placeholder="Enter city"
                                                                     value="{{ $users->city }}" style="border: 1px solid gray" type="text"
                                                                     class="form-control text-dark form-control-md" name="city" required>
                                        </div>
                                        <div class="col-md-6"><input placeholder="Enter Zip"
                                                                     value="{{ $users->zip }}" style="border: 1px solid gray" type="text"
                                                                     class="form-control text-dark form-control-md" name="zip" required>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>


                        {{-- <div class="row gutter-sm">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-weight-bold text-dark">Town / City *</label>
                                    <input placeholder="Enter city" value="{{ $users->city }}"
                                        style="border: 1px solid gray" type="text"
                                        class="form-control text-dark form-control-md" name="city" required>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold text-dark">ZIP *</label>
                                    <input placeholder="Enter Zip" value="{{ $users->zip }}"
                                        style="border: 1px solid gray" type="text"
                                        class="form-control  text-darkform-control-md" name="zip" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone *</label>
                                    <input style="border: 1px solid gray" type="number"
                                        class="form-control form-control-md" name="phone" required id="phone">
                                    <small id="phoneError" style="color: red"></small>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><label class="font-weight-bold text-dark">Email address
                                        *</label>
                                </div>
                                <div class="col-md-9"><input style="border: 1px solid gray"
                                                             value="{{ $users->email }}" placeholder="Enter email" type="email"
                                                             class="form-control  text-darkform-control-md" name="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"><label class="font-weight-bold text-dark"
                                                             for="order-notes">Order notes (optional)</label>
                                </div>
                                <div class="col-md-9"><textarea style="border: 1px solid gray"
                                                                class="form-control mb-0 text-dark" id="note" name="note" cols="30" rows="4"
                                                                placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group mt-3">
                            <label class="font-weight-bold text-dark" for="order-notes">Order notes (optional)</label>
                            <textarea style="border: 1px solid gray" class="form-control mb-0 text-dark" id="note"
                                name="note" cols="30" rows="4"
                                placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 mb-4 sticky-sidebar-wrapper border-radius px-4 py-4">
                        {{--                        <div class="order-summary-wrapper sticky-sidebar">--}}
                        {{--                            <h3 class="title text-uppercase ls-10">Your Order</h3>--}}
                        {{--                            <div class="order-summary">--}}
                        {{--                                <table class="order-table">--}}
                        {{--                                    <thead>--}}
                        {{--                                    <tr>--}}
                        {{--                                        <th colspan="2">--}}
                        {{--                                            <b>Product</b>--}}
                        {{--                                        </th>--}}
                        {{--                                    </tr>--}}
                        {{--                                    </thead>--}}
                        {{--                                    <tbody>--}}
                        {{--                                    @forelse ($carts as $item)--}}
                        {{--                                        <tr class="bb-no">--}}
                        {{--                                            <td class="product-name">{{ $item->name }}<i--}}
                        {{--                                                    class="fas fa-times"></i> <span--}}
                        {{--                                                    class="product-quantity">{{ $item->qty }}</span></td>--}}
                        {{--                                            <td class="product-total">{{ $item->qty * $item->price }}</td>--}}
                        {{--                                        </tr>--}}
                        {{--                                    @empty--}}
                        {{--                                        <p class="text-danger">Product Not Found</p>--}}
                        {{--                                    @endforelse--}}


                        {{--                                    <tr class="cart-subtotal bb-no">--}}
                        {{--                                        <td>--}}
                        {{--                                            <b>Subtotal</b>--}}
                        {{--                                        </td>--}}
                        {{--                                        <td>--}}
                        {{--                                            <b>{{ $sub_total }}</b>--}}

                        {{--                                        </td>--}}
                        {{--                                    </tr>--}}
                        {{--                                    </tbody>--}}
                        {{--                                    <tfoot>--}}
                        {{--                                    <tr class="shipping-methods">--}}
                        {{--                                        <td colspan="2" class="text-lefts">--}}
                        {{--                                            <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Shipping--}}
                        {{--                                            </h4>--}}
                        {{--                                            @forelse ($ship as $item)--}}
                        {{--                                                <li>--}}
                        {{--                                                    <input type="radio"--}}
                        {{--                                                           value="{{ $item->price }}{{ $item->title }}"--}}
                        {{--                                                           class="ship" id="ship" name="ship">--}}
                        {{--                                                    <label class="color-dark">{{ $item->title }}:--}}
                        {{--                                                        {{ $item->price }}</label>--}}
                        {{--                            </div>--}}
                        {{--                            </li>--}}
                        {{--                            @empty--}}

                        {{--                            @endforelse--}}

                        {{--                            </td>--}}
                        {{--                            </tr>--}}
                        {{--                            <tr class="order-total">--}}
                        {{--                                <th>--}}
                        {{--                                    <b>Total</b>--}}
                        {{--                                </th>--}}
                        {{--                                <td>--}}
                        {{--                                    <b id="total"></b>--}}
                        {{--                                    <input id="t" value=" " hidden name="total">--}}

                        {{--                                </td>--}}
                        {{--                            </tr>--}}
                        {{--                            </tfoot>--}}
                        {{--                            </table>--}}

                        {{--                            <div class="payment-methods" id="payment_method">--}}
                        {{--                                <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>--}}
                        {{--                                <div class="accordion payment-accordion">--}}
                        {{--                                    @if ($isOnlinePayment == 0)--}}
                        {{--                                        <div class="cards">--}}
                        {{--                                            <input id="cashOnCheckBox" type="radio" value="cash on" name="payment"--}}
                        {{--                                                   checked>--}}
                        {{--                                            <label class="color-dark">Cash On Delivery</label>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="cards">--}}
                        {{--                                            <input id="onlinePayChackBox" type="radio" value="online" name="payment">--}}
                        {{--                                            <label class="color-dark">Online Payment</label>--}}
                        {{--                                            <button hidden id="onlinepay" class="btn btn-primary btn-lg btn-block"--}}
                        {{--                                                    type="submit">Pay Now</button>--}}

                        {{--                                        </div>--}}
                        {{--                                    @else--}}
                        {{--                                        <div class="cards">--}}
                        {{--                                            <button id="onlinepay" class="btn btn-primary btn-lg btn-block"--}}
                        {{--                                                    type="submit">Pay Now</button>--}}
                        {{--                                        </div>--}}
                        {{--                                    @endif--}}

                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            @if ($isOnlinePayment == 0)--}}
                        {{--                                <div class="form-group place-order pt-6">--}}
                        {{--                                    <button type="submit" class="btn btn-dark btn-block btn-rounded"--}}
                        {{--                                            id="place-orderBtn">Place Order</button>--}}
                        {{--                                </div>--}}
                        {{--                            @endif--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}

                        <div class="col-md-12 order-md-12 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill">{{ count($carts) }}</span>
                            </h4>
                            <ul class="list-group mb-3">

                                @foreach($carts as $item)
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div style="width: 70%">
                                            <h6 class="my-0">{{ $item->name }}</h6>
                                            <small class="text-muted">Quantity: <strong>{{ $item->qty }}</strong> </small>
                                        </div>
                                        <div>
                                            <span class="text-muted"><strong>AED {{ $item->qty * $item->price  }} </strong></span>
                                        </div>

                                    </li>
                                @endforeach
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="font-weight-bold">Total </span>
                                    <strong>AED <span id="after_coupon"> {{ $sub_total }} </span>  </strong>
                                </li>
                            </ul>


                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code" id="coupon_value">
                                <div class="input-group-append">
                                    <input type="hidden" class="form-control" name="after_coupon_total" id="after_coupon_total" placeholder="Promo code" value={{ $sub_total }} >
                                    <button id="redeem_coupon"  class="button-68">Redeem</button>
                                </div>
                            </div>


                            <br/>

                            @csrf
                            <div class="input-group">
                                <button type="submit" class="button-68 w-100">Place Order</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
@section('js')

    <script>
        $('#redeem_coupon').click(function (e){
            e.preventDefault();

            var coupon_value = $('#coupon_value').val();
            if (coupon_value != null) {
                $.ajax({
                    url: '{{ url('/redeem-coupon') }}/' + coupon_value,
                    type: 'GET',
                    dataType: 'json',
                })
                    .done(function(response) {
                        console.log(response);
                        if (response['message'] == 1){
                            toastr.success('Coupon Redeemed!');
                        }else{
                            toastr.error('Invalid Coupon Code');
                        }

                        $('#after_coupon').text(response['total_after_coupon'].toFixed(2));
                        $('#after_coupon_total').val(response['total_after_coupon'].toFixed(2));

                        // data = '<option value="">Select Sub Model</option>';
                        // selected = '';
                        // $.each(response, function(index, val) {
                        //     console.log('ok');
                        //     data += '<option value=' + val.id + ' ' + selected + '>' + val.name + '</option>';
                        // });
                        // $('#sub_model_id').html(data);
                    });

            } else {}
        });


    </script>

@endsection

