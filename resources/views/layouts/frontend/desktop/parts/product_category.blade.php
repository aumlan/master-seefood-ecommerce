<!-- product-Area Start-->
<section class="product-area-2 pd-top-60 pd-bottom-35">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h5>New Arrival</h5>
                </div>
                @foreach ($new_arrivals as $prd)
                    <div class="single-product-wrap list-product-wrap">
                        <div class="thumb">
                            @if (count($prd->productImage) > 0)
                                <img src="{{ thumbnail($prd->productImage[0]->image) }}" alt="img" style="object-fit: contain;width: 100%;height: 100%;">
                            @endif
                        </div>
                        <div class="wrap-details">
                            <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                            <h6><a href="{{route('product.details',[$prd->id,$prd->slug])}}">{{$prd->name}}</a></h6>
                            {{-- <div class="star-rating">
                                <span><i class="la la-star"></i></span>
                                <span><i class="la la-star"></i></span>
                                <span><i class="la la-star"></i></span>
                                <span><i class="la la-star"></i></span>
                                <span><i class="la la-star"></i></span>
                            </div> --}}
                            <span class="price">${{$prd->sales_price}}</span>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h5>Best Selling Product</h5>
                </div>
                @foreach ($best_selling as $prd)

                        <div class="single-product-wrap list-product-wrap">
                            <div class="thumb">
                                @if (count($prd->productImage) > 0)
                                    <img src="{{ thumbnail($prd->productImage[0]->image) }}" alt="img"
                                         style="object-fit: contain;width: 100%;height: 100%;">
                                @endif
                            </div>
                            <div class="wrap-details">
                                <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                                <h6><a href="{{route('product.details',[$prd->id,$prd->slug])}}">{{$prd->name}}</a></h6>
                                {{-- <div class="star-rating">
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                </div> --}}
                                <span class="price">${{$prd->sales_price}}</span>
                            </div>
                        </div>

                @endforeach

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h5>Special Offers</h5>
                </div>
                @foreach ($Special_offers as $prd)
                        <div class="single-product-wrap list-product-wrap">
                            <div class="thumb">
                                @if (count($prd->productImage) > 0)
                                    <img src="{{ thumbnail($prd->productImage[0]->image) }}" alt="img" style="object-fit: contain;width: 100%;height: 100%;">
                                @endif
                            </div>
                            <div class="wrap-details">
                                <span class="categories">{{ $prd->category ? $prd->category->name : '' }}</span>
                                <h6><a href="{{route('product.details',[$prd->id,$prd->slug])}}">{{$prd->name}}</a></h6>
                                {{-- <div class="star-rating">
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                    <span><i class="la la-star"></i></span>
                                </div> --}}
                                <span class="price">${{$prd->sales_price}}</span>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- product-Area End-->
