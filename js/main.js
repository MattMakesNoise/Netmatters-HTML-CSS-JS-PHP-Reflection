//==================== SLICK CAROUSEL PLUGIN ====================//
$(document).ready(function(){
    $('.carousel').slick({
        autoplay: true,
        autoplaySpeed: 5000, //Time between slides
        speed: 300, //Transition speed
        dots: true, //Show dots
        infinite: true, //Loop slides forever
        prevArrow: false, //Don't show previous arrow
        nextArrow: false, //Don't show next arrow
    });
});

//==================== STICKY HEADER ====================//
// const nav = document.querySelector('nav');
// //Variable to store previous scroll position
// let previousScrollPosition = 0;

// //Anon function, if current scroll posit greater than prev scroll posit user is scrolling down
// const isScrollingDown = () => {
//     let currentScrolledPosition = window.scrollY || window.pageYOffset;
//     let scrollingDown;
    
//     if (currentScrolledPosition > previousScrollPosition) {
//         scrollingDown = true;
//     } else {
//         scrollingDown = false;
//     }
//     previousScrollPosition = currentScrolledPosition;
//     return scrollingDown;
// };

// //If user is scrolling down assign scroll-down class and remove scroll up, user scrolling up reverse.
// const handleNavScroll = () => {
//     if (isScrollingDown()) {
//         nav.classList.add('scroll-down');
//         nav.classList.remove('scroll-up')
        
//     } else {
//         nav.classList.add('scroll-up');
//         nav.classList.remove('scroll-down')
        
//     }
// }
let lastScrollTop; //Variable to store the top position

const navbar = document.querySelector('nav'); //Get the navbar and store it as a variable

window.addEventListener('scroll', function(){ //On every scroll this function will be called
    //Get the location of scroll
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > lastScrollTop) { //If it is greater than the previous
        navbar.style.top = '-100%'; //Move navbar of the page
    } else {
        navbar.style.top = '0'; //Keep the navbar where it is
    }
    lastScrollTop = scrollTop; //New position is stored
}); 
//==================== BURGER MENU ====================//



//==================== COOKIES POPUP ====================//






