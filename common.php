<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/'.'views/Layout_View.php';
?>

<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
<head>
    <!-- Site Title -->
    <title>About us</title>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <!-- Stylesheets -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic%7CSource+Sans+Pro:400,300' rel='stylesheet'
          type='text/css'>

    <!--[if lt IE 10]>
    <script src="/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- The Main Wrapper -->
<div class="page">

    <!--For older internet explorer-->
    <div class="old-ie"
         style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <!--END block for older internet explorer-->

    <!--========================================================
                              HEADER
    =========================================================-->
        <header class="page-header" id="header-mod">
            <!-- RD Navbar -->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static">
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Panel -->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle -->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar"><span></span></button>
                            <!-- END RD Navbar Toggle -->
                            <!-- RD Navbar Brand -->
                            <div class="rd-navbar-brand"> 
                                <!--<a href="index.html" class="brand-name">
                                    Love Story<br> 
                                    <span class="brand-slogan">Special Way to Travel</span>
                                    
                                </a>-->
                                <a href="index.html" class="brand-name">
                                    <img src="/images/brand.png" id="logo-left" />
                                </a>
                                
                                <img src="/images/brand.png" id="logo-right" />
                            </div>
                            <!-- END RD Navbar Brand -->
                        </div>
                        <!-- END RD Navbar Panel -->
                        <div class="rd-navbar-nav-wrap">
                            <!-- RD Navbar Nav -->
                            <ul class="rd-navbar-nav">
                                <li> <a href="/">Home</a> </li>
                                <li > <a href="/experiences/">Romantic Experiences</a> </li>
                                <li> <a href="/destinations/">Destinations</a></li>
                                <li> <a href="/extras/">Extras</a> </li>
                                <li class="active"> <a href="/about-us/">About Us</a> </li>
                                <li> <a href="/contact/">Contact Us</a> </li>
                            </ul>
                            <!-- END RD Navbar Nav -->
                        </div>
                    </div>
                </nav>
            </div>
            <!-- END RD Navbar -->
        </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="page-content">
        <!-- Unite people -->
        <section class="well-md">
            <div class="container text-center text-md-left">
                <h2>Love Story Travel </h2>
                <div class="divider divider-1"></div>
                <div class="row offset-9">
                    <div class="col-md-5">
                        <img src="/images/page3_img13.jpg" width="470" height="313" alt="">
                    </div>
                    <div class="col-md-6 col-md-preffix-1">

                        <p>Love Story Travels is the perfect option for those couples who want something more than just a trip. Because of our experience in the destination, we are able to give our customers the best packages and services to make the most of their stay in the beautiful beaches of the Mexican Caribbean.
                            </p>
                        <p>
                            We can celebrate any kind of special occasions like honeymoons, anniversaries, renewal of vows, babymoons, proposals and romantic breaks always ensuring that each couple live a magical & romantic experience that will last forever.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- END Unite people-->
        <!-- Testimonials -->
        <section class="well-md bg-image-1">
            <div class="container text-center">
                <h2>Testimonials</h2>

                <div class="row row-md-center">
                    <div class="col-md-10">
                        <!-- Owl Carousel -->
                        <div class="owl-carousel" data-dots="true">
                            <div class="owl-item">

                                <img src="/images/page1_img02.png" width="48" height="41" alt="">

                                <p class="heading-6">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                                        ut aliquip ex ea commodo consequat. </p>

                                <p class=" offset-3">Andrea Lawrence</p>

                            </div>
                            <div class="owl-item">

                                <img src="/images/page1_img02.png" width="48" height="41" alt="">

                                <p class="heading-6">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                                        ut aliquip ex ea commodo consequat. </p>

                                <p class=" offset-3">Matthew Perkins</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Owl Carousel -->
            </div>
        </section>
        <!-- END Testimonials-->
    </main>
    <?php
			echo Layout_View::getFooter();
		?>
</div>

<!-- Core Scripts -->
<script src="/js/core.min.js"></script>
<!-- Additional Functionality Scripts -->
<script src="/js/script.js"></script>


</body><!-- Google Tag Manager --><noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-N7VWVN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push( {'gtm.start': new Date().getTime(),event:'gtm.js'} );var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-N7VWVN');</script> <!-- End Google Tag Manager -->
</html>