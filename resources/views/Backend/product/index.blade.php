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
                        <h6>Add New Product</h6>
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
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" id="baseVerticalLeft-tab2" data-toggle="tab"--}}
{{--                                        aria-controls="tabVerticalLeft2" href="#tabVerticalLeft2" role="tab"--}}
{{--                                        aria-selected="false"><i class="fa fa-cog"></i>&nbsp;Status</a>--}}
{{--                                </li>--}}
                                <li class="nav-item">
                                    {{-- <a class="nav-link" id="baseVerticalLeft-tab3" data-toggle="tab" aria-controls="tabVerticalLeft3" href="#tabVerticalLeft3" role="tab" aria-selected="false"><i class="fa fa-list-ul"></i>&nbsp;Attributes</a> --}}
                                </li>
                                <li class="nav-item">
                                    {{-- <a class="nav-link" id="baseVerticalLeft-tab4" data-toggle="tab" aria-controls="tabVerticalLeft4" href="#tabVerticalLeft4" role="tab" aria-selected="false"><i class="fa fa-truck"></i>&nbsp;Shipping</a> --}}
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabVerticalLeft1" role="tabpanel"
                                    aria-labelledby="baseVerticalLeft-tab1">
                                    <label for="product_name">Regular Price (AED)</label>
                                    <div class="form-group">
                                        <div class="row d-flex">
                                            <div class="col-md-12" >
                                                <input class="form-control" type="number" id="sale_price_aed" name="sales_price_aed"
                                                                          placeholder="AED د.إ"></div>
                                        </div>
                                    </div>

                                    <label for="product_name">Discount Price (AED)</label>
                                    <div class="form-group">
                                        <div class="row d-flex">
                                            <div class="col-md-12" >
                                                <input class="form-control" type="number" id="discount_price" name="discount_price"
                                                       placeholder="AED د.إ"></div>
                                        </div>
                                    </div>

