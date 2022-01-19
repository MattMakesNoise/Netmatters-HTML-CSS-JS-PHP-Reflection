<?php 
    session_start();
    $dispSuccess = "";
    if(isset($_SESSION['success'])) {
        if($_SESSION['success'] == 'success') {
            $dispSuccess = 'display';
        } elseif($_SESSION['success'] == 'fail') {
            $dispSuccess = '';
        } 
    }
    //======================================== CONNECT TO THE DATABASE ================================================//
    require 'db/connect.php';
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     header('Location: location: /contact-us.php');
    //     exit;
    // }
    //======================================== SANITIZE AND VALIDATE INPUTS ===========================================//
    $name = trim(filter_input(INPUT_POST, 'enq_name', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'enq_email', FILTER_SANITIZE_STRING));
    $tel = trim(filter_input(INPUT_POST, 'enq_tel', FILTER_SANITIZE_NUMBER_INT));
    $subject = trim(filter_input(INPUT_POST, 'enq_subject', FILTER_SANITIZE_STRING));
    $msg = trim(filter_input(INPUT_POST, 'enq_message', FILTER_SANITIZE_STRING)); 
    $marketing = '';
    //======================================== ERROR MESSAGES ============================================//
    $errorName = $errorEmail = $errorTel = $errorSubject = $errorMsg = "";
    $dispName = $dispEmail = $dispTel = $dispSubject = $dispMsg = "";
    //======================================== ON FORM SUBMISSON PERFORM CHECKS =======================================//
    //======================================== IF THEY PASS WRITE TO THE DATABASE =====================================//
    if(isset($_POST['submit'])) {
        //Variable to check if form is valid
        $nameFullyFilled = $emailFullyFilled = $telFullyFilled = $subjectFullyFilled = $msgFullyFilled = false;
        //Check name
        if (empty($name)) {
            $errorName = " Name field is required";
            $dispName = "display";
        } elseif(strlen($name) < 4) {
            $errorName = " Name must be more than 4 characters";
            $dispName = "display";
        } else {
            $nameFullyFilled = true;
        }
        //Check email
        if (empty($email)) {
            $errorEmail = " You must enter a valid email address";
            $dispEmail = "display";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorEmail = "Invalid email format";
                $dispEmail = "display";
            } else {
                $emailFullyFilled = true;
            }
        }
        $phonePattern = "/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";
        //Check telephone number
        if (empty($tel)) {
            $errorTel = " You must enter a phone number";
            $dispTel = "display";
        } else {
            $match = preg_match($phonePattern, $tel);
                if ($match != false) {
                    // We have a valid phone number
                    $telFullyFilled = true;
                } else {
                    // We have an invalid phone number
                    $errorTel = " Telephone number is invalid";
                    $dispTel = "display";
                }
        }
        //Check subject
        if (empty($subject)) {
            $errorSubject = " You must enter a subject";
            $dispSubject = "display";
        } elseif(strlen($subject) < 5) {
            $errorSubject = " The subject must be at least 5 characters";
            $dispSubject = "display";
        } else {
            $subjectFullyFilled = true;
        }
        //Check message
        if (empty($msg)) {
            $errorMsg = " The message must be at least 5 characters";
            $dispMsg = "display";
        } elseif(strlen($msg) < 5) {
            $errorMsg = " The message must be at least 5 characters";
            $dispMsg = "display";
        } else {
            $msgFullyFilled = true;
        }
        $marketing = isset($_POST['enq_marketing']) ? $_POST['enq_marketing'] : 0; 
        //======================================== INSERT DATA TO DB ======================================================//
        if($nameFullyFilled && $emailFullyFilled && $telFullyFilled && $subjectFullyFilled && $msgFullyFilled) {
            $_SESSION['success'] = 'success';
            try {
                $sqlInsert = $db->query("INSERT INTO enquiries (enq_name, enq_email, enq_tel, enq_subject, enq_message, enq_marketing) 
                                        VALUES ('" . $name . "', '" .  $email . "', '" .  $tel . "', '" .  $subject . "', '" .  $msg . "', '" .  $marketing . "')");
            } catch(Exception $e) {
                echo $e->getMessage();
                die();
            } 
            //======================================== PRINT RESPONSE FROM DB =================================================//
            if($sqlInsert) {
                header("location: /contact-us.php");
                exit();
            } else {
                die("Error: '. $e .'");
            }
            //======================================== CLOSE CONNECTION =======================================================//
            $sqlInsert->close();
        } else {
            $_SESSION['success'] = 'fail';
        }
    }
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
    <title>Contact Us | Netmatters</title>
