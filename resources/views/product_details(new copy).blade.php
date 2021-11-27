@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>{{ $product->name }}</title>
    <meta property="og:title" content="{{ $product->name }}" />
    <meta property="og:description" content="{!! $product->short_description !!}" />
    @if (count($product->productImage) > 0)
        <meta property="og:image" content="{{ thumbnail($product->productImage[0]->image) }}" />
    @endif
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/fontawesome-all.min.css') }}">
@endpush
@section('content')
    <div class="container">
        <div class="car_category">
            <div class="category_item">
                <a href={{ route('welcome') }}>
                    <span>Home</span>
                </a>&nbsp;&nbsp;
                <span class="template-text-black">
                    <i class="fas fa-long-arrow-alt-right"></i>
                </span>
                <a href={{ route('welcome') }}>
                    <span>{{ $product->category->name }}</span>
                </a>&nbsp;
                <span class="template-text-black">
                    <i class="fas fa-long-arrow-alt-right"></i>
                </span>
                <a href={{ route('welcome') }}>
                    <span>{{ $product->name }}</span>
                </a>&nbsp;

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
{{--                <div id="slider_custom">--}}
{{--                    <ul>--}}
{{--                        @if (count($product->productImage) > 0)--}}
{{--                            @foreach ($product->productImage as $image)--}}
{{--                        <li><img style="width: 100%; height: 35vh;background-color: #000;object-fit: contain;" src={{ mediumImage($image->image) }}></li>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
{{--                    </ul>--}}
{{--                    <a href="#" id="sliderNext">></a>--}}
{{--                    <a href="#" id="sliderPrev"><</a>--}}
{{--                </div>--}}


{{--                <div class="show" href="http://127.0.0.1:8000/images/products/medium_image/2-1635549431-617c80f75743c.webp">--}}
                <div class="show-slider" href={{ mediumImage($product->productImage[0]->image) }}>
{{--                    <img src="http://127.0.0.1:8000/images/products/medium_image/2-1635549431-617c80f75743c.webp" id="show-img">--}}
                    <img src={{ mediumImage($product->productImage[0]->image) }} id="show-img">
                </div>

                <!-- Secondary carousel image thumbnail gallery -->

                <div class="small-img">

                    <span class="icon-left" alt="d" id="prev-img"><ion-icon name="arrow-back-circle-outline"></ion-icon></span>
{{--                    <img src="images/next-icon.png" class="icon-left" alt="d" id="prev-img">--}}
                    <div class="small-container">
                        <div id="small-img-roll">
                            @foreach ($product->productImage as $image)
                                <img src={{ mediumImage($image->image) }} class="show-small-img" alt="">
                            @endforeach
                        </div>
                    </div>
{{--                    <img src="images/next-icon.png" class="icon-right" alt="d" id="next-img">--}}
                    <span class="icon-right" alt="d" id="next-img"><ion-icon name="arrow-forward-circle-outline" ></ion-icon></span>
                </div>














{{--                @if (count($product->productSpecification) > 0)--}}
{{--                    <div class="item_overview">--}}
{{--                        <div class="item_overview_title">--}}
{{--                            <h5>Product Specs</h5>--}}
{{--                        </div>--}}
{{--                        <table class="table">--}}
{{--                            <tbody>--}}
{{--                                @foreach ($product->productSpecification as $specs)--}}
{{--                                    <tr>--}}
{{--                                        <th>{{$specs->attribute_name}}</th>--}}
{{--                                        <td>{{$specs->attribute_description}}</td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                @endif--}}
            </div>
            <div class="col-lg-6">
                <div class="col-lg-6 order-3">
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
                        <div> <span class="product_price mr-2">$ {{ $product->sales_price }}</span>  </div>
                        <div> <span class="product_saved">Available: </span>
                            @if( $product->stock_status === 'In_stock' )
                                <span style='color:green; font-size: 13px;font-weight: bold'> In Stock</span>
                            @else
                                <span style='color:red; font-size: 13px;font-weight: bold'> Out Of Stock</span>
                            @endif

                        </div>
                        <hr class="singleline">
                        <div>
                            <ul class="product_details_ui">
                                <li> SKU: <strong>{{ $product->sku  }}</strong> </li>
                                <li> Type: <strong>  {{ $product->type  }} </strong> </li>
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
                                    <input id="quantity_input" value="1" min="1" >
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
                </div>
{{--                <div class="seller_contact">--}}
{{--                    <a href="#"  onclick="addToCart({{ $product->id }})">--}}
{{--                        <div class="template_btn_lg_danger">Add To Cart</div>--}}
{{--                    </a>--}}


{{--                    <a href="https://wa.me/00971505781258?text=Hi" target="_blank">--}}
{{--                        <div class=" mt-3 round template_btn_lg_green">--}}
{{--                            <ion-icon name="logo-whatsapp"></ion-icon> &nbsp;&nbsp;&nbsp;WHATSAPP--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <br>--}}
{{--                <div class="sharethis-inline-share-buttons"></div>--}}

            </div>
        </div>
        <hr class="singleline my-5">
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
                            <div class="text-justify p-4">
                                {{ $product->description }}
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="text-justify p-4">
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
@section('js')
    <script>
        $(document).ready(function() {
            $(function(){

                var slider_custom = $('#slider_custom');
                var slider_customWrap = $('#slider_custom ul');
                var slider_customImg = $('#slider_custom ul li');
                var prevBtm = $('#sliderPrev');
                var nextBtm = $('#sliderNext');
                var length = slider_customImg.length;
                var width = slider_customImg.width();
                var thumbWidth = width/length;

                slider_customWrap.width(width*(length+2));

                //Set up
                slider_custom.after('<div id="' + 'pager' + '"></div>');
                var dataVal = 1;
                slider_customImg.each(
                    function(){
                        $(this).attr('data-img',dataVal);
                        $('#pager').append('<a data-img="' + dataVal + '"><img src=' + $('img', this).attr('src') + ' width=' + thumbWidth + '></a>');
                        dataVal++;
                    });
                //Copy 2 images and put them in the front and at the end
                $('#slider_custom ul li:first-child').clone().appendTo('#slider_custom ul');
                $('#slider_custom ul li:nth-child(' + length + ')').clone().prependTo('#slider_custom ul');

                slider_customWrap.css('margin-left', - width);
                $('#slider_custom ul li:nth-child(2)').addClass('active');

                var imgPos = pagerPos = $('#slider_custom ul li.active').attr('data-img');
                $('#pager a:nth-child(' +pagerPos+ ')').addClass('active');


                //Click on Pager
                $('#pager a').on('click', function() {
                    pagerPos = $(this).attr('data-img');
                    $('#pager a.active').removeClass('active');
                    $(this).addClass('active');

                    if (pagerPos > imgPos) {
                        var movePx = width * (pagerPos - imgPos);
                        moveNext(movePx);
                    }

                    if (pagerPos < imgPos) {
                        var movePx = width * (imgPos - pagerPos);
                        movePrev(movePx);
                    }
                    return false;
                });

                //Click on Buttons
                nextBtm.on('click', function(){
                    moveNext(width);
                    return false;
                });

                prevBtm.on('click', function(){
                    movePrev(width);
                    return false;
                });

                //Function for pager active motion
                function pagerActive() {
                    pagerPos = imgPos;
                    $('#pager a.active').removeClass('active');
                    $('#pager a[data-img="' + pagerPos + '"]').addClass('active');
                }

                //Function for moveNext Button
                function moveNext(moveWidth) {
                    slider_customWrap.animate({
                        'margin-left': '-=' + moveWidth
                    }, 500, function() {
                        if (imgPos==length) {
                            imgPos=1;
                            slider_customWrap.css('margin-left', - width);
                        }
                        else if (pagerPos > imgPos) {
                            imgPos = pagerPos;
                        }
                        else {
                            imgPos++;
                        }
                        pagerActive();
                    });
                }

                //Function for movePrev Button
                function movePrev(moveWidth) {
                    slider_customWrap.animate({
                        'margin-left': '+=' + moveWidth
                    }, 500, function() {
                        if (imgPos==1) {
                            imgPos=length;
                            slider_customWrap.css('margin-left', -(width*length));
                        }
                        else if (pagerPos < imgPos) {
                            imgPos = pagerPos;
                        }
                        else {
                            imgPos--;
                        }
                        pagerActive();
                    });
                }

            });

            // $(".owl-carousel#single_slider_custom").owlCarousel({
            //     loop: true,
            //     margin: 0,
            //     items: 1,
            //     autoplay: true,
            //     autoplayTimeout: 2000,
            //     autoplayHoverPause: true,
            //     navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            //     nav: true,
            //     dots: false,
            //     responsive: {
            //         0: {
            //             items: 1
            //         },
            //         766: {
            //             items: 1
            //         },
            //         767: {
            //             items: 1
            //         },
            //         992: {
            //             items: 1
            //         }
            //     }
            // });
        });
    </script>
@endsection
