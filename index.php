<?php 
    //connect to database
    require 'db/connect.php';
    //Return to this page after submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //add any other checks such as form input values
        header('Location: location: /index.php');
        exit;
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

<!-- HERO START -->
<div class="hero-wrapper hero-mt">    
    <div class="carousel">
        <div class="slide web-slide">
            <div class="hero-image-overlay">
            </div>
            <div class="hero-text-outer">
                <div class="hero-text-wrapper">
                    <h2 class="hero-title">Web Design</h2>
                    <h4 class="hero-subtitle">For businesses looking to make a strong <br> and effective first impression.</h4>
                    <div class="hero-button-wrapper">
                        <button class="hero-button web-button">Find Out More <span class="hero-icon"><i class="fas fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide it-slide">
            <div class="hero-image-overlay">
            </div>
            <div class="hero-text-outer">
                <div class="hero-text-wrapper">
                    <h2 class="hero-title">IT Support</h2>
                    <h4 class="hero-subtitle">Fast and cost-effective IT support<br> services for your business.</h4>
                    <div class="hero-button-wrapper">
                        <button class="hero-button it-button">Find Out More <span class="hero-icon"><i class="fas fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide tele-slide">
            <div class="hero-image-overlay">
            </div>
            <div class="hero-text-outer">
                <div class="hero-text-wrapper">
                    <h2 class="hero-title">Telecoms Services</h2>
                    <h4 class="hero-subtitle">A new approach to connectivity, see how <br> we can help your business.</h4>
                    <div class="hero-button-wrapper">
                        <button class="hero-button tele-button">Find Out More <span class="hero-icon"><i class="fas fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide soft-slide">
            <div class="hero-image-overlay">
            </div>
            <div class="hero-text-outer">
                <div class="hero-text-wrapper">
                    <h2 class="hero-title">Bespoke Software</h2>
                    <h4 class="hero-subtitle">Bring you business together <br> with solutions that grow with you.</h4>
                    <div class="hero-button-wrapper">
                        <button class="hero-button soft-button">Find Out More <span class="hero-icon"><i class="fas fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide market-slide">
            <div class="hero-image-overlay">
            </div>
            <div class="hero-text-outer">
                <div class="hero-text-wrapper">
                    <h2 class="hero-title">Digital Marketing</h2>
                    <h4 class="hero-subtitle">Generating your new business through <br> results-driven marketing activities.</h4>
                    <div class="hero-button-wrapper">
                        <button class="hero-button market-button">Find Out More <span class="hero-icon"><i class="fas fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide cyber-slide">
            <div class="hero-image-overlay">
            </div>
            <div class="hero-text-outer">
                <div class="hero-text-wrapper">
                    <h2 class="hero-title">Cyber Security</h2>
                    <h4 class="hero-subtitle">Keeping businesses and their customers <br> sensitive information protected.</h4>
                    <div class="hero-button-wrapper">
                        <button class="hero-button cyber-button">Find Out More <span class="hero-icon"><i class="fas fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HERO END -->

