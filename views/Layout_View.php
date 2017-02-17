<?php
/**
 * This file has the main view of the project
 *
 * @package    Love Story Travels
 * @subpackage Love Story Travels
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Raul Castro <rd.castro.silva@gmail.com>
 */

$root = $_SERVER['DOCUMENT_ROOT'];
/**
 * Includes the file /Framework/Tools.php which contains a 
 * serie of useful snippets used along the code
 */
require_once $root.'/Framework/Tools.php';

/**
 * 
 * Is the main class, almost everything is printed from here
 * 
 * @package 	Love Story Travels
 * @subpackage 	Love Story Travels
 * @author 		Raul Castro <rd.castro.silva@gmail.com>
 * 
 */
class Layout_View
{
	/**
	 * @property string $data a big array cotaining info for especified sections
	 */
	private $data;
	
	/**
	 * @property string $title title that will be printed in <title></title>
	 */
	private $title;
	
	private $url;
	
	/**
	 * @property string $section the section of the application, 
	 * it can be 'dashboard', 'members, ... 
	 * 
	 */
	private $section;
	
	/**
	 * get's the data *ARRAY* and the title of the document
	 * 
	 * @param array $data Is a big array with the whole info of the document 
	 * @param string $title The title that will be printed in <title></title>
	 */
	public function __construct($data, $title)
	{
		$this->data 	= $data;
		$this->title 	= $title;
		$this->url		= $data['appInfo']['url'];
	}    
	
	/**
	 * function printHTMLPage
	 * 
	 * Prints the content of the whole website
	 * 
	 * @param int $section the section that define what will be printed
	 * 
	 */
	
	public function printHTMLPage($section)
    {
    	$this->section = $section;
    ?>
	<!DOCTYPE html>
	<html lang='<?php echo $this->data['appInfo']['lang']; ?>'>
		<head>
			<!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <![endif]-->
			<meta charset="utf-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<meta name="format-detection" content="telephone=no" />
    		<meta name="google-site-verification" content="" />
			<link rel="shortcut icon" href="favicon.ico" />
			<link rel="icon" type="image/gif" href="favicon.ico" />
			<title><?php echo $this->title; ?> - <?php echo $this->data['appInfo']['title']; ?></title>
			<meta name="keywords" content="<?php echo $this->data['appInfo']['keywords']; ?>" />
			<meta name="description" content="<?php echo $this->data['appInfo']['description']; ?>" />
			<meta property="og:type" content="website" /> 
			<meta property="og:url" content="<?php echo $this->data['appInfo']['url']; ?>" />
			<meta property="og:site_name" content="<?php echo $this->data['appInfo']['siteName']; ?> />
			<link rel='canonical' href="<?php echo $this->data['appInfo']['url']; ?>" />
			<?php echo self::getCommonDocuments(); ?>			
			<?php 
			switch ($section) 
			{
				case 'index':
 					echo self :: getIndexHeader();
				break;
				
				case 'espacios':
					echo self::getSingleEspaciosHeader();
				break;
				
				case 'noticia':
 					echo self::getSingleNoticiaHeader();
 				break;
 				
			}
			?>
		</head>
		<body>
			<!-- The Main Wrapper -->
		    <div class="page">
		        <!--For older internet explorer-->
		        <div class="old-ie" style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
		            <a href="http://windows.microsoft.com/en-US/internet-explorer/.."> <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /> </a>
		        </div>
		        <!--END block for older internet explorer-->
				<?php 
	 			echo self :: getHeader();
				?>
				<?php 
				switch ($section) 
				{
					case 'index':
						echo self :: getIndexContent();
					break;
					
					case 'nosotros':
						echo self::getNosotrosMain();
					break;
					
					case 'que-hacemos':
						echo self::getQueHacemosMain();
					break;
					
					case 'all-espacios':
						echo self::getAllEspacios();
					break;
					
					case 'causas':
						echo self :: getSingleCausasContent();
					break;
					
					case 'espacios':
						echo self :: getSingleEspaciosContent();
					break;
					
					
 					
					default :
						# code...
					break;
				}
				?>
				<?php echo self::getFooter(); ?>
			</div>
			<?php
			echo self::getCommonScripts();
			?>
		</body>
	</html>
    <?php
    }
    
