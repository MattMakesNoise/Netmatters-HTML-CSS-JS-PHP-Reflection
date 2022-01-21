//=====================================================================================================//
//=====================================================================================================//
//======================================== COOKIES POPUP ==============================================//
//=====================================================================================================//
//=====================================================================================================//
const body = document.body;
const popup = document.querySelector('.cookies-modal-outer');
const changeSettingsBtn = document.querySelector('.change-settings');
const acceptCookiesBtn = document.querySelector('.accept-cookies');
let cookiesYorN = localStorage.getItem('consent');
const success = document.querySelector('.enq-form-success');
//Check the storage
function cookieCheck() {
    return localStorage.getItem('consent');
}
//Check to see if cookie consent has been given. If not show the popup
window.onload = function() {
    getWidth();
    if(width < 1260) {
        searchWrapper.style.marginLeft = '0';
    }
    if(cookiesYorN != "true") {
        popup.style.display = 'flex';
        body.classList.add('overflow-hidden');
    } else {
        body.classList.remove('overflow-hidden');
    }
    setTimeout(() => {
        success.classList.remove('display');
    }, 5000);
};
//Save to users input to storage
function saveCookie() {
    localStorage.setItem('consent', 'true');
    cookiesYorN = localStorage.getItem('consent');
    console.log(cookiesYorN);
}
//Event listener for accept cookies
acceptCookiesBtn.addEventListener('click', () => {
    saveCookie();
    popup.style.display = 'none';
    body.classList.remove('overflow-hidden');
});

//=====================================================================================================//
//=====================================================================================================//
//======================================== GET SCREEN WIDTH ===========================================//
//=====================================================================================================//
//=====================================================================================================//
let width;
const searchWrapper = document.querySelector('.search-wrapper');
const searchBtn = document.querySelector('.search-form button');
const searchInput = document.querySelector('.search-form input[type=text]');
const support = document.querySelector('.support-wrapper');
const contact = document.querySelector('.contact-wrapper');
let searchToggle = false;

function getWidth() {
    width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}
window.addEventListener('resize', (e) => {
    getWidth();
    if(width > 1260) {
        support.style.display = 'flex';
        contact.style.display = 'flex';
        searchInput.style.display = 'block';
        searchWrapper.style.marginLeft = '0';
        
    } else if(width >= 992 && width < 1260 && searchToggle === false) {
        support.style.display = 'flex';
        contact.style.display = 'flex';
        searchInput.style.display = 'none';
    } else {
        support.style.display = 'none';
        contact.style.display = 'none';
        searchInput.style.display = 'block';
    }
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
let lastScroll = 0; 
const sticky = document.querySelector('#static_head');

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if(currentScroll <= 209) {
    body.classList.remove("scroll-up");
    return;
  }

  if(currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
    body.classList.remove("scroll-up");
    body.classList.add("scroll-down");
  } else if(currentScroll < lastScroll && body.classList.contains("scroll-down")) {
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
searchBtn.addEventListener('click', (e) => {
    e.preventDefault();
    console.log('clicked!');
    if (width >= 992 && width < 1260) {
        if(searchToggle === false) {
            setTimeout(() => {
                support.style.display = 'none';
                contact.style.display = 'none';
            }, 200);
            setTimeout(() => {
                searchInput.style.display = 'block';
                searchWrapper.style.marginLeft = '26px';
            }, 500);
            searchToggle = true;
        } else if(searchToggle) {
            setTimeout(() => {
                searchInput.style.display = 'none';
                searchWrapper.style.marginLeft = '0';
            }, 200);
            setTimeout(() => {
                support.style.display = 'flex';
                contact.style.display = 'flex';
            }, 500);
            searchToggle = false;
        }
    } 
});
//=====================================================================================================//
//=====================================================================================================//
//======================================== FORM VALIDATION ============================================//
//=====================================================================================================//
//=====================================================================================================//
const enqForm = document.querySelector('.enquiry-form');
const enqBtn = document.querySelector('.enquiry-btn');
const enqName = document.querySelector('#enqName');
const enqEmail = document.querySelector('#enqEmail');
const enqTel = document.querySelector('#enqTel');
const enqSubj = document.querySelector('#enqSubject');
const enqMsg = document.querySelector('#enqMessage');
let shouldSubmit = false;
//get the values from the inputs
let nameVal; 
let emailVal; 
let telVal; 
let subjVal;
let msgVal;
function getVals() {
    nameVal = enqName.value.trim();
    emailVal = enqEmail.value.trim();
    telVal = enqTel.value.trim();
    subjVal = enqSubj.value.trim();
    msgVal = enqMsg.value.trim();
}
//check if inputs blank
function inputsBlank() {
    if(nameVal == "") {
        enqName.classList.add('has-error');
        shouldSubmit = false;
    } else if(nameVal != "") {
        enqName.classList.remove('has-error');
        shouldSubmit = true;
    }
    if(emailVal == "") {
        enqEmail.classList.add('has-error');
        shouldSubmit = false;
    } else if(emailVal != "") {
        enqEmail.classList.remove('has-error');
        shouldSubmit = true;
    }
    if(telVal == "") {
        enqTel.classList.add('has-error');
        shouldSubmit = false;
    } else if(telVal != "") {
        enqTel.classList.remove('has-error');
        shouldSubmit = true;
    }
    if(subjVal == "") {
        enqSubj.classList.add('has-error');
        shouldSubmit = false;
    } else if(subjVal != "") {
        enqSubj.classList.remove('has-error');
        shouldSubmit = true;
    }
    if(msgVal == "") {
        enqMsg.classList.add('has-error');
        shouldSubmit = false;
    } else if(msgVal != "") {
        enqMsg.classList.remove('has-error');
        shouldSubmit = true;
    }
}
//Click event listener
enqBtn.addEventListener('click', (e) => {
    console.log("You clicked the enquiry button");
    getVals()
    inputsBlank();
})

//Submit event listener
enqForm.addEventListener('submit', (e) => {
    console.log("You tried to send an enquiry");
    //get the values from the inputs
    getVals();
    if(!shouldSubmit) {
        e.preventDefault();
    } 
})
//=====================================================================================================//
//=====================================================================================================//
//======================================== OUT OF HOURS ACCORDIAN =====================================//
//=====================================================================================================//
//=====================================================================================================//
const accordianButton = document.querySelector('#accordian-btn');
const accordian = document.querySelector('.out-of-hours-accordian');
let accordianOpen = false;

accordianButton.addEventListener('click', (e) => {
    console.log("clicked the accordian");
    if(!accordianOpen) {
        accordian.classList.add('display');
        accordianOpen = true;
    } else {
        accordian.classList.remove('display');
        accordianOpen = false;
    }
})