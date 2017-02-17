<?php
$root = $_SERVER['DOCUMENT_ROOT'];
	require_once $root.'/'.'views/Layout_View.php';
?>
<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">

<head>
    <!-- Site Title -->
    <title>Destinations</title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- Stylesheets -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic%7CSource+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 10]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- The Main Wrapper -->
    <div class="page">
        <!--For older internet explorer-->
        <div class="old-ie" style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/.."> <img src="/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /> </a>
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
                                <li class="active"> <a href="/destinations/">Destinations</a></li>
                                <li> <a href="/extras/">Extras</a> </li>
                                <li> <a href="/about-us/">About Us</a> </li>
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
            <!-- Gallery -->
            <section class="well-md well-md-var-4">
                <div class="container">
                    <h5>The most romantic Places in the Mexican Caribbean</h5> 
                </div>
                
                <div class="row row-no-gutter">
                <div class="col-md-4 ">
                    <div class="post-news postfix-1 ">
                        <img src="/images/page1_img06.jpg" width="955" height="700" alt="">
                        <span class="overlay-var-1"></span>

                        <div class="inner_txt">
                            <h4>Riviera Maya</h4>
                            
                            <a href="index.html#" class=" link text-italic link-lg link-default"> View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="post-news prefix-2">
                        <img src="/images/page1_img07.jpg" width="955" height="700" alt="">
                        <span class="overlay-var-1"></span>

                        <div class="inner_txt">
                            <h4>Cancun</h4>
                            <h5 class="text-light ">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                        ut aliquip ex ea commodo consequat. </h5>
                            <a href="index.html#" class="link text-italic link-lg link-default"> View more</a>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-4">
                    <div class="post-news prefix-2">
                        <img src="/images/page1_img07.jpg" width="955" height="700" alt="">
                        <span class="overlay-var-1"></span>

                        <div class="inner_txt">
                            <h4>Playa del Carmen</h4>
                            <h5 class="text-light ">Lorem ipsum dolor sit amet, consectetur adipiscing 
                                        ut aliquip ex ea commodo consequat. </h5>
                            <a href="index.html#" class="link text-italic link-lg link-default"> View more</a>
                        </div>
                    </div>
                </div>
            </div>
                
            </section>
            <!-- END Gallery-->
            <!-- Latest news & events 
            <section class="well-md">
                <div class="container">
                    <h2>Latest news & events</h2>
                    <div class="row offset-9">
                        <div class="col-md-5">
                            <div class="event-post">
                                <time class="heading-5 text-famaly text-light text-uppercase" datetime="2016-03-10">March 10, 2016 </time>
                                <h6><a href="#">Title!</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                            <div class="event-post">
                                <time class="heading-5 text-famaly text-light text-uppercase" datetime="2016-03-18">March 18, 2016 </time>
                                <h6><a href="#">Title!</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-preffix-1">
                            <div class="event-post">
                                <time class="heading-5 text-famaly text-light text-uppercase" datetime="2016-03-16">March 16, 2016 </time>
                                <h6><a href="#">Title!</a> </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                            <div class="event-post">
                                <time class="heading-5 text-famaly text-light text-uppercase" datetime="2016-03-27">March 27, 2016 </time>
                                <h6><a href="#">Title! </a></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <!-- END Latest news & events-->
        </main>
        <?php
			echo Layout_View::getFooter();
		?>
    </div>
    <!-- Core Scripts -->
    <script src="/js/core.min.js"></script>
    <!-- Additional Functionality Scripts -->
    <script src="/js/script.js"></script>
</body>
<!-- Google Tag Manager -->
<noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-N7VWVN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime()
            , event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0]
            , j = d.createElement(s)
            , dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N7VWVN');
</script>
<!-- End Google Tag Manager -->

</html>