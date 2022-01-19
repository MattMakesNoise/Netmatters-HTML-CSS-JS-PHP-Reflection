"use strict";

//=====================================================================================================//
//=====================================================================================================//
//======================================== COOKIES POPUP ==============================================//
//=====================================================================================================//
//=====================================================================================================//
var popup = document.querySelector('.cookies-modal-outer');
var changeSettingsBtn = document.querySelector('.change-settings');
var acceptCookiesBtn = document.querySelector('.accept-cookies');
var cookiesYorN = localStorage.getItem('consent'); //Check to see if cookie consent has been given. If not show the popup

window.onload = function () {
  getWidth();

  if (cookiesYorN === "true") {
    popup.style.display = 'none';
    body.classList.remove('overflow-hidden');
  } else {
    // popup.style.display = 'block';
    body.classList.add('overflow-hidden');
  }
}; //Save to users input to storage


function saveCookie() {
  localStorage.setItem('consent', 'true');
  cookiesYorN = localStorage.getItem('consent');
  console.log(cookiesYorN);
} //Check the storage


function cookieCheck() {
  return localStorage.getItem('consent');
} //Event listener for accept cookies


acceptCookiesBtn.addEventListener('click', function () {
  saveCookie();
  popup.style.display = 'none';
  body.classList.remove('overflow-hidden');
}); //=====================================================================================================//
//=====================================================================================================//
//======================================== GET SCREEN WIDTH ===========================================//
//=====================================================================================================//
//=====================================================================================================//

var width;
var searchWrapper = document.querySelector('.search-wrapper');
var searchBtn = document.querySelector('.search-form button');
var searchInput = document.querySelector('.search-form input[type=text]');
var support = document.querySelector('.support-wrapper');
var contact = document.querySelector('.contact-wrapper');
var searchToggle = false;

function getWidth() {
  width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}

window.addEventListener('resize', function (e) {
  getWidth();

  if (width > 1260) {
    support.style.display = 'flex';
    contact.style.display = 'flex';
    searchInput.style.display = 'block';
    searchWrapper.style.marginLeft = '0';
  } else if (width >= 992 && width < 1260 && searchToggle === false) {
    support.style.display = 'flex';
    contact.style.display = 'flex';
    searchInput.style.display = 'none';
  } else {
    support.style.display = 'none';
    contact.style.display = 'none';
    searchInput.style.display = 'block';
  }
}); //=======================================================================================================//
//=======================================================================================================//
//======================================== SLICK CAROUSEL PLUGIN ========================================//
//=======================================================================================================//
//=======================================================================================================//

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
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: false,
    //Don't show previous arrow
    nextArrow: false //Don't show next arrow

  });
}); //=======================================================================================================//
//=======================================================================================================//
//======================================== STICKY HEADER ================================================//
//=======================================================================================================//
//=======================================================================================================//

var body = document.body;
var lastScroll = 0;
var sticky = document.querySelector('#static_head');
window.addEventListener("scroll", function () {
  var currentScroll = window.pageYOffset;

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
}); //====================================================================================================//
//====================================================================================================//
//======================================== BURGER SPIN ===============================================//
//====================================================================================================//
//====================================================================================================//

var burgerButton = document.querySelector('.menu-btn');
var overlay = document.querySelector('.site-overlay');
var burgerSpin = true;
var hero = document.querySelector('.hero-wrapper');
burgerButton.addEventListener('click', function () {
  burgerButton.classList.add('is-active');
  body.style.overflow = 'hidden'; //Hide main page scrollbar when sidebar is open

  sticky.style.position = 'sticky'; //Make header appear at top of the page when sidebar is open

  burgerSpin = true;
  hero.classList.remove('hero-mt'); //Remove the margin top from the hero to stop page pushing down
});
overlay.addEventListener('click', function () {
  if (burgerSpin === true) {
    burgerButton.classList.remove('is-active');
    body.style.overflow = 'auto';
    sticky.style.position = 'fixed';
    burgerSpin = false;
    hero.classList.add('hero-mt');
  }
}); //=====================================================================================================//
//=====================================================================================================//
//======================================== SEARCH SWAP ================================================//
//=====================================================================================================//
//=====================================================================================================//

