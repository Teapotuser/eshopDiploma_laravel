$(document).ready(function(){
    $('.product-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        asNavFor: '.slider-nav',
        infinite: true
      });

      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        centerMode: true,
        centerPadding: '0px',
        asNavFor: '.product-carousel',
        focusOnSelect: true,
        // infinite: false
        vertical: false,
        verticalSwiping: false
      });


    });