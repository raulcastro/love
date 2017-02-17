<?php
$root = $_SERVER['DOCUMENT_ROOT'];
	require_once $root.'/'.'views/Layout_View.php';
?>
<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">

<head>
    <!-- Site Title -->
    <title>Love Story Travels - Experiencias</title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- Stylesheets -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic%7CSource+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 10]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
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
                                <li class="active"> <a href="/experiences/">Romantic Experiences</a> </li>
                                <li> <a href="/destinations/">Destinations</a></li>
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
            <!-- Rooms -->
            <section class="well-md well-md-var-1">
                <div class="container">
                 

                    <h2>What are you celebrating?</h2>
                    <div class="divider divider-1"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class=" heading-6">We know every occasion is special and different, that’s why we offer you packages designed to make each moment unique and unforgettable </p>
                        </div>
                    </div>
                    <div class="devider var-1"></div>
                </div>
            </section>
            <!-- END Rooms-->
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Experience one</h4> </div>
                        <div class="modal-body"> 
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img class="responsive" src="/images/croatia.jpg">
                                </div>
                                
                                <div class="col-md-12 text-justify">
                                    <br>
                                    <br>
                                    <h3>Experience title</h3>
                                    
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                            ut aliquip ex ea commodo consequat.</h5>
                                </div>
                                
                                <div class="col-md-12 text-justify">
                                    <br>
                                    <br>
                                    <h2>$$$</h2>
                                </div>
                                
                                
                                
                                <div class="col-md-12 col-xl-4 z-ind">
                            
                            <!-- RD Mailform -->
                            <form class='rd-mailform' method="post" action="/bat/rd-mailform.php">
                                <!-- RD Mailform Type -->
                                <input type="hidden" name="form-type" value="contact" />
                                <!-- END RD Mailform Type -->
                                <fieldset class="border-none">
                                    <div class="row z-ind offset-13">
                                        <div class="col-sm-4 col-sm-preffix-2 col-xl-preffix-0 col-xl-6 inset-13 ">
                                            <h6>Check in</h6>
                                            <label class="line-right offset-15" data-add-placeholder data-add-icon>
                                                <input type="date" name="date" data-placeholder="date" data-constraints="@NotEmpty @Date" /> </label>
                                            <div class="mfInfo"></div>
                                        </div>
                                        <div class="col-sm-4 col-xl-6 prefix-5  inset-13">
                                            <h6>Check out</h6>
                                            <label data-add-placeholder data-add-icon class="offset-15">
                                                <input type="date" name="date" data-placeholder="date" data-constraints="@NotEmpty @Date" /> </label>
                                        </div>
                                        <div class="col-sm-4 col-sm-preffix-2 col-xl-preffix-0 col-xl-6 inset-13 ">
                                            <h6>Experience</h6>
                                            <label class="line-right offset-15" data-add-placeholder data-add-icon>
                                                <select>
                                                    <option value="volvo">Experience 1</option>
                                                    <option value="saab">Experience 2</option>
                                                </select>
                                            </label>
                                            <div class="mfInfo"></div>
                                        </div>
                                        <div class="col-sm-4 col-xl-6 prefix-5  inset-13">
                                            <h6>Location</h6>
                                            <label class="line-right offset-15" data-add-placeholder data-add-icon>
                                                <select>
                                                    <option value="volvo">Riviera Maya</option>
                                                    <option value="saab">Playa del Carmen</option>
                                                    <option value="vw">Tulum</option>
                                                </select>
                                            </label>
                                            <div class="mfInfo"></div>
                                        </div>
                                    </div>
                                </fieldset>
                                </h6>
                                <div class="mfControls text-center  text-xl-left">
                                    <br>
                                    <button class="btn btn-sm btn-primary fl-budicons-launch-right164 fl" type="submit">Make your request </button>
                                </div>
                            </form>
                            <!-- END RD Mailform -->
                        </div>
                                
                                
                                
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
            
            <!-- Post -->
            <section>
                <div class="post">
                    <div class="row row-no-gutter">
                        <div class="col-md-6 ">
                            <div class="post-news postfix-1 "> <img src="/images/page2_img09.jpg" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                                <div class="inner_txt inner_txt_var-1">
                                    <h4>HONEYMOON</h4>
                                    <h5 class="text-light">After all the stress of the wedding it is time to relax and start enjoying the married life. The newlyweds will be able to enjoy Hotels dedicated 100% to pamper the couples as well as activities and tours where you can enjoy each other
                                     </h5> <a href="#" class=" link text-italic link-lg link-default" data-toggle="modal" data-target="#myModal"> Book your experience</a> </div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-11">
                            <div class="post-news prefix-2"> <img src="/images/page2_img10.jpg" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                                <div class="inner_txt inner_txt_var-1">
                                    <h4>ANNIVERSARY</h4>
                                    <h5 class="text-light ">Is this your first, second or even your fiftieth anniversary? It doesn’t matter; we will help you to celebrate this occasion with our best romantic ideas to keep the flame alive.</h5> <a href="#" class="link text-italic link-lg link-default"> View more</a> </div>
                            </div>
                        </div>
                        <div class="col-md-6 offset-11">
                            <div class="post-news prefix-2"> <img src="/images/page2_img10.jpg" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                                <div class="inner_txt inner_txt_var-1">
                                    <h4>ROMANTIC BREAK</h4>
                                    <h5 class="text-light ">Do you have a free weekend? Perfect! We can offer you many options for having some romantic, fun or even sexy days away</h5> 
                                    <a href="#" class="link text-italic link-lg link-default"> View more</a> </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 offset-11">
                            <div class="post-news prefix-2"> <img src="/images/page2_img10.jpg" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                                <div class="inner_txt inner_txt_var-1">
                                    <h4>PROPOSAL</h4>
                                    <h5 class="text-light ">If you want to pop the question but you don’t know how, don’t worry, our experts will help you to ensure the “Yes!” by creating a unique and unforgettable moment that will remain in your memory forever</h5> 
                                    <a href="#" class="link text-italic link-lg link-default"> View more</a> </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 offset-11">
                            <div class="post-news prefix-2"> <img src="/images/page2_img10.jpg" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                                <div class="inner_txt inner_txt_var-1">
                                    <h4>RENEWAL OF VOWS</h4>
                                    <h5 class="text-light ">What better place to renew your vows than the Caribbean beaches. You can choose a traditional ceremony to declare your love once again or make it in a different and mayan way!</h5> 
                                    <a href="#" class="link text-italic link-lg link-default"> View more</a> </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 offset-11">
                            <div class="post-news prefix-2"> <img src="/images/page2_img10.jpg" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                                <div class="inner_txt inner_txt_var-1">
                                    <h4>BABYMOON</h4>
                                    <h5 class="text-light ">Because you may need a pre – baby  break, we can offer you spa treatments, massages or special treats for pregnant couples to enjoy this amazing phase in your life. </h5> 
                                    <a href="#" class="link text-italic link-lg link-default"> View more</a> </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 offset-11">
                            <div class="post-news prefix-2"> <img src="/images/page2_img10.jpg" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                                <div class="inner_txt inner_txt_var-1">
                                    <h4>VALENTINES</h4>
                                    <h5 class="text-light ">Celebrate the International Day of Love! You and your beloved one will have a day full of romantic, sexy and even kinky surprises. Customize this celebration and make it out of the ordinary</h5> 
                                    <a href="#" class="link text-italic link-lg link-default"> View more</a> </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 offset-11">
                            <div class="post-news prefix-2"> <img src="/images/page2_img10.jpg" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                                <div class="inner_txt inner_txt_var-1">
                                    <h4>CREATE YOUR OWN ROMANTIC EXPERIENCE</h4>
                                    <h5 class="text-light ">If you didn’t find the experience that you want, contact us!
</h5> 
                                    <a href="#" class="link text-italic link-lg link-default"> View more</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Post-->
        </main>
        <?php
			echo Layout_View::getFooter();
		?>

        
    </div>
    <!-- Core Scripts -->
    <script src="/js/core.min.js"></script>
    <!-- Additional Functionality Scripts -->
    <script src="/js/script.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
<script src="//rawgit.com/saribe/eModal/master/dist/eModal.min.js"></script>

</html>