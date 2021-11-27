@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Product Show ')
@push('pagecss')
@endpush
@push('css')
@endpush
@section('breadcrumb')
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="top-section px-2 mt-2">
                    <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-sm btn-primary"><i class="feather icon-edit"></i></a>
                    <a href="{{route('admin.product.list')}}" class="btn btn-sm btn-success"><i class="fa fa-th-list"></i></a>
                </div>
                <div class="card-body">
                    <div class="row mb-5 mt-2">
                        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                            <!-- <div class="d-flex align-items-center justify-content-center">
                                <img src="../../../app-assets/images/elements/macbook-pro.png" class="img-fluid" alt="product image">
                            </div> -->
                            <div id="carousel-keyboard" class="carousel slide" data-keyboard="true">
                                <ol class="carousel-indicators">
                                    @foreach($product->productImage as $key=>$image)
                                        <li data-target="#carousel-keyboard" data-slide-to="{{$key}}" class=" bg-dark {{($key=0)?active:''}}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    @foreach($product->productImage as $key=>$image)
                                        <div class="carousel-item {{($key==0)?'active':''}}">
                                            <img class="img-fluid" src="{{mediumImage($image->image)}}" style="width:320px;height:300px;object-fit:cover" alt="First slide">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carousel-keyboard" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-keyboard" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h5>{{$product->name}}
                            </h5>
                            <p class="text-muted">by {{$product->brand?$product->brand->name:''}}</p>
                            <p>Category - <span class="text-success"><a href="{{route('admin.product.category',$product->category_id)}}" class="text-success">{{$product->category?$product->category->name:''}}</a></span></p>
                            <div class="ecommerce-details-price d-flex flex-wrap">

                                <p class="text-primary font-medium-3 mr-1 mb-0">৳{{$product->sales_price}}&nbsp;/&nbsp;<del>৳{{$product->regular_price}}</del></p>
                                <!-- <span class="pl-1 font-medium-3 border-left">
                                    <i class="feather icon-star text-warning"></i>
                                    <i class="feather icon-star text-warning"></i>
                                    <i class="feather icon-star text-warning"></i>
                                    <i class="feather icon-star text-warning"></i>
                                    <i class="feather icon-star text-secondary"></i>
                                </span>
                                <span class="ml-50 text-dark font-medium-1">424 ratings</span> -->
                            </div>
                            <hr>
                            <p>{{$product->short_description}}</p>
                            <hr>
                            <p>Available - <span class="text-success">{{$product->stock_status}}</span></p>
                            <!-- <div class="d-flex flex-column flex-sm-row">
                                <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-shopping-cart mr-25"></i>ADD TO CART</button>
                                <button class="btn btn-outline-danger"><i class="feather icon-heart mr-25"></i>WISHLIST</button>
                            </div>
                            <hr> -->
                            <!-- <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i class="feather icon-youtube"></i></button>
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button> -->
                        </div>
                    </div>
                    <div class="px-2">
                        <h5>{{$product->name}}</h5>
                        <br>
                        {!!$product->description!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('pagejs')
@endpush
@push('js')

@endpush
