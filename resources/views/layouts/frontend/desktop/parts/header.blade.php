

<div class="header_section">
    <div class="header_wrapper">
        <div class="container" style="max-width: 1250px;">
            <div class="top-header" style="height: 35px">
                <div class="top-header-left-side d-flex">
                    <div ><ion-icon name="call-outline"></ion-icon></div>
                    <div class="ml-2 mr-2">
                        <a class="text-dark" href="tel:8801313444600">
                            <p style="font-size: 13px">+8801313444600</p>
                        </a>
                    </div>
                    <div style="border-right: 1px solid #B6B8B9"></div>
                    <div class="ml-2"><i class="far fa-envelope-open"></i></div>
                    <div class="ml-2">
                        <a class="text-dark" href="mailto:info@master-seafood.com">
                            <p style="font-size: 13px">info@master-seafood.com</p>
                        </a>

                    </div>

                </div>


                <div class="top-header-left-side input-icons-custom">
                    {{--                    <p style="font-size: 13px"> <strong>Speecial Project Quote Request</strong> </p>--}}
                </div>

                <div class="top-header-right-side d-flex">
{{--                    <div ><i class="fas fa-map-marker-alt"></i></div>--}}
{{--                    <div class="ml-2 mr-2"><a href="{{ route('contact') }}"><p style="font-size: 13px;color: black">Store Location</p></a></div>--}}
                    <div style="border-right: 1px solid #B6B8B9"></div>
                    <div ><i class="fas fa-user"></i></div>
                    <div class="ml-2"> <a href="{{ route('login') }}"><p style="font-size: 13px; color: black">Register or Sign in</p> </a> </div>

                    <div class="ml-2 mr-5">
                        <ul class="nav navbar-nav float-right" style="font-size: 13px">
                            <li class="dropdown dropdown-currency nav-item">
                                <a class="dropdown-toggle nav-link text-dark" id="dropdown-money" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                    @if($currencies->selected_currency == 'usd')
                                        <ion-icon name="logo-usd" ></ion-icon><span class="selected-currency font_13"> USD</span>
                                    @elseif($currencies->selected_currency == 'bdt')
                                        <i class="fas fa-lira-sign"></i><span class="selected-currency font_13"> BDT</span>
                                    @else
                                        <ion-icon name="logo-yen" ></ion-icon><span class="selected-currency font_13"> CYN</span>
                                    @endif

                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdown-money">
                                    <a class="dropdown-item" href={{ route('currency.selected_currency_update','bdt') }} data-currency="bdt">
                                        <i class="fas fa-lira-sign"></i>
                                        <span class="font_13">BDT</span> </a>
                                    <a class="dropdown-item" href={{ route('currency.selected_currency_update','usd') }} data-currency="usd"><ion-icon name="logo-usd"></ion-icon> <span class="font_13">USD</span> </a>
                                    <a class="dropdown-item" href={{ route('currency.selected_currency_update','yen') }} data-currency="yen">
                                        <ion-icon name="logo-yen"></ion-icon>
                                        <span class="font_13">CYN</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
{{--                    <div class="ml-2">--}}
{{--                        <ul class="nav navbar-nav float-right" style="font-size: 13px">--}}
{{--                            <li class="dropdown dropdown-language nav-item">--}}
{{--                                <a class="dropdown-toggle nav-link text-dark" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

{{--                                    @if($currencies->selected_language == 'ar')--}}
{{--                                        <i class="flag-icon flag-icon-ara"></i><span class="selected-language font_13">Arabic</span>--}}
{{--                                    @else--}}
{{--                                        <i class="flag-icon flag-icon-us"></i><span class="selected-language font_13">English</span>--}}
{{--                                    @endif--}}

{{--                                </a>--}}
{{--                                --}}
{{--                                <div class="dropdown-menu" aria-labelledby="dropdown-flag">--}}
{{--                                    <a class="dropdown-item text-dark" href={{ route('currency.selected_language_update','en') }} data-language="en"><i class="flag-icon flag-icon-us"></i><span class="font_13">English</span>  </a>--}}
{{--                                    <a class="dropdown-item text-dark" href={{ route('currency.selected_language_update','ar') }} data-language="fr"><i class="flag-icon flag-icon-ara"></i><span class="font_13">Arabic</span>  </a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                    </div>--}}

                </div>


            </div>
        </div>
    </div>
    <div class="header_wrapper">
        <div class="container" style="max-width: 1250px;">
            <div class="top-header">
                <div class="col-lg-3 top-header-left-side mr-4">
                    <a href="{{ url('/') }}">
                        <div class="logo">
                            <img src="{{ asset('site_image/seefood_logo.png') }}" alt="" width="100px">

                        </div>
                    </a>
                </div>
                <div class="col-lg-5 top-header-left-side d-flex">
                    <input id="search_input" type="text" class="input-group-text-custom" placeholder="Search">
                    <div class="input-group-text input-group-text-search"><i class="fas fa-search"></i></div>
                    <div class="auto_completed_box" style="display: none">
                        <ul class="ulList">

                        </ul>
                    </div>

                </div>





                <div class="col-lg-4 top-header-right-side">
                    <div class="icon_section">
                        <a class="text-dark" href="tel:00971568718908">
                            <div class="icon-holder">
                                <ion-icon name="call-outline" style="font-size: 20px;"></ion-icon>
                                <p>Call</p>
                            </div>
                        </a>

                        <a class="text-dark" href="#">
                            <div class="icon-holder mr-3" style="position: relative;width: 30px;">
                                <ion-icon name="heart-outline" style="font-size: 20px;"></ion-icon>
                                <p>Wishlist</p>

                            </div>
                        </a>

                        <a class="text-dark" href="{{ route('product.cart.list') }}">
                            <div class="icon-holder" style="position: relative;width: 30px;">
                                <ion-icon name="cart-outline" style="font-size: 20px;"></ion-icon>
                                <p>Cart</p>
                                <div class="cart_bag">0</div>
                            </div>
                        </a>
                        @guest
                            <a class="text-dark" href="{{ route('login') }}">
                                <div class="icon-holder">
                                    <ion-icon name="people-outline" style="font-size: 20px;"></ion-icon>
                                    <p>User</p>
                                </div>
                            </a>

                        @else
                            <a class="text-dark" href="{{ route('user.dashboard') }}">
                                <div class="icon-holder">
                                    <ion-icon name="people-outline" style="font-size: 20px;"></ion-icon>
                                    <p>{{ auth()->user()->name }}</p>
                                </div>
                            </a>

                            {{--                            <form id="logout-form" action="#" method="POST" class="d-none">--}}
                            {{--                                @csrf--}}
                            {{--                            </form>--}}
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar  -->
    <div class="temp_navbar">
        <div class="container" style="max-width: 1250px;">
            <div class="large-menu header-sticky">
                <div class="container" style="max-width: 1250px;">
                    <div class="menu-wrapper">
                        <div class="menu">
                            <nav>
                                <ul>
{{--                                                                        <li class="active"><a href="#">All</a></li>--}}
{{--                                     @foreach (CarTypes() as $menu)--}}
{{--                                        <li class="active"><a href="{{route('car.search.by.car_type_id',$menu->id)}}">{{$menu->name}}</a></li>--}}
{{--                                    @endforeach --}}
{{--                                    <li class="text-uppercase static">--}}
{{--                                        <a href="#">Car Brands</a>--}}
{{--                                        <div class="mega-menu mega-full">--}}
{{--                                            <div class="popular_brand_list">--}}
{{--                                                @foreach (Brand() as $brand)--}}
{{--                                                     <a href="{{ route('car.by.brand', $brand->id) }}"> --}}
{{--                                                    <a style="margin-bottom: 10px" href={{ route('brand.products', [$brand->id, $brand->name] ) }} >--}}
{{--                                                        <div class="brand">--}}
{{--                                                            <div class="brandIcon">--}}
{{--                                                                <img src="{{ asset($brand->icon) }}" alt="" srcset="">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="brandName ">--}}
{{--                                                            <p>{{ $brand->name }}</p>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <li class=" text-uppercase static">--}}
{{--                                        <a href="#">Manufacturers</a>--}}
{{--                                        <div class="mega-menu mega-full">--}}
{{--                                            <div class="popular_brand_list">--}}

{{--                                                @foreach (Manufactures() as $manufacture)--}}
{{--                                                    --}}{{-- <a href="{{ route('car.by.brand', $brand->id) }}"> --}}
{{--                                                    <a style="margin-bottom: 10px" href={{ route('manufacturers.products', [$manufacture->id, $manufacture->name] ) }} >--}}
{{--                                                        <div class="brand">--}}
{{--                                                            <div class="brandIcon">--}}
{{--                                                                <img src="{{ asset($manufacture->icon) }}" alt="" srcset="">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="brandName">--}}
{{--                                                            <p>{{ $manufacture->name }}</p>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </li>--}}
{{--                                    <li class=" text-uppercase static">--}}
{{--                                        <a href="#">Categories</a>--}}
{{--                                        <div class="mega-menu mega-full">--}}
{{--                                            <div class="popular_brand_list">--}}
{{--                                                @foreach (Category() as $category)--}}
{{--                                                    <a style="margin-bottom: 10px" href={{ route('category.products', [$category->id, $category->name] ) }} >--}}
{{--                                                        <div class="brand">--}}
{{--                                                            <div class="brandIcon">--}}
{{--                                                                <img src="{{ asset($category->icon) }}" alt="" srcset="">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="brandName">--}}
{{--                                                            <p>{{ $category->name }}</p>--}}
{{--                                                        </div>--}}
{{--                                                    </a>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </li>--}}
                                    @foreach($global_categories as $category)
                                        <li class=" text-uppercase static">
                                            <a href={{ route('category.products', [$category->id, $category->name] ) }}>{{$category->name}}</a>
                                            <div class="mega-menu mega-full">
                                                <div class="popular_brand_list">
                                                    @foreach (SubCategory($category->id) as $sub_category)
                                                        <a style="margin-bottom: 10px" href={{ route('sub.category.products', [$sub_category->id, $sub_category->name] ) }} >
                                                            <div class="brand">
                                                                <div class="brandIcon">
                                                                    <img src="{{ asset($sub_category->icon) }}" alt="" srcset="">
                                                                </div>
                                                            </div>
                                                            <div class="brandName">
                                                                <p>{{ $sub_category->name }}</p>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
{{--                                    <li class=" text-uppercase mr-3"><a href={{ route('welcome') }}> Home </a></li>--}}
{{--                                    <li class=" text-uppercase mr-3"><a href={{ route('terms.about') }}> About Us </a></li>--}}

{{--                                    @foreach($global_categories as $category)--}}
{{--                                        <li class=" text-uppercase mr-3">--}}
{{--                                            <a href={{ route('category.products', [$category->id, $category->name] ) }}> {{ $category->name }} </a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}



{{--                                    <li class=" text-uppercase mr-3"><a href={{ route('contact') }}> Contact </a></li>--}}

{{--                                    <li class=" text-uppercase"><a href={{ route('software.list') }}> Software/Token </a></li>--}}
{{--                                    <li class=" text-uppercase"><a href="#"> Downloads </a></li>--}}
{{--                                    <li class=" text-uppercase"><a href="#"> Pin Code</a></li>--}}
{{--                                    <li class=" text-uppercase"><a href="#">Super Deals</a></li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- navbar  -->
</div>

