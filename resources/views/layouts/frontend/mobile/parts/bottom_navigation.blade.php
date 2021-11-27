<div class="bottomNavigationBar">
    <a href="{{ url('/') }}">
        <div class="bottomItem menuActive">
            <ion-icon style="font-size: 20px;" name="home-outline"></ion-icon>
            <p>Home</p>
        </div>
    </a>
    <a href={{route('user.search.mobile')}}>
        <div class="bottomItem">
            <ion-icon style="font-size: 20px;color: #000;" name="search-outline"></ion-icon>
            <p>Search</p>
        </div>
    </a>
    <a href="{{route('product.cart.list')}}">
        <div class="bottomItem" style="position: relative">
            <div class="post_add">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
            <p>Cart</p>
            <div class="mobile_cart_count">0</div>
        </div>
    </a>
    <a href="https://wa.me/+00971568718908?text=Hi" class="text-dark">
        <div class="bottomItem">
            <ion-icon style="font-size: 20px;" name="chatbubble-ellipses-outline"></ion-icon>
            <p>WhatsApp </p>
        </div>
    </a>
    <a href="tel:00971568718908" class="text-dark">
        <div class="bottomItem">
            <ion-icon name="call-outline" style="font-size: 20px;"></ion-icon>
            <p>Call</p>
        </div>
    </a>
</div>
