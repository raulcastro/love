<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/'.'views/Layout_View.php';
?>
<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">

<head>
    <!-- Site Title -->
    <title>Contact us</title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- Stylesheets -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic%7CSource+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 10]>
    <script src="/js/html5shiv.min.js"></script>
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
                                <li> <a href="/destinations/">Destinations</a></li>
                                <li class="active"> <a href="/extras/">Extras</a> </li>
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
            <!-- Location & access -->
            <!-- END Location & access-->
            <!-- Mail Form -->
            <section class="well-md bg-image-5">
                <div class="container text-center">
                    <h2>Contact Us</h2>
                    <!-- RD Mailform -->
                    <form class='rd-mailform offset-10' method="post" action="/email/email.php">
                        <!-- RD Mailform Type -->
                        <input type="hidden" name="form-type" value="contact" />
                        <!-- END RD Mailform Type -->
                        <fieldset class="ph-size border-none">
                            <div class="row">
                                <div class="col-md-4">
                                    <label data-add-placeholder data-add-icon>
                                        <input type="text" name="name" placeholder="Name" data-constraints="@NotEmpty @LettersOnly" /> </label>
                                </div>
                                <div class="col-md-4">
                                    <label data-add-placeholder data-add-icon>
                                        <input type="text" name="last-name" placeholder="Last Name" data-constraints="@NotEmpty @LettersOnly" /> </label>
                                </div>
                                <div class="col-md-4">
                                    <label data-add-placeholder data-add-icon>
                                        <input type="text" name="email" placeholder="E-mail" data-constraints="@NotEmpty @Email" /> </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label data-add-placeholder data-add-icon>
                                        <input type="text" name="phone" placeholder="Phone" data-constraints="@Phone" /> </label>
                                </div>
                                
                                <div class="col-md-4">
                                    <label data-add-placeholder data-add-icon>
                                        <input type="date" name="date" data-placeholder="Travel date" data-constraints=" @Date" /> </label>
                                </div>
                                
                                <div class="col-md-4">
                                    <label class="line-left offset-15" data-add-placeholder data-add-icon>
                                        <select name="motivo">
                                            <option value="">Motivo de viaje (es)</option>
                                            <option value="Honeymoon">Honeymoon</option>
                                            <option value="Romantic Gateway">Romantic Gateway</option>
                                            <option value="What are you celebrating?">What are you celebrating?</option>
                                            <option value="other">other</option>
                                        </select>
                                    </label>
                                    <div class="mfInfo"></div>
                                </div>
                                
                                
                                <div class="col-md-12">
                                    <label data-add-placeholder>
                                        <textarea name="message" placeholder="Message" data-constraints="@NotEmpty"></textarea>
                                    </label>
                                </div>
                                
                                <div class="mfControls offset-10">
                                    <button class="btn btn-sm btn-primary fl-budicons-launch-right164 fl" type="submit">Submit</button>
                                </div>
                                <div class="mfInfo"> </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- END RD Mailform -->
            </section>
            <!-- END Mail Form-->
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