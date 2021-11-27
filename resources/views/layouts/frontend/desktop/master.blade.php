<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('meta')
    <meta name="description" content="">
    <title>My Morich</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fevicon.png">
    <!-- Place favicon.ico in the root directory -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{asset('Frontend/desktop/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/desktop/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('Frontend/desktop/css/toastr.min.css') }}">


    <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/menu.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/template.css')}}">

        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/slick-slider.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/line-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('Frontend/desktop/css/responsive.css')}}">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @stack('css')

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=613330f9ad38cf0012acf12d&product=sop' async='async'></script>

</head>

<body>

    @include('layouts.frontend.desktop.parts.header')
    @yield('content')
    @include('layouts.frontend.desktop.parts.footer')

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-double-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- JS here -->

    <script src="{{asset('FrontendAsset/js/jquery-3.5.1.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="{{asset('FrontendAsset/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/magnific.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/image-loaded.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/nice-select.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/slick-slider.js')}}"></script>
    <script src="{{asset('FrontendAsset/js/wow.js')}}"></script>
    <!-- main js  -->
    <script src="{{asset('FrontendAsset/js/main.js')}}"></script>
    <script src="{{asset('Frontend/desktop/js/owl.carousel.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    @if (!MoBileView())
    <script src="{{asset('Frontend/desktop/js/one-page-nav-min.js')}}"></script>
    <script src="{{asset('Frontend/desktop/js/plugins.js')}}"></script>
    <script src="{{asset('Frontend/desktop/js/main.js')}}"></script>
    @else
    <script src="{{asset('Frontend/mobile/js/popper.min.js')}}"></script>
    <script src="{{asset('Frontend/mobile/js/template.js')}}"></script>
    @endif
    @yield('js')
    <script src="{{ asset('js/share.js') }}"></script>
    <script src="{{asset('js/cart.js')}}"></script>

    <script src="{{asset('js/zoom-image.js')}}"></script>
    <script src="{{asset('js/zoom-main.js')}}"></script>

    <script src="{{asset('Frontend/desktop/js/toastr.min.js')}}"></script>
    {!! Toastr::message() !!}
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

                                    html += `<div class="row" >
                                        <div class="col-lg-2">

                                            <img src=# alt="img" srcset="" height='50px' width='50px'>
                                        </div>
                                        <div class="col-lg-9">
                                            <li>
                                                <a href="/product/${data[i].product_id}/${data[i].slug}">
                                                    ${ src_str}
                                                </a>
                                                <span >$ ${list[i].sales_price}</span>
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

        $('#search_filter').click(function() {

            $('.auto_completed_box_filter').slideToggle(500);

            {{--$.ajax(url, {--}}
            {{--    success: function(data) {--}}
            {{--        console.log(data)--}}
            {{--        $('.ulList').empty();--}}
            {{--        let list = data;--}}
            {{--        var html = "";--}}
            {{--        if (list.length == 0) {--}}
            {{--            html += `<li>--}}
            {{--                No data found!--}}
            {{--            </li>`--}}
            {{--        } else {--}}
            {{--            for (var i = 0; i < list.length; i++) {--}}
            {{--                html += `<div class="row" >--}}
            {{--                            <div class="col-lg-3">--}}
            {{--                                <img src="{{ asset('site_image/logo.png') }}" alt="" srcset="" height='50px' width='50px'>--}}
            {{--                            </div>--}}
            {{--                            <div class="col-lg-9">--}}
            {{--                                <li>--}}
            {{--                                    <a href="/product/${data[i].product_id}/${data[i].slug}">${list[i].product_name}</a>--}}

            {{--                                    <span >$ ${list[i].sales_price}</span>--}}
            {{--                                </li>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <hr/>--}}
            {{--                        `--}}
            {{--            }--}}
            {{--        }--}}
            {{--        $('.ulList').append(html);--}}

            {{--    }--}}
            {{--});--}}
            // if (typeInput === "") {
            //     $('.auto_completed_box').css('display', 'none')
            // }
        });

        // $(document).on('click', function(e) {
        //     e.stopPropagation();
        //     var container = $("#auto_completed_box_filter");
        //     if (container.is(event.target)) {
        //         console.log('sss');
        //         $('.auto_completed_box_filter').css('display', 'none')
        //     }
        // });

        $(document).mouseup(function (e) {
            if ($(e.target).closest(".auto_completed_box_filter").length
                === 0) {
                $(".auto_completed_box_filter").hide();
            }
        });

        // $('html').click(function(e) {
        //     if(!$(e.target).hasClass('auto_completed_box_filter')  )
        //     {
        //         console.log('sss');
        //         $('.auto_completed_box_filter').css('display', 'none');
        //
        //     }
        // });

        function setSubModel() {
            console.log('sub model fn');
            var brand_id = $('#brand_id').val();
            if (brand_id != null) {
                $.ajax({
                    url: '{{ url('get/brand/submodel') }}/' + brand_id,
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function() {
                        $('#loader').removeClass('hidden');
                        // $('#sub_model_id').addClass('hidden');
                        $('#sub_model_id').hide();
                    },
                })
                    .done(function(response) {
                        $('#loader').addClass('hidden');
                        // $('#sub_model_id').removeClass('hidden');
                        $('#sub_model_id').show();
                        console.log(response)
                        data = '<option value="" disabled selected>Select Sub Model</option>';
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
                    url: '{{ url('get/brand/submodelyear') }}/' + brand_model_id,
                    type: 'GET',
                    dataType: 'json',
                    beforeSend: function() {
                        $('#loader2').removeClass('hidden');
                        // $('#sub_model_id').addClass('hidden');
                        $('#sub_model_year_id').hide();
                    },
                })
                    .done(function(response) {
                        $('#loader2').addClass('hidden');
                        // $('#sub_model_id').removeClass('hidden');
                        $('#sub_model_year_id').show();
                        console.log(response)
                        data = '<option value="" disabled selected>Select Year</option>';
                        selected = '';
                        $.each(response, function(index, val) {
                            console.log('ok');
                            data += '<option value=' + val.id + ' ' + selected + '>' + val.year + '</option>';
                        });
                        $('#sub_model_year_id').html(data);
                    });

            } else {}
        }

        ///search-filter?type=gcc&brand=1&model=2&year=2
        function search_click() {

            var type = `type=${ $('#type_id').val() }`;
            var brand =`brand=${$('#brand_id').val()}` ;
            var model =`model=${$('#sub_model_id').val()}` ;
            var year =`year=${$('#sub_model_year_id').val()}` ;

            console.log(type+brand+model+year);

            console.log('/search-filter?' + type + '&' + brand + '&' + model+ '&' + year);

            location.href='/search-filter?' + type + '&' + brand + '&' + model+ '&' + year ;

            // $.ajax({
            //     url: '/search-filter?' + type + '&' + brand + '&' + model+ '&' + year ,
            //     type: 'GET',
            //     dataType: 'json',
            // })
            //     .done(function(response) {
            //         console.log(response)
            //     });


        }

        function reset_click(){
            $('#type_id').val($("#type_id option:first").val());
            $('#brand_id').val($("#brand_id option:first").val());
            $('#sub_model_id').val($("#sub_model_id option:first").val());
            $('#sub_model_year_id').val($("#sub_model_year_id option:first").val());

        }



    </script>
</body>

</html>
