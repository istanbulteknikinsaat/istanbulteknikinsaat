/**===== BX Slider =====**/
$(document).ready(function(){
    $("#slider").owlCarousel({
        loop: true,
        nav: true,
        margin: 10,
        items: 1,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,        
        dots: false,
        smartSpeed: 1000
    });
});
