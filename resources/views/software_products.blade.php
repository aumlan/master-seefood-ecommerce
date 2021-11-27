@extends('layouts.frontend.desktop.master')
@section('meta')
    <title>{{ $software->name }}</title>
    <meta property="og:title" content="{{ $software->name }}" />

        <meta property="og:image" content="{{ thumbnail($software->icon) }}" />

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
                    <span>{{ $software->name}}</span>
                </a>&nbsp;


            </div>
        </div>
    </div>

    @if (count($products) > 0)


        <div class="container">
            <div class="row my-5">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <table class="table table-hover" id="software_product_table">
                            <thead style="background: #ececec;">
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>SKU</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                    <img  src="{{ thumbnail($product->productImage[0]->image) }}" alt="Card image cap" height="100px" width="100px">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if($currencies->selected_currency == 'usd')
                                        <span>$ {{ $product->sales_price }}</span>
                                    @else
                                        <span>€ {{ $product->sales_price_euro }}</span>
                                    @endif
                                </td>
                                <td>{{ $product->sku  }}</td>
                                <td>
                                    <button class="btn btn-warning" onclick="addToCart({{ $product->id }}, 1)">
                                        Add To Cart
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    @else
        <div class="container text-center" style="min-height: 40vh">
            <h3> Results Page </h3>

            <div style="background-color: #fcfcfc;min-height: 160px;text-align: center;width: 100%;padding-top: 65px">
                <h5>No Products in This Software. Look at <a href="/">other items in our store</a> </h5>
            </div>

        </div>
    @endif

@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#software_product_table').DataTable();
    } );
</script>
@endsection
