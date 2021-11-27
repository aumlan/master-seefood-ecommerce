@extends('layouts.frontend.mobile.master')
@push('css')
    <style>
        .auto_completed_box {
            position: absolute;
            max-width: 90%;
            background-color: #fff;
            width: 100%;
            min-height: 30px;
            border-radius: 5px;
            max-height: 75vh;
            overflow-y: scroll;
        }

        .auto_completed_box ul li {
            cursor: pointer;
            min-height: 40px;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgb(235, 233, 233);
        }

    </style>
@endpush
@section('content')
    @include('layouts.frontend.mobile.parts.app_bar')
    <div class="search mt-3" style="padding: 10px">
        <div class="col-lg-5 top-header-left-side d-flex">
            <input id="search_input" type="text" class="input-group-text-custom" placeholder="Search">
            <div class="input-group-text input-group-text-search"><i class="fas fa-search"></i></div>
            <div class="auto_completed_box" style="display: none">
                <ul class="ulList">

                </ul>
            </div>

        </div>

    </div>
@endsection
@push('js')
    <script>

        // $('.auto_completed_box').css('display', 'none');
        $('#search_input').keyup(function(e) {
            if (e.keyCode == 13) {
                let typeInput = $('#search_input').val();
                window.location.href = '/pages/search-results-page?q=' + typeInput ;
            }
            else
            {
                let typeInput = $('#search_input').val();
                console.log(typeInput);
                $('.auto_completed_box').css('display', 'block');
                let url = '/search/model/product/title/' + typeInput;
                $.ajax(url, {
                    success: function(data) {
                        console.log(data)
                        $('.ulList').empty();
                        let list = data;
                        var html = "";
                        if (list.length == 0) {
                            html += `<li>
                            No data found!
                        </li>`
                        } else {

                            for (var i = 0; i < list.length; i++) {
                                var name =  list[i].brand_name + ' / ' + list[i].category_name + ' / ' + list[i].product_name;
                                var src_str = name;
                                var term = typeInput;
                                term = term.replace(/(\s+)/,"(<[^>]+>)*$1(<[^>]+>)*");
                                var pattern = new RegExp("("+term+")", "gi");

                                src_str = src_str.replace(pattern, "<mark>$1</mark>");
                                src_str = src_str.replace(/(<mark>[^<>]*)((<[^>]+>)+)([^<>]*<\/mark>)/,"$1</mark>$2<mark>$4");

                                // console.log(data[i].product_image);
                                // var img = data[i].product_image.length ? data[i].product_image[0].image : '';
                                {{--var img = {{ thumbnail(+ $data[i].product_image[0].image +) }};--}}

                                    html += `<div class="d-flex" >
                                        <div class="col-2">

                                            <img src=# alt="img" srcset="" height='50px' width='50px'>
                                        </div>
                                        <div class="col-9">
                                            <li>
                                                <div>
                                            <a href="/product/${data[i].product_id}/${data[i].slug}">
                                                    ${ src_str}
                                                </a>
                                            </div>
                                            <div>
                                                <span >$ ${list[i].sales_price}</span>
                                            </div>
                                            </li>
                                        </div>
                                    </div>
                                    <hr/>
                                    `
                            }
                        }


                        // $("#test").html(src_str);

                        $('.ulList').append(html);

                    }
                });
                if (typeInput === "") {
                    $('.auto_completed_box').css('display', 'none')
                }
            }
        });

        $('html').click(function(e) {
            if(!$(e.target).hasClass('auto_completed_box')  )
            {
                console.log('aaaa');
                $('.auto_completed_box').css('display', 'none');

            }
        });

    </script>
@endpush
