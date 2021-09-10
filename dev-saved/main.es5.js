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
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: false,
    //Don't show previous arrow
    nextArrow: false //Don't show next arrow

  });
}); //======================================== STICKY HEADER ================================================//

var staticHead = document.querySelector('#static_head');
var buffer = 0;
var oldScrollPosition = 0;
var newnewScrollPosition;
var afterHeader = staticHead.clientHeight;
var floatyHead = staticHead.cloneNode(true); //copies statichead

floatyHead.id = 'floaty_head'; //gives the cloned header a defined value

floatyHead.classList.add("floaty_default"); // I added this because the default visibility override, and can reference this in if statement to make things easier to read

var headerElement = document.querySelector('header');
headerElement.appendChild(floatyHead);
var mainDiv = document.querySelector(".page-wrapper"); // When we detect scrolling

mainDiv.addEventListener('scroll', function () {
  // Get the value
  newScrollPosition = mainDiv.scrollTop;
  var ua = navigator.userAgent;
  /* MSIE used to detect old browsers and Trident used to newer ones*/

  var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;

  if (!is_ie || is_ie && newScrollPosition - oldScrollPosition != 0) {
    var hasJustScrolledUp = newScrollPosition < oldScrollPosition;
    var isFarDownPage = newScrollPosition > afterHeader;

    if (hasJustScrolledUp && isFarDownPage) {
      console.log('show!');
      floatyHead.classList.add("floaty_animation_up");
      floatyHead.classList.remove("floaty_animation_down");
      floatyHead.classList.remove("floaty_default");
    } else {
      console.log('hide');
      floatyHead.classList.remove("floaty_animation_up");
      floatyHead.classList.add("floaty_animation_down");
      floatyHead.classList.remove("floaty_default");
    }

    oldScrollPosition = newScrollPosition;
  }
}); //======================================== COOKIES POPUP ==============================================//

var popup = document.querySelector('.cookies-modal-outer');
var changeSettingsBtn = document.querySelector('.change-settings');
var acceptCookiesBtn = document.querySelector('.accept-cookies');
var cookiesYorN = localStorage.getItem('consent'); //Check to see if cookie consent has been given. If not show the popup

window.onload = function () {
  if (cookiesYorN === "true") {
    popup.style.display = 'none';
  } else {
    popup.style.display = 'block';
  }
}; //Save to users input to storage


function saveCookie() {
  localStorage.setItem('consent', 'true');
  console.log(localStorage);
  cookiesYorN = localStorage.getItem('consent');
  console.log(cookiesYorN);
} //Check the storage


function cookieCheck() {
  return localStorage.getItem('consent');
} //Make sure the user can't close the modal by escaping or clicking out of it.
//Event listener for accept cookies


acceptCookiesBtn.addEventListener('click', function () {
  saveCookie();
  console.log('You accepted the cookies');
  popup.style.display = 'none';
});