$(".humberMenu").click(function (e) {
    $('.mobile_menu_sidebar').toggleClass("menu_active");
});       
$(".mobile_sidebar_close").click(function (e) {
    $('.mobile_menu_sidebar').toggleClass("menu_active");
});

function backScreen(){
   return window.history.back()
}
$(document).ready(function () {
    $(".owl-carousel#detailsPageSlider").owlCarousel({
        margin:80,
        loop:true,
        items:1,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });
});


$('.share_btn').click(()=>{
    const title = window.document.title;
    const url = window.document.location.href;
   console.log(navigator.share({
       title:`${title}`,
       title:`${url}`,
   }))
})