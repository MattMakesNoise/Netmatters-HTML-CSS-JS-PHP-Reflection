"use strict";

//======================================== SLICK CAROUSEL PLUGIN ========================================//
$(document).ready(function () {
  $('.carousel').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    //Time between slides
    speed: 300,
    //Transition speed
    dots: true,
    //Show dots
    infinite: true,
    //Loop slides forever
    prevArrow: false,
    //Don't show previous arrow
    nextArrow: false //Don't show next arrow

  });
}); //======================================== STICKY HEADER ================================================//

var lastScrollTop; //Variable to store the top position

var navbar = document.querySelector('.navbar-wrapper'); //Get the navbar and store it as a variable

window.addEventListener('scroll', function () {
  //On every scroll this function will be called
  //Get the location of scroll
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    //If it is greater than the previous
    navbar.style.top = '-100%'; //Move navbar of the page
  } else {
    navbar.style.top = '0'; //Keep the navbar where it is
  }

  lastScrollTop = scrollTop; //New position is stored
}); //======================================== BURGER MENU ==================================================//

var burger = document.querySelector(".hamburger");
var sidebar = document.querySelector(".sidebar");
var pageWrapper = document.querySelector(".page-wrapper");
burger.addEventListener('click', function () {
  burger.classList.add('is-active'); // pageWrapper.classList.toggle('sidebar-show');
  // sidebar.classList.toggle('sidebar-show');
  // console.log('You clicked the burger!');
}); // const burger = document.querySelector(".hamburger");
// const sidebar = document.querySelector(".sidebar");
// const pageWrapper = document.querySelector(".page-wrapper");
// // burger.addEventListener('click', () => {
// //     burger.classList.toggle('is-active');
// //     pageWrapper.classList.toggle('sidebar-show');
// //     sidebar.classList.toggle('sidebar-show');
// //     // console.log('You clicked the burger!');
// //     pageWrapper.addEventListener('click', () => {
// //         closeMenu();
// //         console.log('You clicked the pagewrapper!');
// //     })
// // })
// let showMenu = false;
// burger.addEventListener('click', () => {
//     if(showMenu === false) {
//         openMenu();
//         console.log('You clicked the burger bruv!');
//     }
// });
// function openMenu() { 
//     burger.classList.add('is-active');
//     sidebar.classList.add('sidebar-show');
//     pageWrapper.classList.add('sidebar-show');
//     pageWrapper.addEventListener('click', () => {
//         if(showMenu === true) {
//             setTimeout
//             closeMenu();
//             console.log('You only went and clicked the frickin page wrapper geez!');
//         }
//     });
//     showMenu = true;
// }
// function closeMenu() {
//     burger.classList.remove('is-active');
//     sidebar.classList.remove('sidebar-show');
//     pageWrapper.classList.remove('sidebar-show');
//     pageWrapper.removeEventListener('click', closeMenu);
//     showMenu = false;
// }
// pageWrapper.addEventListener('click', () => {
//     if(showMenu === true) {
//         closeMenu();
//         console.log('You only went and clicked the frickin page wrapper geez!');
//     }
// });
// function closeMenu() {
//     burger.classList.remove('is-active');
//     sidebar.classList.remove('sidebar-show');
//     pageWrapper.classList.remove('sidebar-show');
// }
// function closeNav() {
//     burger.classList.remove('is-active');
//     sidebar.classList.remove('sidebar-show');
//     pageWrapper.classList.remove('sidebar-show');
// }
// burger.addEventListener('click', () => {
//     burger.classList.toggle('is-active');
//     pageWrapper.classList.toggle('sidebar-show');
//     sidebar.classList.toggle('sidebar-show');
// })
// pageWrapper.addEventListener('click', () => {
//     if (burger.classList.contains('is-active')) {
//         closeNav();
//         console.log('You clicked me!');
//     }
// })
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