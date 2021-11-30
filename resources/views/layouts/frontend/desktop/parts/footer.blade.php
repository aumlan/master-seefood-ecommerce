<footer>

    <div class="container">

        <div class="row">

            <div class="col-sm-12 d-flex" >
                <div class="col-sm-5">
                    <h4>About</h4>
                    <p>
                        We deliver premium quality seafood throughout the world. Our motto is to deliver the highest quality seafood at a reasonable price.
                    </p>

                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <h4>Menu</h4>
                    <ul class="list-unstyled">

                        @foreach($global_categories as $category)
                            <li class="text-white">
                                <a href={{ route('category.products', [$category->id, $category->name] ) }}> {{ $category->name }}</a>
                            </li>
                        @endforeach


{{--                        <li><a href="index.php?route=milestone/milestone">The Brand</a></li>--}}
{{--                        <li><a href="https://www.alexandre-j.com/perfumes/" class="home-me">Perfumes</a></li>--}}
{{--                        <li><a href="https://www.alexandre-j.com/homefragrance/" class="home-me">Home Fragrance</a></li>--}}
{{--                        <li><a href="https://www.alexandre-j.com/watches/" class="home-me">Watches/Jewellery</a></li>--}}

                        <!--            <li><a href="index.php?route=product/category&path=59">E-Shop</a></li>-->
{{--                        <li><a href="index.php?route=artist/artist">Blog</a></li>--}}
                        <!--
                                    <li><a href="index.php?route=artist/artist">What's New</a></li>
                                    <li><a href="index.php?route=information/career">Career</a></li>
                        -->

                    </ul>
                </div>

                <div class="col-sm-3">
                    <h4>Help</h4>


                    <ul class="list-unstyled text-white">
                        <li>+880 1313 444 644</li>
                        <li>ruhulaminshaik@gmail.com</li>
                        <li>House-74, Block-C, Nolbhog, Nishat Nagar</li>
                        <li>Turag, Dhaka-1230</li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="footer-logo">
                    <a href="index.php?route=common/home"><img src="{{asset('site_image/seefood_logo.png')}}" alt=" " width="150px"></a>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="footer-social-icons">
                    <ul class="list-inline" style="display: flex;justify-content: center;">
                        <li><a href="https://www.facebook.com/masterseafoodcoltd/" target="_blank"><ion-icon name="logo-facebook" style="font-size: 25px"></ion-icon></a></li>
                        <li><a href="https://www.instagram.com/master__seafood/" target="_blank"><ion-icon name="logo-instagram" style="font-size: 25px"></ion-icon></a></li>
                        <li><a href="mailto:info@master-seafood.com" target="_blank"><ion-icon name="mail-outline" style="font-size: 25px"></ion-icon></a></li>
                        <li><a href="tel:tel:+8801313444600 target=" target="_blank"><ion-icon name="call-outline" style="font-size: 25px"></ion-icon></a></li>
                        <li><a href="https://www.pinterest.com/master_seafood/" target="_blank"><ion-icon name="logo-pinterest" style="font-size: 25px"></ion-icon></a></li>

                    </ul>
                </div>
            </div>


            <div class="col-lg-12 text-center">
                <div class="footer-copyright">
                    <p>Copyright © 2021 Master See Food. All rights reserved.</p>
                </div>
            </div>



        </div>

    </div>



</footer>
