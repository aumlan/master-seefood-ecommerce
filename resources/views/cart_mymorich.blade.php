@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>Carts</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')

    <!-- breadcrumb Area Start-->
    <section class="breadcrumb-area" style="background: #fff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <nav>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb Area End -->



    @if (count($carts) > 0)
        <!-- cart area start -->
        <div class="cart-area pd-bottom-65">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    <th >Image</th>
                                    <th >Product</th>
                                    <th >Price</th>
                                    <th >Size</th>
                                    <th >Color</th>
                                    <th >Quantity</th>
                                    <th class="text-left" >Total</th>
                                    <th ></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($carts as $product)
                                    <tr>
                                        <td class="cart_product">
                                            @if ($product->options->has('image'))
                                                <img src="{{ thumbnail($product->options->image) }}" alt="" srcset="" style="width: 100px">
                                            @endif
                                        </td>
                                        <td class="item-name">
                                            <a class="d-flex align-items-center"
                                               href="{{ route('product.details', [$product->id, $product->options->slug]) }}">
                                                <div class="cart_info">
                                                    <span>{{ $product->name }}</span>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="cart_price">
                                                {{ $product->price }} AED
                                            </div>
                                        </td>
                                        <td>

                                                {{ $product->options->size }}

                                        </td>
                                        <td>

                                                {{ $product->options->color }}

                                        </td>
                                        <td>
                                            <div class="cart_qty ">
                                                <input style="width: 50px" type="number" class="quantity__input cart_qty{{ $product->id }} qtyInput"
                                                       value="{{ $product->qty }}" min="1"
                                                       name="qtyInput"
                                                       idd={{ $product->id }} rowID= {{ $product->rowId }}
                                                >


                                            </div>

                                        </td>
                                        <td>
                                            <div class="cart_price cart_price_subtotal{{ $product->id }}">

                                                {{ $product->subtotal() }} AED

                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('product.remove.to.cart',$product->rowId)}}">
                                                <i class="la la-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot class="thead-light">
                                <tr>
                                    <th ></th>
                                    <th ></th>
                                    <th ></th>
                                    <th ></th>
                                    <th scope="col">
                                        <a href="{{ route('product_cart.checkout')}}" class="button-68 p-2"><i class="fa fa-angle-right"></i>  PROCEED TO CHECKOUT</a>
                                    </th>
                                    <th scope="col" class="text-center">Subtotal</th>
                                    <th scope="col" class="cart_total_price">
                                        {{ $product->total() }} AED
                                    </th>
                                    <th >

                                    </th>

                                </tr>
                                </tfoot>
                            </table>
                        </div>
{{--                        <div class="table-btn">--}}
{{--                            <input class="code-input single-input text-center" placeholder="Promotion Code" type="password">--}}
{{--                            <a class="btn btn-black" href="#">APPLY</a>--}}
{{--                            <a class="btn btn-border float-sm-right" href="#">Update Cart</a>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-7">--}}
{{--                                <div class="order-summary">--}}
{{--                                    <h5 class="title">ORDER SUMMARY</h5>--}}
{{--                                    <div class="subtotal">--}}
{{--                                        <span>Subtotal:</span>--}}
{{--                                        <span class="float-right">$30.00</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="subtotal">--}}
{{--                                        <span>Shipping Cost:</span>--}}
{{--                                        <span class="float-right">$10.00</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="total">--}}
{{--                                        <span>Total:</span>--}}
{{--                                        <span class="float-right">$40.00</span>--}}
{{--                                    </div>--}}
{{--                                    <a class="btn btn-main w-100" href="checkout.html">PROCEED TO CHECKOUT</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- cart area end -->
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
