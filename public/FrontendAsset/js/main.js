; (function ($) {
    "use strict";

    $(document).ready(function () {

        /**-----------------------------
         *  Navbar fix
         * ---------------------------*/
        $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a', function (e) {
            e.preventDefault();
        })
       
        /*-------------------------------------
            menu
        -------------------------------------*/
        $('.navbar-area .menu').on('click', function() {
            $(this).toggleClass('open');
            $('.navbar-area .navbar-collapse').toggleClass('sopen');
        });
    
        // mobile menu
        if ($(window).width() < 992) {
            $(".in-mobile").clone().appendTo(".sidebar-inner");
            $(".in-mobile ul li.menu-item-has-children").append('<i class="fas fa-chevron-right"></i>');
            $('<i class="fas fa-chevron-right"></i>').insertAfter("");

            $(".menu-item-has-children a").on('click', function(e) {
                // e.preventDefault();

                $(this).siblings('.sub-menu').animate({
                    height: "toggle"
                }, 300);
            });
        }

        var menutoggle = $('.menu-toggle');
        var mainmenu = $('.navbar-nav');
        
        menutoggle.on('click', function() {
            if (menutoggle.hasClass('is-active')) {
                mainmenu.removeClass('menu-open');
            } else {
                mainmenu.addClass('menu-open');
            }
        });

        /*--------------------------------------------
            Search Popup
        ---------------------------------------------*/
        var bodyOvrelay =  $('#body-overlay');
        var searchPopup = $('#search-popup');

        $(document).on('click','#body-overlay',function(e){
            e.preventDefault();
        bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click','.search',function(e){
            e.preventDefault();
            searchPopup.addClass('active');
        bodyOvrelay.addClass('active');
        });


        /*--------------------------------------------------
            select onput
        ---------------------------------------------------*/
        $('select').niceSelect();


        /* -----------------------------------------------------
            Variables
        ----------------------------------------------------- */
        var leftArrow = '<i class="la la-arrow-left"></i>';
        var leftAngle = '<i class="fa fa-angle-left"></i>';
        var rightArrow = '<i class="la la-arrow-right"></i>';
        var rightAngle = '<i class="fa fa-angle-right"></i>';

        /*------------------------------------
            Range Slider
        ------------------------------------*/
        if($('.slider-product-sorting').length){
            $( function() {
                $( ".slider-product-sorting" ).slider({
                range: true,
                min: 0,
                max: 100,
                values: [ 2, 80 ],
                slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
                });
                $( "#amount" ).val( "$" + $( ".slider-product-sorting" ).slider( "values", 0 ) +
                " - $" + $( ".slider-product-sorting" ).slider( "values", 1 ) );
            } );
        }

        /*------------------------------------
            banner Slider
        ------------------------------------*/
        /**banner-slider**/
        $('.banner-slider').slick({
            infinite: true,
            slidesToShow: 1,
            autoplay:false,
            autoplaySpeed:1500,
            arrows:true,
            prevArrow:'<i class="la la-long-arrow-left left"></i>',
            nextArrow:'<i class="la la-long-arrow-right right"></i>',
            speed: 1500,
            dots: false,
            centerMode: true,
            centerPadding: '0%', 
        });

        /*------------------------------------
            product Slider
        ------------------------------------*/
        /**product-slider**/
        $('.product-slider').slick({
            infinite: true,
            slidesToShow: 4,
            autoplay:false,
            autoplaySpeed:1500,
            arrows:true,
            prevArrow:'<i class="la la-angle-left left"></i>',
            nextArrow:'<i class="la la-angle-right right"></i>',
            speed: 1500,
            dots: false,
            responsive: [{
              breakpoint: 991,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
               breakpoint: 768,
               settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
               }
            }] 
        });
        // Fix slick slider using multitabs
        $('.nav-pills .nav-link[data-bs-toggle="pill"]').on('shown.bs.tab', function(e) {
             e.target
             e.relatedTarget
             $('.product-slider').slick('setPosition');
        });

        /*------------------------------------
            offer Slider
        ------------------------------------*/
        /**offer-slider**/
        $('.offer-slider').slick({
            infinite: true,
            slidesToShow: 3,
            autoplay:false,
            autoplaySpeed:1500,
            arrows:true,
            prevArrow:'<i class="la la-arrow-left left"></i>',
            nextArrow:'<i class="la la-arrow-right right"></i>',
            speed: 1500,
            dots: false,
            centerMode: true,
            centerPadding: '0%',
            responsive: [{
              breakpoint: 991,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
               breakpoint: 768,
               settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
               }
            }] 
        });

        /*---------------------------------------
        Thumbnail Slider
        ---------------------------------------*/
        var productDetailSlider2 = $('.single-thumbnail-slider-2');
        var pThumbanilSlider2 = $('.product-thumbnail-carousel-2');

        if (productDetailSlider2.length) {
            productDetailSlider2.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                speed: 2500,
                asNavFor: '.product-thumbnail-carousel-2'
            });
        }
        if (pThumbanilSlider2.length) {
            pThumbanilSlider2.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.single-thumbnail-slider-2',
                dots: false,
                centerMode: false,
                focusOnSelect: true,
                speed: 2500,
                arrows:true,
                prevArrow: '<div class="slick-prev"><i class="fas fa-angle-left"></i></div>',
                nextArrow: '<div class="slick-next"><i class="fas fa-angle-right"></i></div>',
            });
        }

        /*---------------------------------------
            Quantity
        ---------------------------------------*/
        function wcqib_refresh_quantity_increments() {
            jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
                var c = jQuery(b);
                c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
            })
        }
        String.prototype.getDecimals || (String.prototype.getDecimals = function() {
            var a = this,
                b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
        }), jQuery(document).ready(function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("updated_wc_div", function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("click", ".plus, .minus", function() {
            var a = jQuery(this).closest(".quantity").find(".qty"),
                b = parseFloat(a.val()),
                c = parseFloat(a.attr("max")),
                d = parseFloat(a.attr("min")),
                e = a.attr("step");
            b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
        });

        /*-------------------------------------------------
            wow js init
        --------------------------------------------------*/
        new WOW().init();

        /*------------------
           back to top
        ------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });

    });

    $(window).on("scroll", function() {
        /*---------------------------------------
        sticky menu activation && Sticky Icon Bar
        -----------------------------------------*/

        var mainMenuTop = $(".navbar-area");
        if ($(window).scrollTop() >= 1) {
            mainMenuTop.addClass('navbar-area-fixed');
        }
        else {
            mainMenuTop.removeClass('navbar-area-fixed');
        }
        
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
    });


    $(window).on('load', function () {

        /**Pre loader**/
        setTimeout(function() {
            $('body').addClass('loaded');
        }, 300);

        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut();


    });



})(jQuery);