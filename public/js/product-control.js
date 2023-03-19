/* $(function(){
    "use strict";
    $('.title-box').click(function(){
        $(this).toggleClass('open');
        $(this).next('.list-link').toggleClass('open');
    })

 

}); */ 

$(document).ready(function(){
    $('.product-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 3,
        asNavFor: '.product-carousel',
        arrows: true,
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        Infinity: true
      });
    });
