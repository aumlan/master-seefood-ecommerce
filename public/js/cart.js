
$(document).ready(function () {
    TotalCart();
    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
    };
})

function addToCart(product_id,qty,size,color) {
    console.log(product_id+ ' '+ color);
    fetch('/product/add/to/cart/' + product_id +'/'+ qty +'/'+ size +'/'+ color)
        .then(response => response.json())
        .then(data=> console.log(data) )
        .then(data => TotalCart());
    toastr.success('Added To Cart');

}
function addToCartPlus(product_id) {
    fetch('/product/add/to/cart/' + product_id)
        .then(response => response.json())
        .then(data => {
            $('.cart_qty' + data.id).val(data.qty)
            $('.cart_price_subtotal' + data.id).text(data.subtotal + ' AED')
            TotalCart()
        });
}

function addToCartInput(product_id,qty) {
    alert(product_id+qty);
    // fetch('/product/add/to/cart/' + product_id)
    //     .then(response => response.json())
    //     .then(data => {
    //         $('.cart_qty' + data.id).val(data.qty)
    //         $('.cart_price_subtotal' + data.id).text(data.subtotal + ' AED')
    //         TotalCart()
    //     });


    // let newQTY = parseInt(qty.replace(/[^0-9.]/g, "")) || 1;
    // console.log(newQTY);
    // fetch('/product/add/to/cart/' + product_id +'/'+ qty)
    //     .then(response => response.json())
    //     .then(data=> console.log(data) )
    //     .then(data => {
    //         // $('.cart_qty' + data.id).val(data.qty)
    //         $('.cart_price_subtotal' + data.id).text(data.subtotal + ' AED')
    //         TotalCart()
    //     });
}
function addToCartMinus(product_id, rowId) {
    let qty = $('.cart_qty' + product_id).val();
    if(qty>1){
        fetch('/product/decrease/to/cart/' + product_id + '/' + qty + '/' + rowId)
        .then(response => response.json())
        .then(data => {
            $('.cart_qty' + data.id).val(data.qty)
            $('.cart_price_subtotal' + data.id).text(data.subtotal )
            TotalCart()
        });
    }else{
        alert('Sorry You Cant Decrease Less than 1')
    }

}
function TotalCart() {

    fetch('/shopping/cart/count')
        .then(response => response.json())
        .then(data => {
            $('.cart_bag').text(data.cart_count);
            $('.products_count').text(data.cart_count);
            $('.mobile_cart_count').text(data.cart_count);
            $('.cart_total_price').text(data.cart_total );

        });
}
