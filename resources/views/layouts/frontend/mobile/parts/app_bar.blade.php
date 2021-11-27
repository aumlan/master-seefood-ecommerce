<div class="topAppBar">
    <div class="humberMenu">
        <i class="fas fa-bars"></i>
    </div>
    <a href="{{url('/')}}">
        <div class="MobileLogo">
            <img src="{{asset('site_image/logo.png')}}" alt="">&nbsp;
        </div>
    </a>
    <div class="rightTopIcon"></div>
</div>
<div class="mobile_menu_sidebar">
    <div class="mobile_menu_sidebar_wrapper">
        <div class="mobile_sidebar_close">
            <i class="fas fa-times"></i>
        </div>
        <ul>
            @guest
                <div class="container">

                    <a class="text-dark" href="{{ route('login') }}">
                        <div class="icon-holder d-flex">
                            <ion-icon name="people-outline" style="font-size: 20px;"></ion-icon>
                            <p class="ml-2 mb-2"> Login </p>
                        </div>
                    </a>
                </div>


            @else
                <div class="container d-flex justify-content-between">
                    <div >
                        <a class="text-dark" href="{{ route('login') }}">
                            <div class="icon-holder d-flex">
                                <ion-icon name="people-outline" style="font-size: 20px;"></ion-icon>
                                <p class="ml-2 mb-2"> {{ auth()->user()->name }} </p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <form action="{{ url('/logout')}}" method="POST">
                            @csrf
                            <a href="{{ route('logout') }}" >
                                <i class="fas fa-sign-out-alt mr-2"></i>
                            </a>
                        </form>
                    </div>

                </div>
            @endguest

                <li><a class="side_menu_active" href="{{ url('/') }}">Home</a></li>
                <li><a  href="{{ url('/about') }}">About Us</a></li>


                @foreach($global_categories as $category)
                    <li class=" text-uppercase"><a href={{ route('category.products', [$category->id, $category->name] ) }}> {{ $category->name }} </a></li>
                @endforeach

                <li><a  href="{{ url('/contact-us') }}">Contact Us</a></li>












{{--            <li class="dropdown dropdown-currency nav-item">--}}
{{--                <a class="dropdown-toggle nav-link text-dark justify-content-start" id="dropdown-money" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

{{--                    @if($currencies->selected_currency == 'usd')--}}
{{--                        <i class="fa-dollar-sign"></i><span class="selected-currency font_13"> USD</span>--}}
{{--                    @else--}}
{{--                        <i class="fa fa-euro"></i><span class="selected-currency font_13"> EURO</span>--}}
{{--                    @endif--}}

{{--                </a>--}}

{{--                <div class="dropdown-menu" aria-labelledby="dropdown-money">--}}
{{--                    <a class="dropdown-item justify-content-start" href={{ route('currency.selected_currency_update','usd') }} data-currency="usd"><i class="fa fa-usd"></i> <span class="font_13">USD</span> </a>--}}
{{--                    <a class="dropdown-item justify-content-start" href={{ route('currency.selected_currency_update','euro') }} data-currency="euro"><i class="fa fa-euro"></i> <span class="font_13">EURO</span> </a>--}}

{{--                </div>--}}
{{--            </li>--}}

{{--            <li class="dropdown dropdown-language nav-item">--}}
{{--                <a class="dropdown-toggle nav-link text-dark justify-content-start" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

{{--                    @if($currencies->selected_language == 'ar')--}}
{{--                        <i class="flag-icon flag-icon-ara"></i><span class="selected-language font_13">Arabic</span>--}}
{{--                    @else--}}
{{--                        <i class="flag-icon flag-icon-us"></i><span class="selected-language font_13">English</span>--}}
{{--                    @endif--}}

{{--                </a>--}}
{{--                <div class="dropdown-menu" aria-labelledby="dropdown-flag">--}}
{{--                    <a class="dropdown-item text-dark justify-content-start" href={{ route('currency.selected_language_update','en') }} data-language="en"><i class="flag-icon flag-icon-us"></i><span class="font_13">English</span>  </a>--}}
{{--                    <a class="dropdown-item text-dark justify-content-start" href={{ route('currency.selected_language_update','ar') }} data-language="fr"><i class="flag-icon flag-icon-ara"></i><span class="font_13">Arabic</span>  </a>--}}
{{--                </div>--}}
{{--            </li>--}}

        </ul>



    </div>
</div>
<div class="space50"></div>
