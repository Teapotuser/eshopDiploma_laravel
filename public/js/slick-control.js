// Клонируем элемент с классом forClone
let parent = document.querySelector('.picture-slider');
let elem = parent.querySelector('.forClone');
let clone = elem.cloneNode(true);
parent.appendChild(clone);
   
$('.picture-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: !0,
    arrows: !0,
    dots: !1,
    adaptiveHeight: !1,
    centerMode: !0,
});