<!-- CARDS START -->
<div class="cards-wrapper">
    <div class="cards-section">
        <div class="row-one"> <!-- TOP THREE CARDS -->
            <a href="" class="card-link">
                <div class="column card soft-card"> 
                    <div class="icon-border">
                        <span class="fas fa-th card-icon"></span>
                    </div>
                    <h5 class="card-title">Bespoke Software</h5>
                    <p class="card-text">Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.</p>
                    <div class="soft-btn card-btn">Read More</div>
                </div>
            </a>
            <a href="" class="card-link">
                <div class="column card it-card">
                    <div class="icon-border">
                        <i class="fas fa-desktop card-icon"></i>
                    </div>
                    <h5 class="card-title">IT Support</h5>
                    <p class="card-text">Remotely managed IT services that is catered to your business needs, adds value and reduces costs.</p>
                    <div class="it-btn card-btn">Read More</div>
                </div>
            </a>
            <a href="" class="card-link">
                <div class="column card market-card">
                    <div class="icon-border">
                        <i class="fas fa-signal card-icon"></i>
                    </div>
                    <h5 class="card-title">Digital Marketing</h5>
                    <p class="card-text">Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online performances.</p>
                    <div class="market-btn card-btn">Read More</div>
                </div>
            </a>
        </div>
        <div class="row-double"> <!-- BOTTOM FOUR CARDS CONTAINER -->
            <div class="row-two"> <!-- 1ST PAIR BOTTOM CARDS -->
                <a href="" class="card-link">
                    <div class="column card tele-card">
                        <div class="icon-border">
                            <i class="fas fa-phone-volume card-icon"></i>
                        </div>
                        <h5 class="card-title">Telecoms Services</h5>
                        <p class="card-text">Stay connected with bespoke telecoms solutions when you needs it most.</p>
                        <div class="tele-btn card-btn">Read More</div>
                    </div>
                </a>
                <a href="" class="card-link">
                    <div class="column card web-card">
                        <div class="icon-border">
                            <i class="fas fa-code card-icon"></i>
                        </div>
                        <h5 class="card-title">Web Design</h5>
                        <p class="card-text">User-centric design for businesses looking to make a lasting first impression.</p>
                        <div class="web-btn card-btn">Read More</div>
                    </div>
                </a>
            </div>
            <div class="row-three"> <!-- 2ND PAIR BOTTOM CARDS -->
                <a href="" class="card-link">
                    <div class="column card cyber-card">
                        <div class="icon-border">
                            <i class="fas fa-shield-virus card-icon"></i>
                        </div>
                        <h5 class="card-title">Cyber Security</h5>
                        <p class="card-text">Ensuring your online busines stays secure 24/7, 365 days of the year.</p>
                        <div class="cyber-btn card-btn">Read More</div>
                    </div>
                </a>
                <a href="" class="card-link">
                    <div class="column card train-card">
                        <div class="icon-border">
                            <i class="fas fa-graduation-cap card-icon"></i>
                        </div>
                            <h5 class="card-title">Developer Training</h5>
                            <p class="card-text">Have you considered a career in web development but you aren't sure where to start?</p>
                            <div class="train-btn card-btn">Read More</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- CCARDS END -->

<!-- ABOUT START -->
<div class="about-wrapper">
    <section class="about">
        <h1 class="about-title">NETMATTERS</h1>
        <h3 class="about-intro">Netmatters Ltd is a leading web design, IT support and digital marketing agency based in the East of England, with offices in Cambridge, Wymondham and Great Yarmouth.</h3>
        <p class="about-p1">Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture existing leads and further grow their sales.</p>
        <p class="about-p2">We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.</p>
        <button type="button" class="culture-btn">Our Culture <span class="about-icon"><i class="fas fa-arrow-right"></i></span></button>
    </section>
</div>
<!-- ABOUT END -->

<!-- NEWS START -->
<div class="news-wrapper">
    <!-- NEWS TITLE BANNER START -->
    <div class="news-title">
        <h2 class="news-title-text">LATEST</h2>
    </div>
    <!-- NEWS TITLE BANNER END -->
    <!-- NEWS CARDS START -->
    <div class="news">
        <div class="news-cards-wrapper">
            <?php 
                include('inc/news-cards.php'); 
            ?>
        </div>
    </div>
    <!-- NEWS CARDS END -->
</div>
<!-- NEWS END -->

<!-- CLIENTS START -->
<div class="clients-wrapper">
    <section class="clients">
        <div class="busseys-container show">
            <div class="busseys-tooltip tooltip">
                <h3 class="client-title">Busseys</h3>
                <p>One of the UK's leading Ford dealerships.</p>
            </div>
        </div>
        <a href="#">
        <div class="crane-container show">
            <div class="crane-tooltip tooltip">
                <h3 class="client-title">Crane Garden Buildings</h3>
                <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
            </div>
        </div>
        </a>
        <div class="beat-container show">
            <div class="beat-tooltip tooltip">
                <h3 class="client-title">Beat</h3>
                <p>The Uk's eating disorder charity founded in 1989.</p>
            </div>
        </div>
        <a href="#">
        <div class="diver-container show">
            <div class="diver-tooltip tooltip">
                <h3 class="client-title">Northern Diver</h3>
                <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
            </div>
        </div>
        </a>
    </section>
</div>
<!-- CLIENTS END -->
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
<script src="/js/slick.min.js"></script>
<!-- SCRIPT FOR PUSHY SIDEBAR -->
<script src="js/pushy.min.js"></script>
<!-- MAIN JS FILE -->
<script src="/js/main.js"></script>
</body>

</html>