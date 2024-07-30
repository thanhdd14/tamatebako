//menu header
$('.js-mobile').on('click', function(){
    $(this).toggleClass("js-mobile--close");
    $("html").toggleClass("js-locked");
    $(".header-logo").toggleClass("active");
    $(".header-nav").fadeToggle();
});


$('.js-open-search').on('click', function(){
    $(this).addClass("active");
    $(".seach-box").addClass("active");
});
$('.header-itemsp--search').on('click', function(){
    $(".search-tb").fadeToggle();
});
$('.sp-open--search').on('click', function(){
    $(".search-tb").fadeToggle();
});
$('.search-tb__close').on('click', function(){
    $(".search-tb").fadeOut();
});
$('.search-tb__btn').on('click', function(){
    $(".search-list").addClass("active");
});
$('.search-list__ttl').on('click', function(){
    $(".search-list").removeClass("active");
});




//siider-home
$('.js-mv-slider').slick({
    dots: true,
    focusOnSelect: true,
    pauseOnHover:false,
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    cssEase: 'linear'
});

$(function () {
    var $swiper1 = $(".js-product");
    var $bottomSlide = null;
    var $bottomSlideContent = null;
    var mySwiper1 = new Swiper(".js-product", {
        spaceBetween: 1,
        slidesPerView: 2.1,
        loop: false,
        pagination: {
            el: ".product-bar .swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".product-bar .swiper-button-next",
            prevEl: ".product-bar .swiper-button-prev"
        },
        breakpoints: {
            640: {
                slidesPerView: 4.2,
                spaceBetween: 1
            }
        },
    });
});
$(function () {
    var $swiper2 = $(".js-rental");
    var $bottomSlide = null;
    var $bottomSlideContent = null;
    var mySwiper2 = new Swiper(".js-rental", {
        spaceBetween: 1,
        slidesPerView: 2.1,
        loop: false,
        pagination: {
            el: ".rental-bar .swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".rental-bar .swiper-button-next",
            prevEl: ".rental-bar .swiper-button-prev"
        },
        breakpoints: {
            640: {
                slidesPerView: 4.2,
                spaceBetween: 1
            }
        },
    });
});
$(function () {
    var $swiper3 = $(".js-reviews");
    var $bottomSlide = null;
    var $bottomSlideContent = null;
    var mySwiper3 = new Swiper(".js-reviews", {
        spaceBetween: 1,
        slidesPerView: 1.1,
        loop: false,
        pagination: {
            el: ".reviews-bar .swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".reviews-bar .swiper-button-next",
            prevEl: ".reviews-bar .swiper-button-prev"
        },
        breakpoints: {
            640: {
                slidesPerView: 3.2,
                spaceBetween: 1
            }
        },
    });
});

jQuery(function ($) {
    $('.product-list .product-list__item .product-list__ct .product-list__ct-ttl').matchHeight();
});
