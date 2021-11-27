@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>Carts</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')

    <div class="page-content">
        <div class="container pt-5">


            <form action="{{ route('place_order') }}" method="POST" >
                @csrf
                <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                <div class="row mb-9">
                    <div class="col-lg-7 pr-lg-4 mb-4 border-radius ">
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
                    <div class="col-lg-5 mb-4 sticky-sidebar-wrapper border-radius px-3 py-4">

                        <div class="col-md-12 order-md-12 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill">{{ count($carts) }}</span>
                            </h4>
                            <ul class="list-group mb-3">

                                @foreach($carts as $item)
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div style="width: 70%">
                                            <span class="my-0 text-md-center">{{ $item->name }}</span><br/>
                                            <small class="text-muted">Quantity: <strong>{{ $item->qty }}</strong> </small>
                                        </div>
                                        <div>
                                            <span class="text-muted"><strong>AED &nbsp; {{ $item->qty * $item->price  }} </strong></span>
                                        </div>

                                    </li>
                                @endforeach
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="font-weight-bold">Total </span>
                                    <strong>AED &nbsp; <span id="after_coupon"> {{ $sub_total }} </span>  </strong>
                                </li>
                            </ul>


                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Promo code" id="coupon_value">
                                    <div class="input-group-append">
                                        <input type="hidden" class="form-control" name="after_coupon_total" id="after_coupon_total" placeholder="Promo code" value={{ $sub_total }} >
                                        <button id="redeem_coupon"  class=" button-68">Redeem</button>
                                    </div>
                                </div>


                            <br/>

                                @csrf
{{--                                <div class=" mb-2">--}}
{{--                                    <div id="paypal-button-container">--}}

{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="input-group">

                                    <button type="submit" class="button-68 w-100" role="button">Place Order</button>

                                </div>

                        </div>
                </div>
        </div>
        </form>


    </div>
    </div>


@endsection
@section('js')

{{--    <script src="https://www.paypal.com/sdk/js?client-id=AeLMACszi393bXFxPRiHoJx50gZAoEqPwUPTm4gVOlpFxH8qNAsxTihWEA_Vizg854-xvBBGMMVUE8Kg"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.</script>--}}

{{--    <script>--}}
{{--        paypal.Buttons({--}}
{{--            createOrder: function(data, actions) {--}}
{{--                // This function sets up the details of the transaction, including the amount and line item details.--}}
{{--                return actions.order.create({--}}
{{--                    purchase_units: [{--}}
{{--                        amount: {--}}
{{--                            value: '{{ $sub_total }}'--}}
{{--                        }--}}
{{--                    }]--}}
{{--                });--}}
{{--            },--}}
{{--            onApprove: function(data, actions) {--}}
{{--                // This function captures the funds from the transaction.--}}
{{--                return actions.order.capture().then(function(details) {--}}
{{--                    // This function shows a transaction success message to your buyer.--}}
{{--                    alert('Transaction completed by ' + details.payer.name.given_name);--}}
{{--                    console.log(details);--}}
{{--                });--}}
{{--            }--}}
{{--        }).render('#paypal-button-container');--}}
{{--        //This function displays Smart Payment Buttons on your web page.--}}
{{--    </script>--}}


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

                        $('#after_coupon').text(response['total_after_coupon'].toFixed(2));
                        $('#after_coupon_total').val(response['total_after_coupon'].toFixed(2));

                        if (response['message'] == 1){
                            toastr.success('Coupon Redeemed!');
                        }else{
                            toastr.error('Invalid Coupon Code');
                        }

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