</head>
<body>
<!-- INCLUDE THE HEADER -->
<?php
    include('inc/header.php'); 
?>
    <!-- TOP BANNER START -->
    <div class="contact-banner-wrapper hero-mt">
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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="enquiry-form">
                <!-- ERROR MESSAGE DIVS -->
                <div class="enq-form-error <?php echo $dispName ?>"><?php echo $errorName ?></div>
                <div class="enq-form-error <?php echo $dispEmail ?>"><?php echo $errorEmail ?></div>
                <div class="enq-form-error <?php echo $dispTel ?>"><?php echo $errorTel ?></div>
                <div class="enq-form-error <?php echo $dispSubject ?>"><?php echo $errorSubject ?></div>
                <div class="enq-form-error <?php echo $dispMsg ?>"><?php echo $errorMsg ?></div>
                <!-- SUCCESS MESSAGE DIV -->
                <div class="enq-form-success <?php echo $dispSuccess ?>">Your message has been sent!</div>

                <label for="enqName" class="form-label-enq">Your Name <span class="make-red">*</span></label>
                <input type="text" value="<?php if(isset($_POST['enq_name'])) { echo $name; } ?>" name="enq_name" id="enqName" class="form-control-enq">

                <label for="enqEmail" class="form-label-enq">Your Email <span class="make-red">*</span></label>
                <input type="text" value="<?php if(isset($_POST['enq_email'])) { echo $email; } ?>" name="enq_email" id="enqEmail" class="form-control-enq">

                <label for="enqTel" class="form-label-enq">Your Telephone Number <span class="make-red">*</span></label>
                <input type="text" value="<?php if(isset($_POST['enq_tel'])) { echo $tel; } ?>" name="enq_tel" id="enqTel" class="form-control-enq">

                <label for="enqSubject" class="form-label-enq">Subject <span class="make-red">*</span></label>
                <input type="text" value="<?php if(isset($_POST['enq_subject'])) { echo $subject; } ?>" name="enq_subject" id="enqSubject" class="form-control-enq">

                <label for="enqMessage" class="form-label-enq">Message <span class="make-red">*</span></label>
                <textarea name="enq_message" id="enqMessage" class="form-control-enq"><?php if(isset($_POST['enq_message'])) { echo $msg; } ?></textarea>

                <label class="checkbox-container">Please tick this box if you wish to receive marketing information from us.
                Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we use your data.
                    <input type="checkbox" name="enq_marketing" value="1">
                    <span class="checkmark"></span>
                </label>

                <button type="submit" name="submit" class="enquiry-btn">SEND ENQUIRY</button>

            </form>    
        </div>  
        <!-- ENQUIRY FORM END -->
    </div>
    <!-- OPENING TIMES AND CONTACT FORM ENDS-->


<!-- INCLUDE THE NEWSLETTER -->
<?php
    include('inc/newsletter-form.php'); 
?>
<!-- INCLUDE THE FOOTER -->
<?php
    include('inc/footer.php'); 
?>
<!-- SCRIPT FOR MAP JS -->
<script src="/js/map.js"></script>
<!-- SCRIPT FOR JQUERY -->
<script src="/js/jquery-3.6.0.min.js"></script>
<!-- SCRIPT FOR SLICK CAROUSEL -->
<script src="js/pushy.min.js"></script>
<!-- MAIN JS FILE -->
<script src="/js/main.js"></script>
</body>
</html>