searchBtn.addEventListener('click', function (e) {
  e.preventDefault();
  console.log('clicked!');

  if (width >= 992 && width < 1260) {
    if (searchToggle === false) {
      setTimeout(function () {
        support.style.display = 'none';
        contact.style.display = 'none';
      }, 200);
      setTimeout(function () {
        searchInput.style.display = 'block';
        searchWrapper.style.marginLeft = '26px';
      }, 500);
      searchToggle = true;
    } else if (searchToggle) {
      setTimeout(function () {
        searchInput.style.display = 'none';
        searchWrapper.style.marginLeft = '0';
      }, 200);
      setTimeout(function () {
        support.style.display = 'flex';
        contact.style.display = 'flex';
      }, 500);
      searchToggle = false;
    }
  }
}); //=====================================================================================================//
//=====================================================================================================//
//======================================== FORM VALIDATION ============================================//
//=====================================================================================================//
//=====================================================================================================//

var enqForm = document.querySelector('.enquiry-form');
var enqBtn = document.querySelector('.enquiry-btn');
var enqName = document.querySelector('#enqName');
var enqEmail = document.querySelector('#enqEmail');
var enqTel = document.querySelector('#enqTel');
var enqSubj = document.querySelector('#enqSubject');
var enqMsg = document.querySelector('#enqMessage');
var shouldSubmit = false; //get the values from the inputs

var nameVal;
var emailVal;
var telVal;
var subjVal;
var msgVal;

function getVals() {
  nameVal = enqName.value.trim();
  emailVal = enqEmail.value.trim();
  telVal = enqTel.value.trim();
  subjVal = enqSubj.value.trim();
  msgVal = enqMsg.value.trim();
} //check if inputs blank


function inputsBlank() {
  if (nameVal == "") {
    enqName.classList.add('has-error');
    shouldSubmit = false;
  } else if (nameVal != "") {
    enqName.classList.remove('has-error');
    shouldSubmit = true;
  }

  if (emailVal == "") {
    enqEmail.classList.add('has-error');
    shouldSubmit = false;
  } else if (emailVal != "") {
    enqEmail.classList.remove('has-error');
    shouldSubmit = true;
  }

  if (telVal == "") {
    enqTel.classList.add('has-error');
    shouldSubmit = false;
  } else if (telVal != "") {
    enqTel.classList.remove('has-error');
    shouldSubmit = true;
  }

  if (subjVal == "") {
    enqSubj.classList.add('has-error');
    shouldSubmit = false;
  } else if (subjVal != "") {
    enqSubj.classList.remove('has-error');
    shouldSubmit = true;
  }

  if (msgVal == "") {
    enqMsg.classList.add('has-error');
    shouldSubmit = false;
  } else if (msgVal != "") {
    enqMsg.classList.remove('has-error');
    shouldSubmit = true;
  }
} //Click event listener


enqBtn.addEventListener('click', function (e) {
  console.log("You clicked the enquiry button");
  getVals();
  inputsBlank();
}); //Submit event listener

enqForm.addEventListener('submit', function (e) {
  console.log("You tried to send an enquiry"); //get the values from the inputs

  getVals();

  if (!shouldSubmit) {
    e.preventDefault();
  }
}); //=====================================================================================================//
//=====================================================================================================//
//======================================== OUT OF HOURS ACCORDIAN =====================================//
//=====================================================================================================//
//=====================================================================================================//

var accordianButton = document.querySelector('#accordian-btn');
var accordian = document.querySelector('.out-of-hours-accordian');
var accordianOpen = false;
accordianButton.addEventListener('click', function (e) {
  e.preventDefault();
  console.log("clicked the accordian");
});