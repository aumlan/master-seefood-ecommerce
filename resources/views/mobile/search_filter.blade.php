@extends('layouts.frontend.mobile.master')
@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <style>
        .newheader_button {
            border: 1px solid #e00000;
            outline: 0;
            transition: all .2s;
            box-sizing: border-box;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
            line-height: 34px;
            padding: 0 12px;
            background-color: #e00000;
            color: #fff;
            white-space: nowrap;
        }

    </style>
@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="filter_body">
        <form action="{{ route('search.get.filter') }}" method="get">
            <div class="form-group mb-4">
                <select class="form-control" name="brand" id="brand_id">
                    <option value="all">All Makers</option>
                    @foreach (brands() as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-4">
                <select class="form-control" id="models" name="model">
                    <option value="all">Model</option>
                </select>
            </div>
            <div class="heading">Price ( AED )</div>
            <div class="form-row mb-4">
                <div class="col">
                    <input type="text" class="form-control" name="price_start" placeholder="Price From">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="price_end" placeholder="Price To">
                </div>
            </div>
            <div class="heading">Year</div>
            <div class="form-row mb-4">
                <div class="col">
                    <input id="id_keywords" class="datepicker" placeholder="from" type="text" name="year_start" value=""
                        class="text-field">
                </div>
                <div class="col">
                    <input id="id_keywords" class="datepicker" placeholder="from" type="text" name="year_start" value=""
                        class="text-field">
                </div>
            </div>
            <div class="heading">Kilometers</div>
            <div class="form-row mb-4">
                <div class="col">
                    <input id="id_keywords" placeholder="KM from" type="text" name="km_start" value="" class="text-field">
                </div>
                <div class="col">
                    <input id="id_keywords" placeholder="KM to" type="text" name="km_end" value="" class="text-field">
                </div>
            </div>
            <button type="submit" class="btn newheader_button btn-danger mt-3">
                Search
            </button>
        </form>

        {{-- <div class="heading">Body Type</div>
        <div class="form-group more-options mb-3 mt-2">
            <ul>
                <li class="selected"><label><input id="body_type:swfield" name="body_type" type="checkbox" value="347">
                        Coupe</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="351"> Crossover</label>
                </li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="358"> Hard Top
                        Convertible</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="349"> Hatchback</label>
                </li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="355"> Pick Up Truck</label>
                </li>
            </ul>
        </div> --}}

        {{-- <div class="heading">Fuel Type</div>
        <div class="form-group more-options mb-3 mt-2">
            <ul>
                <li class="selected"><label><input id="body_type:swfield" name="body_type" type="checkbox"
                            value="347">Gasoline</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="351"> Diesel</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="358"> Hybrid</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="349"> Electric</label></li>
            </ul>
        </div>

        <div class="heading">Color</div>
        <div class="form-group more-options mb-3 mt-2">
            <ul>
                <li class="selected"><label><input id="body_type:swfield" name="body_type" type="checkbox"
                            value="347">Black</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="351"> Blue</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="358"> Brown</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="349"> Gold</label></li>
            </ul>
        </div>
        <div class="heading">Doors</div>
        <div class="form-group more-options mb-3 mt-2">
            <ul>
                <li class="selected"><label><input id="body_type:swfield" name="body_type" type="checkbox"
                            value="347">1</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="351"> 2</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="358"> 3</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="349"> 4</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="349"> 5</label></li>
            </ul>
        </div>
        <div class="heading">Warranty</div>
        <div class="form-group more-options mb-3 mt-2">
            <ul>
                <li class="selected"><label><input id="body_type:swfield" name="body_type" type="checkbox"
                            value="347">Yes</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="351"> No</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="358"> Does Not
                        Apply</label></li>
            </ul>
        </div>
        <div class="heading">Steering Side</div>
        <div class="form-group more-options mb-3 mt-2">
            <ul>
                <li class="selected"><label><input id="body_type:swfield" name="body_type" type="checkbox" value="347">Left
                        Hand Side</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="351"> Right Hand
                        Side</label></li>
                <li><label><input id="body_type:swfield" name="body_type" type="checkbox" value="358"> Does Not
                        Apply</label></li>
            </ul>
        </div>
        <div class="heading">Keywords</div>
        <div class="form-row mb-4">
            <div class="col">
                <input type="text" class="form-control" placeholder="Search Keywords">
            </div>
        </div> --}}
    </div>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(function() {
            $(".datepicker").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            let brand_id = $('#brand_id').val();
            let url = '/get/brand/model/' + brand_id
            $.ajax(url, {
                success: function(data) {
                    $('#models').empty();
                    let models = data;
                    var html = "<option value='all'>ALL Model</option>";
                    for (var i = 0; i < models.length; i++) {
                        let GetValue = models[i].name;
                        let getId = models[i].id;
                        html += "<option value=" + getId + ">" + GetValue + "</option>";
                    }
                    console.log(html)
                    $('#models').append(html);
                }
            })

            $('#brand_id').on('change', function() {
                let brand_id = $('#brand_id').val();
                let url = '/get/brand/model/' + brand_id
                $.ajax(url, {
                    success: function(data) {
                        $('#models').empty();
                        let models = data;
                        var html = "<option value='all'>ALL Model</option>";
                        for (var i = 0; i < models.length; i++) {
                            let GetValue = models[i].name;
                            let getId = models[i].id;
                            html += "<option value=" + getId + ">" + GetValue + "</option>";
                        }
                        console.log(html)
                        $('#models').append(html);
                    }
                })
            })
        });
    </script>
@endpush
