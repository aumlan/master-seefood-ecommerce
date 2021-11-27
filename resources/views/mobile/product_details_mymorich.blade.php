@extends('layouts.frontend.mobile.master')
@section('meta')
    <title>{{ $product->name }}</title>
    <meta property="og:title" content="{{ $product->name }}" />
    <meta property="og:description" content="{{ $product->general_dsc }}" />
    @if (count($product->productImage) > 0)
        <meta property="og:image" content="{{ thumbnail($product->productImage[0]->image) }}" />
    @endif
@endsection
@push('css')
    <style>
        .table td,
        .table th {
            padding: 0.10rem
        }

        .template_btn_lg_green {
            background-color: #49DE82;
            color: #fff;
            font-weight: bold;
            width: 100%;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            padding: 10px 10px;
            cursor: pointer;
            border-radius: 5px
        }

    </style>
@endpush
@section('content')

{{--    <div class="owner_contacts" onclick="addToCart({{ $product->id }})">--}}
{{--        <div class="theme_outline_btn my-3">--}}
{{--            <a href="#"  style="font-size: 17px">--}}
{{--                <i class="fas fa-cart-plus"></i>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="slider_wrapper">
        @if (count($product->productImage) > 0)
            <div class="details_page_slider owl-carousel" id="detailsPageSlider">
                @foreach ($product->productImage as $image)
                    <div class="sliderImage">
                        <img src="{{ mediumImage($image->image) }}" alt="" srcset="">
                    </div>
                @endforeach
            </div>
        @endif
{{--        <div class="share_favorite">--}}
{{--            <div class="share_favorite_icon" onclick="addToCart({{ $product->id }})">--}}
{{--                <ion-icon name="cart-outline"></ion-icon>--}}
{{--            </div>--}}
{{--            <div class="share_favorite_icon share_btn">--}}
{{--                <ion-icon name="share-social-outline"></ion-icon>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="back_button" onclick="backScreen()">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </div>
    </div>

    <div class="container">
        <div class="product_description">
            {{--                        <nav>--}}
            {{--                            <ol class="breadcrumb">--}}
            {{--                                <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
            {{--                                <li class="breadcrumb-item"><a href="#">Products</a></li>--}}
            {{--                                <li class="breadcrumb-item active">Accessories</li>--}}
            {{--                            </ol>--}}
            {{--                        </nav>--}}
            <div class="product_name">{{ $product->name }}</div>
            {{--                        <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>--}}
            <div> <span class="product_price mr-2">AED {{ $product->sales_price_aed }}</span> </div>
            <div> <span class="product_saved">Available: </span>
                @if( $product->stock_status === 'In_stock' )
                    <span style='color:green; font-size: 13px;font-weight: bold'> In Stock</span>
                @else
                    <span style='color:red; font-size: 13px;font-weight: bold'> Out Of Stock</span>
                @endif

            </div>
            <hr class="singleline my-3">
            <div>

                <ul class="product_details_ui pl-4 mt-3">

                    <li class="font-weight-bold">{{ $product->category->name  }} </li>
                    @if($product->short_description)
                        <li>{{ $product->short_description }}</li>
                    @endif

                    <li>
                        <div class="product-color">
                            <span class="sub-title">Size: &nbsp;</span>
                            <select class="select_option" name="size" id="size" style="width: 40%;">
                                @foreach ($product->product_attr as $atrr)
                                    @if (isSize($atrr->configure_attribute_id)!==null)
                                        @php
                                            $getSize =  isSize($atrr->configure_attribute_id)
                                        @endphp
                                        <option value="{{$getSize->name}}" >{{$getSize->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </li>
                    <li>
                        <div class="product-color">
                            <span class="sub-title">Color:</span>
                            <select class="select_option" name="color" id="color" style="width: 40%;">
                                @foreach ($product->product_attr as $atrr)
                                    @if (isColor($atrr->configure_attribute_id)!==null)
                                        @php
                                            $getColor =  isColor($atrr->configure_attribute_id);
                                        @endphp
                                        <option value="{{$getColor->name}}" >{{$getColor->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </li>

                </ul>
            </div>



            <div >
                <div clas="col-lg-6" style="margin-bottom: 10px; ">
                    <div class="product-quantity">

                        <form>
                            <span class="sub-title">Qty:</span>
                            <div class="quantity buttons_added" style="height: 50px">
                                <input type="button" value="-" class="minus">
                                <input type="number" class="input-text qty text" step="1" min="1" max="10000"
                                       name="quantity" value="1" id="quantity_input" style="margin: 0 !important;">
                                <input type="button" value="+" class="plus">
                            </div>
                        </form>
                    </div>

{{--                    <div class="product_quantity">--}}
{{--                        <span>Quantity: </span>--}}
{{--                        <input id="quantity_input" type="number" pattern="[0-9]*" value="1" min="1">--}}
{{--                    </div>--}}
                </div>



                <div clas="col-lg-5">
                    <button type="button" class="button-68" onclick="addToCart({{ $product->id }},
                        document.getElementById('quantity_input').value,
                        document.getElementById('size').value,
                        document.getElementById('color').value)"
                        {{ $product->stock_status == 'In_stock' ? '' : 'disabled' }}
                    >
                        <i class="fas fa-cart-plus"></i>
                        Add to Cart
                    </button>
                    {{--                                <div class="product_fav"><i class="fas fa-heart"></i></div>--}}
                </div>
            </div>
        </div>

        <hr class="singleline my-4">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-11 ">
                <nav>
                    <div class="mb-3">
                        <span style="border-bottom: 1px solid #323030;color: #323030; font-size: 20px;padding-bottom: 5px;font-weight: 600;"> Description</span>

                    </div>
                </nav>
                <div >
                    <div>
                        <div class="text-justify ">
                            {!! $product->description !!}
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>









@endsection
@push('js')
<script>
    String.prototype.getDecimals || (String.prototype.getDecimals = function() {
        var a = this
            , b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
        return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
    })
    jQuery(document).on("click", ".plus, .minus", function() {
        var a = jQuery(this).closest(".quantity").find(".qty")
            , b = parseFloat(a.val())
            , c = parseFloat(a.attr("max"))
            , d = parseFloat(a.attr("min"))
            , e = a.attr("step");
        b && "" !== b && "NaN" !== b || (b = 0),
        "" !== c && "NaN" !== c || (c = ""),
        "" !== d && "NaN" !== d || (d = 0),
        "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1),
            jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())),
            a.trigger("change")
    });
</script>
@endpush
