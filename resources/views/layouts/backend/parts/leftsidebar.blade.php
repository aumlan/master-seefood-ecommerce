   <!-- BEGIN: Main Menu-->
   <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin.dashboard')}}">
            <h4>Admin Dashboard</h4>
        {{-- <img src="{{asset('backendAsset/assets/img/logo.png')}}" style="width:50%;height:40px;margin:0 auto"> --}}
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul  class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="@if(Route::is('admin.dashboard')) active @endif nav-item"><a href="{{route('admin.dashboard')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a></li>


            <li class="@if(Route::is('admin.product*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="feather icon-image"></i><span class="menu-title" data-i18n="Data List">Proudct</span></a>
                <ul class="menu-content">
                    <li class="@if(Route::is('admin.product.index')) active @endif"><a href="{{route('admin.product.index')}}"><i class="fa fa-long-arrow-right"></i><span class="menu-item">Add New Product</span></a>
                    </li>
                    <li class="@if(Route::is('admin.product.list')) active @endif"><a href="{{route('admin.product.list')}}"><i class="fa fa-long-arrow-right"></i><span class="menu-item">All Products</span></a>
                    </li>

                    <li class="@if(Route::is('admin.product.attribute.configure.size')) active @endif"><a href="{{route('admin.product.attribute.configure.size')}}"><i class="fa fa-long-arrow-right"></i><span class="menu-item">Size</span></a>
                    </li>

                    <li class="@if(Route::is('admin.product.attribute.configure.color')) active @endif"><a href="{{route('admin.product.attribute.configure.color')}}"><i class="fa fa-long-arrow-right"></i><span class="menu-item">Color</span></a>
                    </li>


{{--                    <li class="@if(Route::is('admin.product.attribute')) active @endif"><a href="{{route('admin.product.attribute')}}"><i class="fa fa-long-arrow-right"></i><span class="menu-item">Attributes</span></a>--}}
                    </li>
                </ul>
            </li>

{{--            <li class="@if(Route::is('admin.software*')) sidebar-group-active open @endif nav-item"><a href="#">--}}
{{--                    <i class="feather icon-disc"></i><span class="menu-title" data-i18n="Data List">Software</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li class="@if(Route::is('admin.software.index')) active @endif"><a href="{{route('admin.software.index')}}"><i class="fa fa-long-arrow-right"></i><span class="menu-item">Software</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="@if(Route::is('admin.softwareProduct.index')) active @endif"><a href="{{route('admin.softwareProduct.index')}}"><i class="fa fa-long-arrow-right"></i><span class="menu-item">Software Product</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="@if(Route::is('admin.softwareProduct.list')) active @endif"><a href="{{route('admin.softwareProduct.list')}}"><i class="fa fa-long-arrow-right"></i><span class="menu-item">All Software Product</span></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}



            <li class="@if(Route::is('admin.categories*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">Categories</span></a>
                <ul class="menu-content">
                    <li class="@if(Route::is('admin.categories.index')) active @endif"><a href="{{route('admin.categories.index')}}"><i class="feather icon-circle"></i><span class="menu-item">Category</span></a>
                    </li>
                    <li class="@if(Route::is('admin.categories.subcategory.index')) active @endif"><a href="{{route('admin.categories.subcategory.index')}}"><i class="feather icon-circle"></i><span class="menu-item">Sub Category</span></a>
                    </li>
                </ul>
            </li>


            <li class="@if(Route::is('admin.coupon.index')) active @endif nav-item"><a href="{{route('admin.coupon.index')}}"><i class="fa fa-usd"></i><span class="menu-title">Coupon</span></a></li>

{{--            <li class="@if(Route::is('admin.currency.index')) active @endif nav-item"><a href="{{route('admin.currency.index')}}"><i class="fa fa-usd"></i><span class="menu-title">Currency Update</span></a></li>--}}

            <li class="@if(Route::is('admin.order.list')) active @endif nav-item">
                <a href="{{route('admin.order.list')}}"><i class="fa fa-shopping-bag "></i><span class="menu-title">Orders</span></a>
            </li>

{{--            <li class="@if(Route::is('admin.user.list')) active @endif nav-item">--}}
{{--                <a href="{{route('admin.user.list')}}"><i class="fa fa-user"></i><span class="menu-title">Users</span></a>--}}
{{--            </li>--}}

{{--            <li class="@if(Route::is('admin.brand.index')) active @endif nav-item"><a href="{{route('admin.brand.index')}}"><i class="fa fa-linode"></i><span class="menu-title" data-i18n="Dashboard">Brand</span></a></li>--}}

            <li class="@if(Route::is('admin.brand.index')) active @endif nav-item">
                <a href="{{route('admin.brand.index')}}"><i class="feather icon-list"></i><span class="menu-title">Brand</span></a>
            </li>


{{--            <li class="@if(Route::is('admin.brand*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="feather icon-list"></i><span class="menu-title" data-i18n="Data List">Brands</span></a>--}}
{{--                <ul class="menu-content">--}}
{{--                    <li class="@if(Route::is('admin.brand.index')) active @endif"><a href="{{route('admin.brand.index')}}"><i class="feather icon-circle"></i><span class="menu-item">Brand</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="@if(Route::is('admin.brandModel.index')) active @endif"><a href="{{route('admin.brandModel.index')}}"><i class="feather icon-circle"></i><span class="menu-item">Models</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="@if(Route::is('admin.brandModelYear.index')) active @endif"><a href="{{route('admin.brandModelYear.index')}}"><i class="feather icon-circle"></i><span class="menu-item">Year</span></a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}




{{--            <li class="@if(Route::is('admin.manufactures.index')) active @endif nav-item"><a href="{{route('admin.manufactures.index')}}"><i class="fa fa-creative-commons"></i><span class="menu-title" data-i18n="Dashboard">Manufactures</span></a></li>--}}

            <li class="@if(Route::is('admin.slider.index')) active @endif nav-item"><a href="{{route('admin.slider.index')}}"><i class="fa fa-sliders"></i><span class="menu-title" data-i18n="Dashboard">Slider</span></a>
            </li>
            {{-- <li class="@if(Route::is('admin.banner.index')) active @endif nav-item"><a href="{{route('admin.banner.index')}}"><i class="fa fa-clone"></i><span class="menu-title" data-i18n="Dashboard">Banner</span></a></li> --}}

            <!-- Setting Section -->
            <li class=" navigation-header"><span>Settings</span></li>
            <li class="@if(Route::is('admin.settings.frontend-settings*')) sidebar-group-active open @endif nav-item"><a href="#"><i class="fa fa-cog"></i><span class="menu-title" data-i18n="Data List">Frontend Settings</span></a>
                <ul class="menu-content">
                    <li class="@if(Route::is('admin.settings.frontend-settings.social-settings')) active @endif"><a href="{{route('admin.settings.frontend-settings.social-settings')}}"><i class="feather icon-circle"></i><span class="menu-item">Frontend Settings</span></a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
