//======================================== SLICK CAROUSEL PLUGIN ========================================//
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

//======================================== STICKY HEADER ================================================//
let lastScrollTop; //Variable to store the top position

const navbar = document.querySelector('.navbar-wrapper'); //Get the navbar and store it as a variable

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
//======================================== BURGER MENU ==================================================//
const burger = document.querySelector('.hamburger');
const sidebar = document.querySelector(".sidebar");
const pageWrapper = document.querySelector(".page-wrapper");

burger.addEventListener('click', () => {
    burger.classList.toggle('is-active');
    pageWrapper.classList.toggle('sidebar-show');
    sidebar.classList.toggle('sidebar-show');
    // openOverlay();
})

// function openOverlay() {
//     pageWrapper:after.style.backgroundColor = 'rgba(0,0,0,0.4)';
// }
// function closeOverlay() {
//     document.body.style.backgroundColor = 'white';
// }





























// burger.addEventListener("click", function () {
//     openSidebar();
// });

// //Set width of sidebar and right margin of the page body and make page body opaque.
// function openSidebar () {
//     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
//     document.sidebar.style.width = "350px";
//     pageWrapper.style.marginRight = "350px";
//     // function sidebarSize(belowLarge) {
//     //     if(belowLarge.matches) { //If media query matches
//     //         document.sidebar.style.width = "275px";
//     //         pageWrapper.style.marginRight = "275px";
//     //     } else {
//     //         document.sidebar.style.width = "350px";
//     //         pageWrapper.style.marginRight = "350px";
//     //     }
//     // }
//     // sidebarSize(belowLarge) //Call listener function at run time
//     // belowLarge.addEventListener(sidebarSize) //Attach listener function on state changes
// }
// //Set width if sidebar and right margin of the page body to 0 and page body to normal
// function closeSidebar () {
//     document.body.style.backgroundColor = "white";
//     document.sidebar.style.width = "0";
//     pageWrapper.style.marginRight = "0";
// }


//======================================== COOKIES POPUP ==============================================//






