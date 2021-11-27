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
{{--    <div class="details_page_dsc">--}}
{{--        <div class="details_page_price">--}}
{{--            <h5>AED {{ $product->sales_price }}</h5>--}}
{{--        </div>--}}
{{--        <div class="details_page_item_title">--}}
{{--            <h5>{{ $product->name }}--}}
{{--            </h5>--}}
{{--        </div>--}}
{{--        <div class="car_category">--}}
{{--            <div class="category_item">--}}
{{--                <a href="#">--}}
{{--                    <span>category</span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="posting_date">--}}
{{--            <p>{{ $product->updated_at->diffForHumans() }}</p>--}}
{{--        </div>--}}
{{--        <div class="contacts">--}}
{{--            <div class="single_contacts">--}}
{{--                <a href="#" class="btn btn-sm btn-primary" onclick="addToCart({{ $product->id }})">--}}
{{--                    <p>--}}
{{--                        Add To Cart--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="single_contacts">--}}
{{--                <a href="tel:0505781258" class="text-danger">--}}
{{--                    <p>--}}
{{--                        <ion-icon name="call-outline"></ion-icon> 0505781258--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="single_contacts">--}}
{{--                <a href="https://wa.me/+971505781258?text=Hi" target="_blank">--}}
{{--                    <div class=" mt-3 round template_btn_lg_green">--}}
{{--                        <ion-icon name="logo-whatsapp"></ion-icon> &nbsp;&nbsp;&nbsp;WHATSAPP--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <br>--}}
{{--            <div class="sharethis-inline-share-buttons"></div>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        <div class="details_section">--}}
{{--            <h5>Product Specs</h5>--}}
{{--            <div class="details_section_content">--}}
{{--                <table class="table">--}}
{{--                    <tbody>--}}
{{--                        @foreach ($product->productSpecification as $specs)--}}
{{--                            <tr>--}}
{{--                                <th>{{ $specs->attribute_name }}</th>--}}
{{--                                <td>{{ $specs->attribute_description }}</td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="details_section">--}}
{{--            <h5>Description</h5>--}}
{{--            <div class="details_section_content">--}}
{{--                <p>{!! $product->description !!}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

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
            <div> <span class="product_price mr-2">$ {{ $product->sales_price }}</span> </div>
            <div> <span class="product_saved">Available: </span>
                @if( $product->stock_status === 'In_stock' )
                    <span style='color:green; font-size: 13px;font-weight: bold'> In Stock</span>
                @else
                    <span style='color:red; font-size: 13px;font-weight: bold'> Out Of Stock</span>
                @endif

            </div>
            <hr class="singleline my-3">
            <div>
                <ul class="product_details_ui">
                    <li> SKU: <strong>{{ $product->sku  }}</strong> </li>
                    <li> Type: <strong> {{ $product->type  }}</strong> </li>
                </ul>
                <ul class="product_details_ui pl-4 mt-3">
                    <li class="font-weight-bold">{{ $product->category->name  }} </li>
                    <li>FCC ID: {{ $product->fcc_id }}</li>
                    <li>MODEL NO: {{ $product->model }}</li>
                    <li>IC: {{ $product->ic  }}</li>
                    <li>Transponder Chip: {{ $product->transponder_chip  }}</li>
                    <li>Frequency: {{ $product->frequency }}</li>
                    <li>Battery: {{ $product->battery }}</li>
                    <li>PN: {{ $product->pn }}</li>
                    <li>Keyless Go: {{ $product->keyless_go  }}</li>
                </ul>
            </div>
            <div class="mb-3"> <span class="product_price">$ {{ $product->sales_price }}</span> </div>

            <div class="d-flex">
                <div clas="col-lg-6" style="margin-right: 10px;">
                    <div class="product_quantity">
                        <span>Quantity: </span>
                        <input id="quantity_input" type="number" pattern="[0-9]*" value="1" min="1">
                        {{--                                    <div class="quantity_buttons">--}}
                        {{--                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>--}}
                        {{--                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>--}}
                        {{--                                    </div>--}}
                    </div>
                </div>
                <div clas="col-lg-5">
                    <button type="button" class="btn btn-primary shop-button" onclick="addToCart({{ $product->id }}, document.getElementById('quantity_input').value)"
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
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-right" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                        <a class="nav-item nav-link text-left" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Compatibility</a>
                    </div>
                </nav>
                <div class="tab-content " id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="text-justify ">
                            {{ $product->description }}
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="text-justify">
                            <table class="table table-bordered  table-hover">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Make</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Year</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Hyundai</td>
                                    <td>Elantra</td>
                                    <td>2019</td>
                                </tr>
                                <tr>
                                    <td>Hyundai</td>
                                    <td>Elantra</td>
                                    <td>2017</td>
                                </tr>
                                <tr>
                                    <td>Hyundai</td>
                                    <td>Elantra</td>
                                    <td>2015</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>









@endsection
@push('js')

@endpush
