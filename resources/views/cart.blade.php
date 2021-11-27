@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>Carts</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    @if (count($carts) > 0)
        <div class="container mt-4">
            <div class="page_title">
                Your Shopping Cart
            </div>
            <div class="cart_items mt-2">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 45%;" scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $product)
                            <tr>
                                <td class="cart_product">

                                    @if ($product->options->has('image'))
                                        <img src="{{ thumbnail($product->options->image) }}" alt="" srcset="">
                                    @endif
                                    <a class="d-flex align-items-center"
                                        href="{{ route('product.details', [$product->id, $product->options->slug]) }}">
                                        <div class="cart_info">
                                            <h5>{{ $product->name }}</h5>
                                        </div>
                                    </a>
                                </td>

                                <td>
                                    <div class="cart_price">
                                        @if($currencies->selected_currency == 'usd')
                                            {{ $product->price }} {{ strtoupper($currencies->selected_currency)  }}
                                        @elseif($currencies->selected_currency == 'euro')
                                            {{ $product->sales_price_euro }} {{ strtoupper($currencies->selected_currency)  }}
                                        @endif


                                    </div>
                                </td>
                                <td>
                                    <div class="cart_qty quantity">
{{--                                        <button class="quantity__button"--}}
{{--                                            onclick="addToCartMinus({{ $product->id }},'{{ $product->rowId }}')">-</button>--}}
{{--                                        <input class="quantity__input cart_qty{{ $product->id }}" readonly type="number"--}}
{{--                                            name="qty" value="{{ $product->qty }}" min="1"--}}
{{--                                            aria-label="Quantity for Pencil eyeliner" id="cart_qty" data-index="1">--}}
{{--                                        <button class="quantity__button"--}}
{{--                                            onclick="addToCartPlus({{ $product->id }})">+</button>--}}

                                        <input class="quantity__input cart_qty{{ $product->id }} qtyInput"
                                               value="{{ $product->qty }}" min="1"
                                               name="qtyInput"
                                               idd={{ $product->id }} rowID= {{ $product->rowId }}>


                                    </div>
                                </td>
                                <td>
                                    <div class="cart_price cart_price_subtotal{{ $product->id }}">


                                            {{ $product->subtotal() }} {{ strtoupper($currencies->selected_currency)  }}


                                    </div>
                                </td>
                                <td>

                                        <a href="{{route('product.remove.to.cart',$product->rowId)}}">
                                            <div class="cart_remove">
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </div>
                                        </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="thead-light">
                        <tr>
                            <th ></th>

                            <th scope="col">
                                <a href="{{ route('product_cart.checkout')}}" class="btn btn-success"><i class="fa fa-angle-right"></i>  Checkout</a>
                            </th>
                            <th scope="col" class="text-center">Subtotal</th>
                            <th scope="col" class="cart_total_price">
                                {{ $product->total() }} {{ strtoupper($currencies->selected_currency)  }}
                            </th>
                            <th >
                                {{ strtoupper($currencies->selected_currency)  }}
                            </th>

                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    @else
        <div class="cart_empty d-flex align-items-center justify-content-center" style="height: 80vh">
            <h5>Your Cart Is Empty <a href="{{ url('/') }}">Continue Shoping</a></h5>
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
