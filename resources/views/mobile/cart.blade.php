@extends('layouts.frontend.mobile.master')
@push('css')

@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="mobile_cart_page">
        <div class="mobile_cart_list">
            @if (count($carts) > 0)
                @foreach ($carts as $product)
                    <div class="mobile_cart_item">
                        <div class="cart_image">
                            <a href="{{ route('product.remove.to.cart', $product->rowId) }}">
                                <div class="cart_remove">
                                    <ion-icon name="trash-outline"></ion-icon>
                                </div>
                            </a>
                            @if ($product->options->has('image'))
                                <img src="{{ thumbnail($product->options->image) }}" alt="" srcset="">
                            @endif

                        </div>
                        <div style="width: 50%">
                            <a style="color: #000" class="d-flex align-items-center"
                               href="{{ route('product.details', [$product->id, $product->options->slug]) }}">
                                <div class="cart_info">
                                    <p class="product_name">{{ $product->name }}</p>
                                    <p class="productPrice"> {{ $product->price }} AED</p>
                                    <p >Size: <strong> {{ $product->options->size }} </strong></p>
                                    <p >Color: <strong> {{ $product->options->color }} </strong></p>
                                    <p >Quantity: <strong> {{ $product->qty }} </strong></p>
                                </div>
                            </a>
                        </div>

{{--                        <div class="product_count">--}}
{{--                            <button class="count_btn"--}}
{{--                                onclick="addToCartMinus({{ $product->id }},'{{ $product->rowId }}')"--}}
{{--                                type="button">-</button>--}}
{{--                            <input type="number" class="cart_qty{{ $product->id }}" min="1" value="{{ $product->qty }}">--}}
{{--                            <button class="count_btn" onclick="addToCartPlus({{ $product->id }})"--}}
{{--                                type="button">+</button>--}}

{{--                            <input class="quantity__input cart_qty{{ $product->id }} qtyInput"--}}
{{--                                   value="{{ $product->qty }}" min="1"--}}
{{--                                   name="qtyInput"--}}
{{--                                   idd={{ $product->id }} rowID= {{ $product->rowId }}>--}}


{{--                        </div>--}}
                    </div>
                @endforeach
                <br>
                <div class="car_empty text-right">
                    <a href="{{ route('product_cart.empty') }}" class="btn"
                        style="padding:5px 10px;font-size:12px;background-color: #26994fd4">Cart Empty</a>
                </div>
            @else
                <div class="cart_empty d-flex align-items-center justify-content-center" style="height: 80vh">
                    <h5>Your Cart Is Empty <a href="{{ url('/') }}">Continue Shoping</a></h5>
                </div>
            @endif
        </div>
    </div>
    @if (count($carts) > 0)
        <div class="proccedToCheckOut">
            <div class="subTotalPrice font-weight-bold">
                <span>Total : </span><span class="cart_total_price">{{ $product->total() }} AED</span>
            </div>
            <div class="TextCheckOut">
{{--                <a href="#">Procced To Check Out</a>--}}
                <a href="{{ route('product_cart.checkout')}}" class="button-68"><i class="fa fa-angle-right"></i>  Checkout</a>
            </div>
        </div>
    @endif
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $(document).on('keyup', '.qtyInput', function () {
                let qty = $(this).val();
                // $(this).attr('id');
                let productID = $(this).attr('idd') ;
                let rowID = $(this).attr('rowID') ;
                let subTotal = $('.cart_price_subtotal' + productID);
                console.log('productID:  '+ productID);
                console.log('qty: '+ qty);
                console.log('rowID: '+ rowID);

                $.ajax({
                    type:'get',
                    url:'/product/add/to/cart/direct/' + productID +'/'+ qty +'/'+ rowID,
                    success:function(data) {
                        console.log(data)
                        $('.cart_price_subtotal' + productID).text(data.subtotal + " {{ strtoupper($currencies->selected_currency)  }}" );
                        TotalCart();
                        toastr.success('Cart Updated');
                    }
                });
            })
        });
    </script>
@endsection
