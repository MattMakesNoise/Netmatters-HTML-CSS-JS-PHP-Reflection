//=======================================================================================================//
//=======================================================================================================//
//======================================== SLICK CAROUSEL PLUGIN ========================================//
//=======================================================================================================//
//=======================================================================================================//
$(document).ready(function(){
    $('.carousel').slick({
        autoplay: true,
        autoplaySpeed: 5000, //Time between slides
        speed: 300, //Transition speed
        dots: true, //Show dots
        infinite: true, //Loop slides forever
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: false, //Don't show previous arrow
        nextArrow: false //Don't show next arrow
    });
});

//=======================================================================================================//
//=======================================================================================================//
//======================================== STICKY HEADER ================================================//
//=======================================================================================================//
//=======================================================================================================//
var mainBody = document.getElementById('container');

if (Modernizr.hiddenscroll === true) {
    $('#sticky').css("width", "100%");
  } else {
    $('#sticky').css("width", mainBody.clientWidth);
  }
  
  $(window).resize(function () {
    $('#sticky').css("width", mainBody.clientWidth);
  }); 

var prevScrollpos = 0;

mainBody.onscroll = function () {
  var currentScrollPos = $(this).scrollTop();

  if (currentScrollPos > prevScrollpos && currentScrollPos >= 208) {
    $("#sticky").css({
      top: '-214px'
    });
  } else {
    $("#sticky").css({
      top: '0px'
    });
  }

  prevScrollpos = currentScrollPos;
}; 


//======================================== OLD, SHIT, REDUNDANT, STINKY =================================//
// const staticHead = document.querySelector('#static_head');

// let buffer = 0
// let oldScrollPosition = 0;
// let newScrollPosition;

// const afterHeader = staticHead.clientHeight;

// const floatyHead = staticHead.cloneNode(true); //copies statichead

// floatyHead.id = 'floaty_head'; //gives the cloned header a defined value
// floatyHead.classList.add("floaty_default"); // I added this because the default visibility override, and can reference this in if statement to make things easier to read

// const headerElement = document.querySelector('header');
// headerElement.appendChild(floatyHead);

// const mainDiv = document.querySelector(".page-wrapper");

// // When we detect scrolling
// mainDiv.addEventListener('scroll', function() {
//     // Get the value
//     newScrollPosition = mainDiv.scrollTop;
//     let ua = navigator.userAgent;
//     /* MSIE used to detect old browsers and Trident used to newer ones*/
//     let is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

//     if (!is_ie || (is_ie && (newScrollPosition - oldScrollPosition) != 0)) {
//         const hasJustScrolledUp = newScrollPosition < oldScrollPosition;
//         const isFarDownPage = newScrollPosition > afterHeader;

//         if (hasJustScrolledUp && isFarDownPage) {
//             console.log('show!');
//             floatyHead.classList.add("floaty_animation_up");
//             floatyHead.classList.remove("floaty_animation_down");
//             floatyHead.classList.remove("floaty_default");
//         } else {
//             console.log('hide');
//             floatyHead.classList.remove("floaty_animation_up");
//             floatyHead.classList.add("floaty_animation_down");
//             floatyHead.classList.remove("floaty_default");

//         }
//         oldScrollPosition = newScrollPosition;
//     } 
// });

//=====================================================================================================//
//=====================================================================================================//
//======================================== COOKIES POPUP ==============================================//
//=====================================================================================================//
//=====================================================================================================//
const popup = document.querySelector('.cookies-modal-outer');
const changeSettingsBtn = document.querySelector('.change-settings');
const acceptCookiesBtn = document.querySelector('.accept-cookies');
let cookiesYorN = localStorage.getItem('consent');

//Check to see if cookie consent has been given. If not show the popup
window.onload = function() {
    if(cookiesYorN === "true") {
        popup.style.display = 'none';
    } else {
        popup.style.display = 'block';
    }
};
//Save to users input to storage
function saveCookie () {
    localStorage.setItem('consent', 'true');
    console.log(localStorage);
    cookiesYorN = localStorage.getItem('consent');
    console.log(cookiesYorN);
}
//Check the storage
function cookieCheck () {
    return localStorage.getItem('consent');
}
//Event listener for accept cookies
acceptCookiesBtn.addEventListener('click', () => {
    saveCookie();
    console.log('You accepted the cookies');
    popup.style.display = 'none';
});

//====================================================================================================//
//====================================================================================================//
//======================================== BURGER SPIN ===============================================//
//====================================================================================================//
//====================================================================================================//
const burgerButton = document.querySelector('#burger2');
const overlay = document.querySelector('.site-overlay');
let burgerSpin = true;
const bodySelect = document.querySelector('body');
const sticky = document.querySelector('#sticky');
// const floatyHeader = document.querySelector('#floaty_head');
// const burgerButtonFloaty = document.querySelector('#floaty_head .nav-bar .header .hamburger');

//FIXED HEADER SCRIPT
burgerButton.addEventListener('click', () => {
    burgerButton.classList.add('is-active');
    sticky.classList.add('headpush');
    burgerSpin = true;
});

overlay.addEventListener('click', () => {
    if(burgerSpin === true) {
        burgerButton.classList.remove('is-active');
        sticky.classList.remove('headpush');
        burgerSpin = false;
    }
})

//FLOATY HEADER SCRIPT
// burgerButtonFloaty.addEventListener('click', () => {
//     console.log('You clicked the floaty burger broski!');
//     burgerButtonFloaty.classList.add('is-active');
//     bodySelect.classList.add('pushy-open-right');
//     burgerSpin = true;
//     floatyHead.classList.add('headpush');
// })

