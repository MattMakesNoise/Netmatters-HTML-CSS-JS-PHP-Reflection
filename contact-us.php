<?php
    include('inc/header.php'); 
?>
<!DOCTYPE html>
<html>
<!-- PAGE WRAPPER -->
<main class="page-wrapper" id="container">
<div class="contact-body-wrapper hero-mt">
    <!-- TOP BANNER START -->
    <div class="contact-banner-wrapper">
        <h1>Our Offices</h1>
    </div>
    <!-- TOP BANNER END -->

    <!-- LOCATION CARDS START -->
    <div class="location-card-container">
        <div class="location-card cambridge-card">
            <div class="location-card-main">
                <div class="location-img-wrap">
                    <div class="location-img-top cambridge">
                        <img src="img/cambridge.jpg" alt="Cambridge Office">
                    </div>
                </div>
                <div class="location-body">
                    <h2 class="location-title">Cambridge Office</h2>
                    <p class="location-address">
                        Unit 1.28, <br>
                        St John's Innovation Centre, <br>
                        Cowley Road, Milton, <br>
                        Cambridge, <br>
                        CB4 0WS
                    </p>
                    <a class="location-tel-no">01223 37 57 72</a>
                    <a href="#" class="location-btn">View More</a>
                </div>
            </div>
            <div id='map-cambridge'>
            
            </div>
        </div>
        
        <div class="location-card wymondham-card">
            <div class="location-card-main">
                <div class="location-img-wrap">
                    <div class="location-img-top wymondham">
                        <img src="img/wymondham.jpg" alt="Wymondham Office">
                    </div>
                </div>
                <div class="location-body">
                    <h2 class="location-title">Wymondham Office</h2>
                    <p class="location-address">
                        Unit 15, <br>
                        Penfold Drive, <br>
                        Gateway 11 Business Park, <br>
                        Wymondham, Norfolk <br>
                        NR18 0WZ
                    </p>
                    <a class="location-tel-no">01603 70 40 20</a>
                    <a href="#" class="location-btn">View More</a>
                </div>
            </div>
            <div id="map-wymondham">
            
            </div>
        </div>
        
        <div class="location-card yarmouth-card">
            <div class="location-card-main">
                <div class="location-img-wrap">
                    <div class="location-img-top yarmouth">
                        <img src="img/yarmouth-2.jpg" alt="Great Yarmouth Office">
                    </div>
                </div>
                <div class="location-body">
                    <h2 class="location-title">Great Yarmouth Office</h2>
                    <p class="location-address">
                        Suite F23, <br>
                        Beacon Innovation Centre, <br>
                        Beacon Park, Gorleston, <br>
                        Great Yarmouth, Norfolk <br>
                        NR31 7RA
                    </p>
                    <a class="location-tel-no">01493 60 32 04</a>
                    <a href="#" class="location-btn">View More</a>
                </div>
            </div>
            <div id="map-yarmouth">
            
            </div>
        </div>
        
        
    </div>
    <!-- LOCATION CARDS END -->

    <!-- OPENING TIMES START -->
    <div class="opening-times-wrapper">
        <p class="opening-times-p">
            <strong>Email us on:</strong>
            <br>
        </p>
        <p class="opening-times-p">
            <a href="mailto:sales@netmatters.com" class="sales-email">sales@netmatters.com</a>
        </p>
        <p class="opening-times-p">
            <strong>Business hours:</strong>
        </p>
        <p class="opening-times-p">
            <strong>Monday - Friday 07:00 - 18:00&nbsp;</strong>
        </p>
        <div class="out-of-hours-wrapper">
            <div class="out-of-hours-header" id="accordian-btn">
                <h4>
                    <!-- <a href=""> -->
                        <p>Out of Hours IT Support</p>
                        <span class="fas fa-chevron-down"></span>
                    <!-- </a> -->
                </h4>
            </div>
            <div class="out-of-hours-accordian">
                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical Tasks</p>
                <p>
                    <strong>Monday - Friday 18:00 - 22:00</strong>
                    <strong>Saturday 08:00 - 16:00</strong>
                    <br>
                    <strong>Sunday 10:00 - 18:00</strong>
                </p>
                <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp;voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
            </div>
        </div>
    </div>
    <!-- OPENING TIMES END -->

    <!-- ENQUIRY FORM START -->
    <div class="enquiry-form-wrapper">
        <form action="" class="enquiry-form">
        <div class="boxes">
            <div class="name-wrapper">
                <label for="inputName" class="form-label">Your Name <span class="make-red">*</span></label>
                <input type="text" class="form-control" id="inputName">
            </div>
            <div class="mail-wrapper">
                <label for="inputEmail" class="form-label">Your Email <span class="make-red">*</span></label>
                <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="tel-no-wrapper">
                <label for="telephone" class="form-label">Your Telephone Number <span class="make-red">*</span></label>
                <input type="tel" class="form-control" id="inputTel">
            </div>
            <div class="subject-wrapper">
                <label for="subject" class="form-label">Subject <span class="make-red">*</span></label>
                <input type="text" class="form-control" id="inputSubject">
            </div>
            <div class="message-wrapper">
                <label for="message" class="form-label">Message <span class="make-red">*</span></label>
                <input type="text" class="form-control" id="inputMessage">
            </div>
        </div>
        <label class="checkbox-container">Please tick this box if you wish to receive marketing information from us.
        Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we use your data.
            <input type="checkbox">
            <span class="checkmark"></span>
        </label>
        <button type="submit" class="enquiry-btn">Send Enquiry</button>
        </form>
        
    </div>
    <!-- ENQUIRY FORM END -->
</div>
</main>


<?php
    include('inc/footer.php'); 
?>
<script src="/js/map.js"></script>
</html>