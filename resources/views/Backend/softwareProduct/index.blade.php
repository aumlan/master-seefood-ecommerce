@extends('layouts.backend.app')
@push('meta')
@endpush
@section('title', 'Dashboard')
@push('pagecss')
    <script src="https://cdn.tiny.cloud/1/4v9qs4xphj2l9euoe90il4igrk2idwti1xps8h6zac4svef4/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backendAsset/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="{{ asset('backendAsset/assets/css/image-uploader.min.css') }}">

@endpush
@push('css')
@endpush
@section('breadcrumb')
@endsection
@section('content')
    <form action="{{ route('admin.product.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h6>Add New Software Product</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>Image</h5>
                                <div class="input-images-1" style="padding-top: .5rem;"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="name" id="product_name" placeholder="Product Name"
                                        class="form-control">
                                    <input type="hidden" name="product_type" value="software">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="product_name">Product Description</label>
                                    <textarea rows="15" name="content" class="form-control my-editor"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <fieldset class="form-group">
                                    <label for="product_name">Product Short Description</label>
                                    <textarea class="form-control" name="short_description" id="basicTextarea" rows="3"
                                        placeholder="Short Description"></textarea>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Product Data
                    </div>
                    <div class="card-body">
                        <div class="nav-vertical">
                            <ul class="nav nav-tabs nav-left flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="baseVerticalLeft-tab1" data-toggle="tab"
                                        aria-controls="tabVerticalLeft1" href="#tabVerticalLeft1" role="tab"
                                        aria-selected="true"><i class="fa fa-wrench"></i>&nbsp;General</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel"
                                    aria-labelledby="baseVerticalLeft-tab1">
                                    <label for="product_name">Price (AED)</label>
                                    <div class="form-group">
                                        <div class="row d-flex">
                                            <div class="col-md-4" >
                                                <input class="form-control" type="number" id="sale_price_aed" name="sales_price_aed"
                                                                          placeholder="AED د.إ"></div>
                                            <div class="col-md-4" >
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                    <input class="form-control" type="text" name="sales_price" id="sale_price_dollar"
                                                           placeholder="Doller $" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4" >
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">€</span>
                                                    <input class="form-control" type="text" name="sales_price_euro" id="sale_price_euro"
                                                           placeholder="Euro €" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="product_name">SKU</label>
                                        <input class="form-control" type="text" name="sku" id="product_name" placeholder="SKU"
                                               >
                                    </div>
                                    <div class="form-group">
                                        <label for="product_name">Stock status</label>
                                        <select name="stock_status">
                                            <option value="In_stock">In Stock</option>
                                            <option value="out_of_stock">Out of stock</option>
                                            <option value="on_backorder">On backorder</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Product Qty</label>
                                        <input class="form-control" type="text" name="productQty" id="qty" placeholder="Qty">
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel"
                                    aria-labelledby="baseVerticalLeft-tab2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-xl-5 col-lg-4">

                <div class="card">
                    <div class="card-header">
                        Product Showing
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="radio" name="product_showing" value="Special Offers"
                                        class="form-check-input" id="featured_product">
                                    <label class="form-check-label" for="Special_Offers">Special Offers</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="radio" name="product_showing" value="Best Selling Product"
                                        class="form-check-input" id="featured_product">
                                    <label class="form-check-label" for="featured_product">Best Selling Product</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="radio" name="product_showing" value="New Arrival"
                                        class="form-check-input" id="featured_product">
                                    <label class="form-check-label" for="featured_product">New Arrival</label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="radio" name="product_showing" value="Free Express Shipping"
                                        class="form-check-input" id="featured_product">
                                    <label class="form-check-label" for="featured_product">Free Express Shipping</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Software
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_id">Select Manufactures</label>
                            <select class="select2 form-control" name="category_id" id="category_id">
                                <option value="">Select Manufactures</option>
                                @foreach ($softwares as $software)
                                    <option value="{{ $software->id }}">{{ $software->name }}</option>
                                @endforeach
                            </select>
                        </div>

{{--                        <div class="form-group">--}}
{{--                            <label for="manufacture_id">Select Manufactures</label>--}}
{{--                            <select class="select2 form-control" name="manufacture_id" id="manufacture_id">--}}
{{--                                <option value="">Select Manufacture</option>--}}
{{--                                @foreach ($manufactures as $manufacture)--}}
{{--                                    <option value="{{ $manufacture->id }}">{{ $manufacture->name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('pagejs')
@endpush
@push('js')
    <script src="{{ asset('backendAsset/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('backendAsset/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>

    <!-- resource source  -->
    <!-- https://www.codehim.com/text-input/jquery-multiple-image-upload-with-preview-and-delete/#google_vignette -->
    <script src="{{ asset('backendAsset/assets/js/image-uploader.min.js') }}"></script>
    <script>
        $('.input-images-1').imageUploader();
    </script>
    <script>
        (function(window, document, $) {
            'use strict';

            // Basic Select2 select
            $(".select2").select2({
                dropdownAutoWidth: true,
                width: '100%'
            });
        });


        $('#sale_price_aed').keyup(function() {
            let aed_input = $('#sale_price_aed').val();
            let dollar_currency = {{ $currency->dollar }};
            let euro_currency = {{ $currency->euro }};

            // alert(dollar_currency + 'hh' + euro_currency);

            let dollar = parseFloat((aed_input * dollar_currency) + ((5/100) * (aed_input * dollar_currency))).toFixed(2) ;
            let euro = parseFloat((aed_input * euro_currency) + ((5/100) * (aed_input * euro_currency))).toFixed(2);

            $('#sale_price_dollar').val(dollar);
            $('#sale_price_euro').val(euro);
        });
    </script>

    <script>
        var editor_config = {
            path_absolute: "/",
            selector: 'textarea.my-editor',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link media",
            file_picker_callback: function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                    'body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endpush