{{--                                    Dicount Price of Product--}}
{{--                                    <label for="product_name">Discount Price (AED)</label>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="row d-flex">--}}
{{--                                            <div class="col-md-4" >--}}
{{--                                                <input class="form-control" type="number" id="sale_price_aed" name="sales_price_aed"--}}
{{--                                                       placeholder="AED د.إ"></div>--}}
{{--                                            <div class="col-md-4" >--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <span class="input-group-text" id="basic-addon1">$</span>--}}
{{--                                                    <input class="form-control" type="text" name="sales_price" id="sale_price_dollar"--}}
{{--                                                           placeholder="Doller $" readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-4" >--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <span class="input-group-text" id="basic-addon1">€</span>--}}
{{--                                                    <input class="form-control" type="text" name="sales_price_euro" id="sale_price_euro"--}}
{{--                                                           placeholder="Euro €" readonly>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


{{--                                    <div class="form-group">--}}
{{--                                        <label for="product_name">Discount Price</label>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <div class="row d-flex">--}}
{{--                                                <div class="col-md-4" ><input class="form-control" type="text" name="discount_price" id="discount_price" placeholder="Discount Price"></div>--}}
{{--                                                <div class="col-md-4" ><input class="form-control" type="text" name="sales_price" id="sale_price"--}}
{{--                                                                              placeholder="Doller $" readonly></div>--}}
{{--                                                <div class="col-md-4" ><input class="form-control" type="text" name="sales_price_euro" id="sale_price_euro"--}}
{{--                                                                              placeholder="Euro €" readonly></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="product_name">Purchase Price</label>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <div class="row d-flex">--}}
{{--                                                <div class="col-md-4" ><input class="form-control" type="text" name="purchase_price" id="purchase_price" placeholder="Purchase Price"></div>--}}
{{--                                                <div class="col-md-4" ><input class="form-control" type="text" name="sales_price" id="sale_price"--}}
{{--                                                                              placeholder="Doller $" readonly></div>--}}
{{--                                                <div class="col-md-4" ><input class="form-control" type="text" name="sales_price_euro" id="sale_price_euro"--}}
{{--                                                                              placeholder="Euro €" readonly></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
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
                                    <div class="form-group">
                                        <label for="qty">Tax</label>
                                        <input class="form-control" type="number" name="tax" id="tax" placeholder="Tax">
                                    </div>

                                </div>
                                <div class="tab-pane" id="tabVerticalLeft2" role="tabpanel"
                                    aria-labelledby="baseVerticalLeft-tab2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        Type--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="category_id">Select Type</label>--}}
{{--                            <select class="select2 form-control" name="type" id="type" >--}}
{{--                                <option value="">Select Type</option>--}}
{{--                                <option value="gcc">GCC</option>--}}
{{--                                <option value="american">American</option>--}}
{{--                                <option value="japan">Japan</option>--}}

{{--                            </select>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}



            </div>
            <div class="col-xl-5 col-lg-4">

{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        Product Specs--}}
{{--                    </div>--}}
{{--                    <div class="card-body" id="more_box">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-5">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" name="specs_name[]" class="form-control" id="Manufacturer"--}}
{{--                                        placeholder="Specs Name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-5">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" name="specs_value[]" class="form-control" id="specsValue"--}}
{{--                                        placeholder="Specs Value">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-1">--}}
{{--                                <div class="form-group">--}}
{{--                                    <button type="button" id="more_specs" class="btn btn-primary">+</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="card">
                    <div class="card-header">
                        Product Attribute
                    </div>
                    <div class="card-body">

                        @foreach (attribute() as $attr)
                            <div class="form-group">
                                <label for="attr{{ $attr->id }}">{{ $attr->name }}</label>
                                <select class="select2 form-control" multiple="multiple" name="attr[]"
                                    id="attr{{ $attr->id }}">
                                    <option value="">Select {{ $attr->name }}</option>
                                    @foreach ($attr->attributes as $confi)
                                        <option value="{{ $confi->id }}">{{ $confi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endforeach
                    </div>
                </div>



                <div class="card">
                    <div class="card-header">
                        Product Showing
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="radio" name="product_showing" value="Feature Product"
                                        class="form-check-input" id="featured_product">
                                    <label class="form-check-label" for="Special_Offers">Feature Product</label>
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
                                    <input type="radio" name="product_showing" value="Top Reacted"
                                        class="form-check-input" id="featured_product">
                                    <label class="form-check-label" for="featured_product">Top Reacted</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Category
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category_id">Select Category</label>
                            <select class="select2 form-control" name="category_id" id="category_id"
                                onchange="setSubCategory()">
                                <option value="">Select Category</option>
                                @foreach ($categoris as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sub_category_id">Select Sub Category</label>
                            <select class="select2 form-control" name="sub_category_id" id="sub_category_id">

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
                    <div class="card-header">
                        Brand & Model
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="category_id">Select Brand</label>
                            <select class="select2 form-control" name="brand_id" id="brand_id" onchange="setSubModel()">
                                <option value="">Select Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" >{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="category_id">Select Model</label>--}}
{{--                            <select class="select2 form-control" name="sub_model_id" id="sub_model_id" onchange="setSubModelYear()">--}}

{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="category_id">Select Year</label>--}}
{{--                            <select class="select2 form-control" name="sub_model_year_id" id="sub_model_year_id">--}}

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
        $('#more_specs').on('click', function() {
            add_others();
        });

        function add_others() {
            var group = `<div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input type="text" name="specs_name[]" class="form-control" id="Manufacturer" placeholder="Specs Name">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input type="text" name="specs_value[]" class="form-control" id="specsValue" placeholder="Specs Value">
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="form-group">
                                    <button type="button" id="more_specs" class=" more_specs btn btn-danger">x</button>
                                </div>
                            </div>
                        </div>`;
            $('#more_box').append(group);
        }
        $('#more_box').on('click', '.more_specs', function() {
            $(this).parent().parent().parent().remove();
        });
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


        function setSubCategory() {
            var category_id = $('#category_id').val();
            if (category_id != null) {
                $.ajax({
                        url: '{{ url('admin/get/product/subcategory') }}/' + category_id,
                        type: 'GET',
                        dataType: 'json',
                    })
                    .done(function(response) {
                        console.log(response)
                        data = '<option value="">Select Sub Category</option>';
                        selected = '';
                        $.each(response, function(index, val) {
                            console.log('ok');
                            data += '<option value=' + val.id + ' ' + selected + '>' + val.name + '</option>';
                        });
                        $('#sub_category_id').html(data);
                    });

            } else {}
        }


        function setSubModel() {
            var brand_id = $('#brand_id').val();
            if (brand_id != null) {
                $.ajax({
                        url: '{{ url('admin/get/brand/submodel') }}/' + brand_id,
                        type: 'GET',
                        dataType: 'json',
                    })
                    .done(function(response) {
                        console.log(response)
                        data = '<option value="">Select Sub Model</option>';
                        selected = '';
                        $.each(response, function(index, val) {
                            console.log('ok');
                            data += '<option value=' + val.id + ' ' + selected + '>' + val.name + '</option>';
                        });
                        $('#sub_model_id').html(data);
                    });

            } else {}
        }

        function setSubModelYear() {
            var brand_model_id = $('#sub_model_id').val();
            if (brand_id != null) {
                $.ajax({
                    url: '{{ url('admin/get/brand/submodelyear') }}/' + brand_model_id,
                    type: 'GET',
                    dataType: 'json',
                })
                    .done(function(response) {
                        console.log(response)
                        data = '<option value="">Select Year</option>';
                        selected = '';
                        $.each(response, function(index, val) {
                            console.log('ok');
                            data += '<option value=' + val.id + ' ' + selected + '>' + val.year + '</option>';
                        });
                        $('#sub_model_year_id').html(data);
                    });

            } else {}
        }

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
