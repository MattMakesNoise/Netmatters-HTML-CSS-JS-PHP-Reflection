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
        body.classList.remove('overflow-hidden');
    } else {
        // popup.style.display = 'block';
        body.classList.add('overflow-hidden');
    }
};
//Save to users input to storage
function saveCookie () {
    localStorage.setItem('consent', 'true');
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
    popup.style.display = 'none';
    body.classList.remove('overflow-hidden');
});

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
const body = document.body;
let lastScroll = 0; 
const sticky = document.querySelector('#static_head');

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 209) {
    body.classList.remove("scroll-up");
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
    body.classList.remove("scroll-up");
    body.classList.add("scroll-down");
  } else if (currentScroll < lastScroll && body.classList.contains("scroll-down")) {
    body.classList.remove("scroll-down");
    body.classList.add("scroll-up");
  }
  lastScroll = currentScroll;
})


//====================================================================================================//
//====================================================================================================//
//======================================== BURGER SPIN ===============================================//
//====================================================================================================//
//====================================================================================================//
const burgerButton = document.querySelector('.menu-btn');
const overlay = document.querySelector('.site-overlay');
let burgerSpin = true;
const hero = document.querySelector('.hero-wrapper'); 

burgerButton.addEventListener('click', () => {
    burgerButton.classList.add('is-active');
    body.style.overflow = 'hidden'; //Hide main page scrollbar when sidebar is open
    sticky.style.position = 'sticky'; //Make header appear at top of the page when sidebar is open
    burgerSpin = true;
    hero.classList.remove('hero-mt'); //Remove the margin top from the hero to stop page pushing down
});

overlay.addEventListener('click', () => {
    if(burgerSpin === true) {
        burgerButton.classList.remove('is-active');
        body.style.overflow = 'auto';
        sticky.style.position = 'fixed'; 
        burgerSpin = false;
        hero.classList.add('hero-mt');
    }
})

//=====================================================================================================//
//=====================================================================================================//
//======================================== SEARCH SWAP ================================================//
//=====================================================================================================//
//=====================================================================================================//
const searchBtn = document.querySelector('.search-form button');
const searchInput = document.querySelector('.search-form input[type=text]');
const support = document.querySelector('.support-wrapper');
const contact = document.querySelector('.contact-wrapper');
let searchToggle = false;

searchBtn.addEventListener('click', (e) => {
    e.preventDefault();
    if (searchToggle === false) {
        setTimeout(() => {
            support.classList.add('search-hide');
            contact.classList.add('search-hide');
        }, 200);
        setTimeout(() => {
            searchInput.classList.add('search-show');
            searchInput.classList.remove('search-hide');
        }, 500);
        searchToggle = true;
    } else if (searchToggle) {
        searchInput.classList.remove('search-show');
        searchInput.classList.add('search-hide');
        setTimeout(() => {
            support.classList.remove('search-hide');
            contact.classList.remove('search-hide');
        }, 200);
        searchToggle = false;
    }
});