    /**
     * returns the common css and js that are in all the web documents
     * 
     * @return string $documents css & js files used in all the files
     */
    public function getCommonDocuments()
    {
    	ob_start();
    	?>
    	<!-- Stylesheets -->
	    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	    <link rel="stylesheet" href="css/style.css">
	    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic%7CSource+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
	    <!--[if lt IE 10]>
	    <script src="js/html5shiv.min.js"></script>
	    <![endif]-->
	    <meta name="google-site-verification" content="hytq6BvtfoT-1kFNI5jTr_Eca1sp0BazT4cIP_AA6Ts" /> 
	    <script src="https://use.fontawesome.com/c4a4a35081.js"></script>
       	<?php 
       	$documents = ob_get_contents();
       	ob_end_clean();
       	return $documents; 
    }
    
    public function getIndexHeader()
    {
    	ob_start();
    	?>
    	
    	<?php
    	$indexHeader = ob_get_contents();
    	ob_end_clean();
    	return $indexHeader;
    }
    
    public function getMainMenu()
    {
    	ob_start();
    	?>
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
                                <li class="active"> <a href="/">Home</a> </li>
                                <li> <a href="/experiences/">Romantic Experiences</a> </li>
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
    	<?php
    	$content = ob_get_contents();
    	ob_end_clean();
    	return $content;
    }
    
    public function getSearchEngine()
    {
    	ob_start();
    	?>
    	<div class="bg-color-1 inset-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xl-4 bg-2 z-ind">
                            <h2 class="relative text-center  text-xl-left">Find Your Romantic Experience</h2>
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
                                                <select name="destination">
                                                	<?php 
								                	foreach ($this->data['destinations'] as $destination)
								                	{
								                		?>
								                	<option value="<?php echo $destination['name']; ?>"><?php echo $destination['name']; ?></option>
								                		<?php
								                	}
								                	?>
                                                </select>
                                            </label>
                                            <div class="mfInfo"></div>
                                        </div>
                                    </div>
                                </fieldset>
                                </h6>
                                <div class="mfControls text-center  text-xl-left">
                                    <br>
                                    <button class="btn btn-md btn-primary fl-budicons-launch-right164 fl" type="submit">Book Availability </button>
                                </div>
                            </form>
                            <!-- END RD Mailform -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper-container swiper-slider swiper-slider-1" data-height="100vh" data-min-height="655px">
                <div class="swiper-wrapper text-center">
                	<?php 
                	foreach ($this->data['sliders'] as $slider)
                	{
                		?>
                	<div class="swiper-slide" data-slide-bg="<?php echo $this->url."/img-up/main-gallery/front/".$slider['name']; ?>"> </div>
                		<?php
                	}
                	?>
                </div>
            </div>
            <!-- END Swiper -->
    	<?php
    	$content = ob_get_contents();
    	ob_end_clean();
    	return $content;
    }
    
    public function getHeader()
    {
    	ob_start();
    	?>
	   <!--========================================================
                              HEADER
    =========================================================-->
        <header class="page-header">
            <?php echo self::getMainMenu(); ?>
            <!-- END RD Navbar -->
            <div class="bg-color-2 inset-1">
                <div class="container  text-center  text-xl-left">
                    <div class="row">
                        <div class="col-xl-4 z-ind bg-1">
                            <h2 class="relative">Promotions and discounts</h2>
                            <h5 class="text-light text-famaly inset-11 relative">Promotion description.</h5>
                            <br />
                            <div class="mfControls text-center  text-xl-left"> <a href="index.html#" class="link text-italic link-lg link-no-underline"> Read more</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo self::getSearchEngine(); ?>
            
        </header>
    	<?php
    	$header = ob_get_contents();
    	ob_end_clean();
    	return $header;
    }
    
    public function getSection()
    {
    	ob_start();
    	?>
    	<?php
    	$content = ob_get_contents();
    	ob_end_clean();
    	return $content;
    }
    
    public function getPreAbout()
    {
    	ob_start();
    	?>
    	<!-- Pre About -->
            <section class="well-md">
                <div class="container text-center text-md-left">
                    <h2>Love Story Travel </h2>
                    <div class="divider divider-1"></div>
                    <div class="row">
                        <div class="col-md-8">
                            <p>We are a travel agency 100% dedicated to the couples, being out principal goal to create in each trip a romantic and unforgettable experience.

From a honeymoon to a romantic getaway LOVE STORY TRAVELS will take care of every little detail of the trip so you and your loved one can live the romance</p> <a href="index.html#" class="link text-italic link-lg"> Read more</a> </div>
                    </div>
                </div>
            </section>
            <!-- END Pre About-->
    	<?php
    	$content = ob_get_contents();
    	ob_end_clean();
    	return $content;
    }
    
