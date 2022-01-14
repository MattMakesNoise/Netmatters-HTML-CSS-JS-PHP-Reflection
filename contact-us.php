<?php 
    //connect to database
    require 'db/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <!-- Pushy CSS file
    <link rel="stylesheet" href="/css/pushy.css"> -->
    <!-- Leaflet CSS File -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <!-- Maps JS and CSS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css' rel='stylesheet' />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="/dist/style.min.css"> 
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/8ac16a56cb.js" crossorigin="anonymous"> </script>
    <title>Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters</title>
</head>
<body>
<!-- INCLUDE THE HEADER -->
<?php
    include('inc/header.php'); 
?>

<!-- PAGE WRAPPER -->
<main class="page-wrapper hero-mt" id="container">
    <!-- TOP BANNER START -->
    <div class="contact-banner-wrapper">
        <h1>Our Offices</h1>
    </div>
    <!-- TOP BANNER END -->

    <!-- LOCATION CARDS START -->
    <div class="location-card-container">
        <!-- CAMBRIDGE CARD START -->
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
                    <div class="location-tel-wrapper">
                        <a class="location-tel-no">01223 37 57 72</a>
                    </div>
                    <div class="location-btn-wrapper">
                        <a href="#" class="location-btn">View More</a>
                    </div>
                </div>
            </div>
            <div id='map-cambridge'></div>
        </div>
        <!-- CAMBRIDGE CARD END -->

        <!-- WYMONDHAM CARD START -->
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
                    <div class="location-tel-wrapper">
                    <a class="location-tel-no">01603 70 40 20</a>
                    </div>
                    <div class="location-btn-wrapper">
                        <a href="#" class="location-btn">View More</a>
                    </div>
                </div>
            </div>
            <div id="map-wymondham"></div>
        </div>
        <!-- WYMONDHAM CARD END -->

        <!-- YARMOUTH CARD START -->
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
                    <div class="location-tel-wrapper">
                        <a class="location-tel-no">01493 60 32 04</a>
                    </div>
                    <div class="location-btn-wrapper">
                        <a href="#" class="location-btn">View More</a>
                    </div>
                </div>
            </div>
            <div id="map-yarmouth"></div>
        </div>
        <!-- YARMOUTH CARD END -->
    </div>
    <!-- LOCATION CARDS END -->

    <!-- OPENING TIMES AND CONTACT FORM STARTS-->
    <div class="bottom-wrapper">
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
            <form action="/inc/enquiry-form.php" method="POST" class="enquiry-form">

                <label for="inputNameContact" class="form-label">Your Name <span class="make-red">*</span></label>
                <input type="text" name="enq_name" class="form-control">

                <label for="inputEmailContact" class="form-label">Your Email <span class="make-red">*</span></label>
                <input type="text" name="enq_email" class="form-control">

                <label for="inputTelContact" class="form-label">Your Telephone Number <span class="make-red">*</span></label>
                <input type="text" name="enq_tel" class="form-control">

                <label for="inputSubjectContact" class="form-label">Subject <span class="make-red">*</span></label>
                <input type="text" name="enq_subject" class="form-control">

                <label for="inputMessageContact" class="form-label">Message <span class="make-red">*</span></label>
                <textarea name="enq_message" id="inputMessageContact" class="form-control"></textarea>

                <label class="checkbox-container">Please tick this box if you wish to receive marketing information from us.
                Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we use your data.
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>

                <button type="submit" name="submit" class="enquiry-btn">SEND ENQUIRY</button>

            </form>    
            <?php
            /* 
                //MESSAGE VARS
                $formMessage = '';
                $formMessageClass = '';
                //CHECK FOR SUBMIT
                if(filter_has_var(INPUT_POST, 'submit')) {
                    //GET FORM DATA
                    $name = filter_input(INPUT_POST, 'inputNameContact', FILTER_SANITIZE_STRING); 
                    $email = filter_input(INPUT_POST, 'inputEmailContact', FILTER_SANITIZE_STRING);
                    $tel = filter_input(INPUT_POST, 'inputTelContact', FILTER_SANITIZE_STRING);
                    $subject = filter_input(INPUT_POST, 'inputSubjectContact', FILTER_SANITIZE_STRING);
                    $msg = filter_input(INPUT_POST, 'inputMessageContact', FILTER_SANITIZE_STRING);
                    //CHECK REQUIRED FIELDS
                    if(!empty($name) && !empty($email) && !empty($tel) && !empty($subject) && !empty($msg)) {
                        //PASSED
                        //CHECK EMAIL
                        if($email === false) {
                            //Failed
                            $formMessage = 'Please use a valid email';
                            $formMessageClass = 'make-red';
                        } else {
                            //Passed
                            echo 'EMAIL PASSED!';
                        }
                        echo 'PASSED!';
                    } else {
                        //FAILED
                        $formMessage = 'Please fill in all fields';
                        $formMessageClass = 'make-red';
                    }
                }
                if($formMessage != '') {
                    echo '<div class="'. $formMessageClass .'">'. $formMessage .'</div>';
                }
                    
                */
            ?> 
            <!-- <form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="POST" class="enquiry-form">
                <div class="enquiry-boxes">
                    <div class="name-mail">
                        <div class="name-wrap">
                            <label for="inputNameContact" class="form-label">Your Name <span class="make-red">*</span></label>
                            <input name="inputNameContact" type="text" value="<?php //echo isset($_POST['name']) ? $name : ''; ?>" class="form-control" id="inputNameContact">
                        </div>
                        <div class="mail-wrap">
                            <label for="inputEmailContact" class="form-label">Your Email <span class="make-red">*</span></label>
                            <input name="inputEmailContact" type="email" value="<?php //echo isset($_POST['email']) ? $email : ''; ?>" class="form-control" id="inputEmailContact">
                        </div>
                    </div>
                    <div class="tel-subject">
                        <div class="tel-no-wrap">
                            <label for="inputTelContact" class="form-label">Your Telephone Number <span class="make-red">*</span></label>
                            <input name="inputTelContact" type="tel" value="<?php //echo isset($_POST['tel']) ? $tel : ''; ?>" class="form-control" id="inputTelContact">
                        </div>
                        <div class="subject-wrap">
                            <label for="inputSubjectContact" class="form-label">Subject <span class="make-red">*</span></label>
                            <input name="inputSubjectContact" type="text" value="<?php //echo isset($_POST['subject']) ? $subject : ''; ?>" class="form-control" id="inputSubjectContact">
                        </div>
                    </div>
                    <div class="message-wrap">
                        <label for="inputMessageContact" class="form-label">Message <span class="make-red">*</span></label>
                        <textarea name="inputMessageContact" type="text" class="form-control" id="inputMessageContact"><?php //echo isset($_POST['msg']) ? $msg : ''; ?></textarea>
                    </div>
                </div>
                <label class="checkbox-container">Please tick this box if you wish to receive marketing information from us.
                Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we use your data.
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <button type="submit" name="submit" value="submit" class="enquiry-btn">Send Enquiry</button>
            </form> -->
        </div>
        <!-- ENQUIRY FORM END -->
    </div>
    <!-- OPENING TIMES AND CONTACT FORM ENDS-->
</main>

<!-- INCLUDE THE FOOTER -->
<?php
    include('inc/footer.php'); 
?>
<!-- SCRIPT FOR MAP JS -->
<script src="/js/map.js"></script>
<!-- SCRIPT FOR JQUERY -->
<script src="/js/jquery-3.6.0.min.js"></script>
<!-- SCRIPT FOR SLICK CAROUSEL -->
<script src="/js/slick.min.js"></script>
<!-- SCRIPT FOR PUSHY SIDEBAR -->
<script src="js/pushy.min.js"></script>
<!-- MAIN JS FILE -->
<script src="/js/main.js"></script>
</body>
</html>