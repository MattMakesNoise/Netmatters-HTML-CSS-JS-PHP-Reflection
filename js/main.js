// $('.carousel').slick({
//     slidesToShow: 6,
//     slidesToScroll: 6,
//     speed: 300,
//Slick Carousel Plugin
$(document).ready(function(){
    $('.carousel').slick({
        autoplay: true,
        autoplaySpeed: 5000, //Time between slides
        speed: 300, //Transition speed
        dots: true, //Show dots
        infinite: true, //Loop slides forever
        prevArrow: false, //Don't show previous arrow
        nextArrow: false //Don't show next arrow
    });
});