    public function getPreExperiences()
    {
    	ob_start();
    	?>
        <!-- Swiper -->
            <div class="swiper-container swiper-slider" data-height="85vh" data-min-height="350px">
                <div class="swiper-wrapper text-center">
                    <div class="swiper-slide" data-slide-title="Luxury suites for the most exquisite travellers" data-slide-subtitle="Subtitle text" data-slide-bg="images/swiper_4.jpg">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row row-sm-center">
                                    <div class="col-sm-8">
                                        <h3>Experience One</h3>
                                        <p class="heading-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p> 
                                        <a href="index.html#" class="btn btn-sm btn-primary">Book Your Experience</a> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <span class="overlay"></span> 
                    </div>
                    
                    <div class="swiper-slide" data-slide-title="Deluxe hotel rooms for honeymooners" data-slide-subtitle="Subtitle text" data-slide-bg="images/swiper_5.jpg">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row row-sm-center">
                                    <div class="col-sm-8">
                                        <h3>Experience Two</h3>
                                        <p class="heading-6">Experience small description</p> 
                                        <a href="index.html#" class="btn btn-sm btn-primary">Book Your Experience</a> 
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <span class="overlay"></span> 
                    </div>
                </div>
                <!-- Swiper Navigation -->
                <div class="swiper-button swiper-button-prev"> <span class="swiper-button__arrow fl-budicons-launch-left163 ">
						</span>
                    <div class="preview">
                        <h3 class="title"></h3>
                        <p class="subtitle"></p>
                        <div class="preview__img"></div>
                    </div>
                </div>
                <div class="swiper-button swiper-button-next"> <span class="swiper-button__arrow fl-budicons-launch-right164 ">

		</span>
                    <div class="preview">
                        <h3 class="title"></h3>
                        <p class="subtitle"></p>
                        <div class="preview__img"> </div>
                    </div>
                </div>
            </div>
            <!-- END Swiper-->
        <?php
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function getPreDestinations()
    {
    	ob_start();
    	?>
    	<!-- Post -->
            <section>
                <div class="row row-no-gutter">
                	<?php 
                	shuffle($this->data['destinations'] );
                	$i = 0;
                	foreach ($this->data['destinations'] as $destination)
                	{
                		if ($i < 3)
                		{
                		?>
                	<div class="col-md-4 ">
                        <div class="post-news postfix-1 "> <img src="<?php echo $this->url."/img-up/destinations/original/".$destination['photo']; ?>" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
                            <div class="inner_txt">
                                <h4><?php echo $destination['name']; ?></h4>
                                <h5 class="text-light"><?php echo $destination['small_description']; ?></h5> 
                                <a href="index.html#" class=" link text-italic link-lg link-default"> View more</a> </div>
                        </div>
                    </div>
                		<?php
                		}
                		$i++;
                	}
                	?>
                </div>
            </section>
            <!-- END Post-->
    	<?php
    	$content = ob_get_contents();
    	ob_end_clean();
    	return $content;
    }
    
    public function getMainGallery()
    {
    	ob_start();
    	?>
    	<!-- Swiper -->
            <div class="swiper-container swiper-slider" data-height="85vh" data-min-height="350px">
                <div class="swiper-wrapper text-center">
                	<?php 
                	foreach ($this->data['mainGallery'] as $gallery)
                	{
                		?>
                	<div class="swiper-slide" data-slide-title="<?php echo $gallery['title']; ?>" 
                			data-slide-bg="<?php echo $this->url."/img-up/main-gallery/front/".$gallery['name']; ?>">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row row-sm-center">
                                </div>
                            </div>
                        </div> 
                        <span class="overlay"></span> 
                    </div>
                		<?php
                	}
                	?>
                </div>
                <!-- Swiper Navigation -->
                <div class="swiper-button swiper-button-prev"> <span class="swiper-button__arrow fl-budicons-launch-left163 ">
						</span>
                    <div class="preview">
                        <h3 class="title"></h3>
                        <p class="subtitle"></p>
                        <div class="preview__img"></div>
                    </div>
                </div>
                <div class="swiper-button swiper-button-next"> 
                    <span class="swiper-button__arrow fl-budicons-launch-right164 "></span>
                    <div class="preview">
                        <h3 class="title"></h3>
                        <p class="subtitle"></p>
                        <div class="preview__img"> </div>
                    </div>
                </div>
            </div>
            <!-- END Swiper-->
    	<?php
    	$content = ob_get_contents();
    	ob_end_clean();
    	return $content;
    }
    
    public function getSubscribe()
    {
    	ob_start();
    	?>
    	<!-- Contacts -->
            <section class="well-md well-md-var-2">
                <div class="container text-center text-md-left contact-info">
                    <div class="row contact-info offset-3">
                        <div class="col-lg-12 text-center"> 
                            <h4>Subscribe and receive special offers</h4>
                        </div>
                        <div class="col-lg-12 text-center"> 
                            <form class="rd-mailform" method="post" action="/bat/rd-mailform.php">
                                <!-- RD Mailform Type -->
                                <input type="hidden" name="form-type" value="subscribe">
                                <!-- END RD Mailform Type -->
                                <fieldset class="border-none">
                                    <div class="row z-ind offset-13">
                                        <div class="col-sm-8 col-sm-preffix-2 offset-3 border-none col-xl-12 col-xl-preffix-0 inset-16">
                                            <label data-add-placeholder="" data-add-icon="" class="mfInput">
                                                <input type="text" name="email" data-constraints="@NotEmpty @Email" style="border: 1px solid #75094b; margin: 20px;" class="subscribe-email" placeholder="">
                                            </label>
                                        </div>
                                        <div class="mfInfo mfProgress"><span class="cnt"></span><span class="loader"></span><span class="msg"></span></div>
                                    </div>
                                </fieldset>
                                <button class="btn btn-sm btn-primary fl-budicons-launch-right164 fl" type="submit">Suscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Contacts-->
    	<?php
    	$content = ob_get_contents();
    	ob_end_clean();
    	return $content;
    }
    
    
    public function getIndexContent()
    {
    	ob_start();
    	?>
    	<!--========================================================
                              CONTENT
    =========================================================-->
        <main class="page-content">
        	<?php echo self::getPreAbout(); ?>
            <?php echo self::getPreExperiences(); ?>
            <!-- Accommodation -->
            <section class="well-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Love Story Travels</h2>
                            <p>The beach is one of the most romantic places on earth, that’s why offer the Best destinations in the Mexican Caribbean.</p>
                        </div>
                    </div>
                    <div class="devider var-1"></div>
                </div>
            </section>
            <!-- END Accommodation-->
            <?php echo self::getPreDestinations(); ?>
            
            <!-- Accommodation -->
            <section class="well-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Love Story Travels</h2>
                            <p>Resorts especially designed for couples and romantic celebrations</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Accommodation-->
            <?php echo self::getMainGallery(); ?>
            <?php echo self::getSubscribe(); ?>
        </main>
    	<?php
    	$index = ob_get_contents();
    	ob_end_clean();
    	return $index;	
    }
    
    public static function getFooter()
    {
    	ob_start();
    	?>
    	<!--========================================================
                              FOOTER
    ==========================================================-->
    	<footer class="page-footer well-xs">
            <div class="container">
                <div class="text-center text-md-left">
                    <p> &#169; <span id="copyright-year">2017</span> Love Story Travel <a href='index-5.html'>Privacy Policy</a>
                        <!-- {%FOOTER_LINK} -->
                    </p>
                </div>
                
                <div class="text-center text-md-right">
                    <ul class="inline-list social">
                        <li><a href="https://www.facebook.com/Love-STORY-Travels-1216065071847283/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/lovestorytrvls/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/LoveStoryTvls?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    	<?php
    	$footer = ob_get_contents();
    	ob_end_clean();
    	return $footer;
    }
    
    public function getCommonScripts()
    {
    	ob_start();
    	?>
    	<!-- Core Scripts -->
    	<script src="/js/core.min.js"></script>
    	<!-- Additional Functionality Scripts -->
    	<script src="/js/script.js"></script>
    	<?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
}