const nextIcon = '<img src="./assets/images/next_arrow.png" alt=""/>';
const prevIcon = '<img src="./assets/images/prev_arrow.png" alt=""/>';
$(document).ready(function(){
    $(".owl-carousel-hot-products").owlCarousel({
        loop: true,
        nav: true,
        items: 4,
        autoplay: false,
        navText: [prevIcon, nextIcon]
    });

    $(".owl-carousel-top-products").owlCarousel({
        loop: true,
        nav: true,
        items: 4,
        autoplay: false,
        navText: [prevIcon, nextIcon]
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // инициализация слайдера
    new ItcSimpleSlider('.itcss', {
        loop: true,
        autoplay: true,
        interval: 4000,
        swipe: true,
    });
});


