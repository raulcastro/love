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
		$this->data   	= $data;
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
			
			<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
			<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
			<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
			<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
			<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
			<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
			<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
			<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
			<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
			<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
			<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
			<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
			<link rel="manifest" href="/favicon/manifest.json">
			<meta name="msapplication-TileColor" content="#ffffff">
			<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
			<meta name="theme-color" content="#ffffff">
			
			<title><?php echo $this->title; ?> - <?php echo $this->data['appInfo']['title']; ?></title>
			<meta name="keywords" content="<?php echo $this->data['appInfo']['keywords']; ?>" />
			<meta name="description" content="<?php echo $this->data['appInfo']['description']; ?>" />
			<meta property="og:type" content="website" /> 
			<meta property="og:url" content="<?php echo $this->data['appInfo']['url']; ?>" />
			<meta property="og:site_name" content="<?php echo $this->data['appInfo']['siteName']; ?> />
			<link rel='canonical' href="<?php echo $this->data['appInfo']['url']; ?>" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<?php echo self::getCommonDocuments(); ?>			
			<?php 
			switch ($section) 
			{
				case 'index':
 					echo self::getIndexHeader();
				break;
				
				case 'experiences':
					echo self::getExperiencesHead(); 
				break;
				
				case 'destinations':
					echo self::getDestinationsHead();
				break;
				
				case 'extras':
					echo self::getExtrasHead();
				break;
				
				case 'contact':
					echo self::getContactHead();
				break;
				
				case 'about':
					echo self::getAboutHead();
				break;
				
			}
			?>
			<style type="text/css">
	    .page-header {
	 		margin-top: 0!important;
	
			}
			
			.vc_row-flex:before, .vc_row-flex:after{
  width: 0!important;
}

.row {
    &:before {
        content: none!important;
    }

    &:after {
        content: ''!important;
    }
} 
			
			.product {
        /* this is to automatically center and prevent overflow
           on very narrow viewports */
        display: inline-block!important;
        max-width: 100%!important;
    }
    
    .row:before, .row:after {
display: flex !important;
}
	    </style>
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
				if ($section == 'index')
				{
					echo self::getHeader();
				}
				else 
				{
					echo self::getNonIndexHeader();
				}	
				?>
				<?php 
				switch ($section) 
				{
					case 'index':
						echo self::getIndexContent();
					break;
					
					case 'experiences':
						echo self::getExperiencesContent();
					break;
					
					case 'destinations':
						echo self::getDestinationsContent();
					break;
					
					case 'extras':
						echo self::getExtrasContent();
					break;
					
					case 'contact':
						echo self::getContactContent();
					break;
					
					case 'about':
						echo self::getAboutContent();
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
			<?php 
			switch ($section) 
			{
				case 'index':
					echo self::getIndexScripts();
				break;
				
				case 'destinations':
					echo self::getDestinationsScripts();
				break;
				
				case 'experiences':
					echo self::getExperiencesScripts();
				break;
				
				case 'extras':
					echo self::getExtrasScripts();
				break;
				
				case 'contact':
					echo self::getContactScripts();
				break;
				
				case 'about':
					echo self::getAboutScripts();
				break;
				
				default :
					# code...
				break;
			}
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
	    <link rel="stylesheet" href="/css/style.css">
	    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic%7CSource+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
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
    
    public function getIndexScripts()
    {
    	ob_start();
    	?>
    	<!-- Latest compiled and minified JavaScript -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	<script src="//rawgit.com/saribe/eModal/master/dist/eModal.min.js"></script>
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
                                <!--<a href="/" class="brand-name">
                                    Love Story<br> 
                                    <span class="brand-slogan">Special Way to Travel</span>
                                </a>-->
                                <a href="/" class="brand-name">
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
                                <li> <a href="/about-us/">About Uss</a> </li>
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
    	<input type="hidden" id="currentDestination">
    	<input type="hidden" id="currentExperience">
    	
    	<!-- Modal -->
		<div class="modal fade" id="modalEngine" tabindex="-1" role="dialog" aria-labelledby="myModalLabelEngine">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h5 class="modal-title" id="myModalLabelEngine">Book now</h5> 
					</div>
					<div class="modal-body"> 
						<div class="row" id="noDestination">
							<div class="col-md-12 text-center">
								<h4>You should select a destination</h4>
							</div>
						</div>
						
						<div class="row" id="noExperience">
							<div class="col-md-12 text-center">
								<h5>There is no experience available on this destination. Please select another one.</h5>
							</div>
						</div>
						
						<div class="row" id="engineContent">
							
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" id="checkInAux" />
		<input type="hidden" id="checkOutAux" />
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
                                            <label class="line-right offset-15" data-add-placeholder data-add-icon>
                                                <input type="date" name="check-in" data-placeholder="check in" id="checkInIndex" data-constraints="@Date" /> </label>
                                        </div>
                                        <div class="col-sm-4 col-xl-6 prefix-5  inset-13">
                                            <label data-add-placeholder data-add-icon class="offset-15">
                                                <input type="date" name="check-out" data-placeholder="check out" id="checkOutIndex" data-constraints="@Date" /> </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                            <form class='rd-mailforms' method="post" action="/bat/rd-mailform.php">
                                <!-- RD Mailform Type -->
                                <input type="hidden" name="form-type" value="contact" />
                                <!-- END RD Mailform Type -->
                                <fieldset class="border-none">
                                    <div class="row z-ind offset-13">
                                        <div class="col-sm-4 col-sm-preffix-2 col-xl-preffix-0 col-xl-6 inset-13 ">
                                            <label class="line-right offset-15" data-add-placeholder data-add-icon>
                                                <select name="destination" class="form-control input-style" id="destinationsIndex" data-constraints="@Text"  />
                                                	<option value="0">Destination</option>
                                                	<?php 
								                	foreach ($this->data['destinations'] as $destination)
								                	{
								                		?>
								                	<option value="<?php echo $destination['destination_id']; ?>"><?php echo $destination['name']; ?></option>
								                		<?php
								                	}
								                	?>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-sm-4 col-xl-6 prefix-5  inset-13">
                                            <label data-add-placeholder data-add-icon class="offset-15">
                                                <select name="destination" class="form-control input-style" id="experiencesIndex" data-constraints="@Text" />
                                                	<option value="0">Experiences</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                </h6>
                                <div class="mfControls text-center  text-xl-left">
                                    <br>
                                    <a href="#" id="bookIndex" onclick="" class="btn btn-md btn-primary fl-budicons-launch-right164 fl no-underline" data-toggle="modal" data-target="#modalEngine">Book Availability</a>
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
                            <h2 class="relative">Love Story Travel</h2>
                            <h5 class="text-light text-famaly inset-11 relative">The beach is one of the most romantic places on earth, that’s why offer the Best destinations in the Mexican Caribbean.</h5>
                            <br />
                            <div class="mfControls text-center  text-xl-left"> <a href="/about-us/" class="link text-italic link-lg link-no-underline"> Read more</a> </div>
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
    
    public function getNonIndexHeader()
    {
    	ob_start();
    	?>
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
                                    <a href="/" class="brand-name">
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
                                <li <?php if ($this->section == 'experiences'){echo "class='active'";}?>> <a href="/experiences/">Romantic Experiences</a> </li>
                                <li <?php if ($this->section == 'destinations'){echo "class='active'";}?>> <a href="/destinations/">Destinations</a></li>
                                <li <?php if ($this->section == 'extras'){echo "class='active'";}?>> <a href="/extras/">Extras</a> </li>
                                <li <?php if ($this->section == 'about'){echo "class='active'";}?>> <a href="/about-us/">About Us</a> </li>
                                <li <?php if ($this->section == 'contact'){echo "class='active'";}?>> <a href="/contact/">Contact Us</a> </li>
                            </ul>
                            <!-- END RD Navbar Nav -->
                        </div>
                    </div>
                </nav>
            </div>
            <!-- END RD Navbar -->
        </header>
    	<?php
    	$header = ob_get_contents();
    	ob_end_clean();
    	return $header;
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

From a honeymoon to a romantic getaway LOVE STORY TRAVELS will take care of every little detail of the trip so you and your loved one can live the romance</p> <a href="/about-us/" class="link text-italic link-lg"> Read more</a> </div>
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
                	<?php 
                	foreach ($this->data['experiences'] as $experience)
                	{
                		?>
					<div class="swiper-slide" data-slide-title="<?php echo $experience['name']; ?>" data-slide-subtitle="<?php echo $experience['name']; ?>" data-slide-bg="<?php echo $this->url."/img-up/experiences/original/".$experience['swiper']; ?>">
                        <div class="swiper-slide-caption">
                            <div class="container">
                                <div class="row row-sm-center">
                                    <div class="col-sm-8">
                                        <h3><?php echo $experience['name']; ?></h3>
                                        <p class="heading-6"><?php echo $experience['small_description']; ?></p> 
                                        <a href="/" class="btn btn-sm btn-primary">Book Your Experience</a> 
                                    </div>
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
                                <a href="/" class=" link text-italic link-lg link-default"> View more</a> </div>
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
    
    public function getExperiencesHead()
    {
    	ob_start();
    	?>
    	<script type="text/javascript"></script>
    	<?php
    	$head = ob_get_contents();
    	ob_end_clean();
    	return $head;
    }
    
    public function getExperiencesScripts()
    {
    	ob_start();
    	?>
    		<script type="text/javascript">
		</script>
		<script src=""></script>
		<!-- Latest compiled and minified JavaScript -->
        	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        	<script src="//rawgit.com/saribe/eModal/master/dist/eModal.min.js"></script>
    	<?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
    
    public function getExperiencesContent()
    {
    	ob_start();
    	?>
    	<!--========================================================
                              CONTENT
    	=========================================================-->
        <?php 
		foreach ($this->data['experiences'] as $experience)
		{
			?>
    	<!-- Modal -->
		<div class="modal fade" id="myModal-<?php echo $experience['experience_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-<?php echo $experience['experience_id']; ?>">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php echo $experience['name']; ?></h4> 
					</div>
					<div class="modal-body"> 
						<div class="row">
							<div class="col-md-12 text-justify">
								<h6>
                                    <pre><?php echo $experience['description']; ?></pre>
                                    
                                </h6>
								<br>
							</div>
							
							<div class="col-md-12 text-center">
								<br>
								<img class="responsive" src="<?php echo $this->url."/img-up/experiences/original/".$experience['photo']; ?>">
							</div>
							                                
							<div class="col-md-12 col-xl-4 z-ind">
							<!-- END RD Mailform -->
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal -->
    	<?php 
		}
		?>
        <main class="page-content">
            <!-- Gallery -->
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
            <section class="well-md well-md-var-4">
                <div class="row row-no-gutter">
                	<?php 
                	foreach ($this->data['experiences'] as $experience)
                	{
                		?>
					<div class="col-md-6 product">
						<div class="post-news postfix-1 "> 
							<img src="<?php echo $this->url."/img-up/experiences/original/".$experience['photo']; ?>" width="955" height="700" alt=""> <span class="overlay-var-1"></span>
							<div class="inner_txt inner_txt_var-1">
								<h4><?php echo $experience['name']; ?></h4>
								<h5 class="text-light"><?php echo $experience['small_description']; ?></h5> 
								<a href="index.html#" class=" link text-italic link-lg link-default" data-toggle="modal" data-target="#myModal-<?php echo $experience['experience_id']; ?>"> Book your experience</a>
							</div>
						</div>
					</div>
                		<?php
                	}
                	?>
                	<div class="col-md-12 ">
						<div class="post-news postfix-1 "> 
							<img src="/images/ownexperience.jpg" width="955" height="300" alt=""> <span class="overlay-var-1"></span>
							<div class="inner_txt inner_txt_var-1">
								<h4>CREATE YOUR OWN ROMANTIC GETAWAY</h4>
								<h5 class="text-light">If you are looking for something special you can customize your experience, we have a lot of options to choose from!
                                    <br>
                                    * Restrictions may apply</h5> 
								<a href="/contact/" class=" link text-italic link-lg link-default">Contact Us</a> 
							</div>
						</div>
					</div>
            	</div>
            	<div class="row row-no-gutter">
					
            	</div>
            </section>
        </main>
        <?php
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    } 
    
    public function getDestinationsHead()
    {
    	ob_start();
    	?>
    	<script type="text/javascript"></script>
    	<?php
    	$head = ob_get_contents();
    	ob_end_clean();
    	return $head;
    }
    
    public function getDestinationsScripts()
    {
    	ob_start();
    	?>
    	<script type="text/javascript">
		</script>
		<script src=""></script>
		<!-- Latest compiled and minified JavaScript -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	<script src="//rawgit.com/saribe/eModal/master/dist/eModal.min.js"></script>
    	<?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
    
    public function getDestinationsContent()
    {
    	ob_start();
    	?>
        <!--========================================================
                              CONTENT
    	=========================================================-->
        
    	<?php 
		foreach ($this->data['destinations'] as $destination)
		{
			?>
    	<!-- Modal -->
		<div class="modal fade" id="myModal-<?php echo $destination['destination_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-<?php echo $destination['destination_id']; ?>">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php echo $destination['name']; ?></h4> 
					</div>
					<div class="modal-body"> 
						<div class="row">
							<div class="col-md-12 text-justify">
								<h6><?php echo $destination['description']; ?></h6>
								<br>
							</div>
							
							<div class="col-md-12 text-center">
								<br>
								<img class="responsive" src="<?php echo $this->url."/img-up/destinations/original/".$destination['photo']; ?>">
							</div>
							                                
							<div class="col-md-12 col-xl-4 z-ind">
							<!-- END RD Mailform -->
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal -->
    	<?php 
		}
		?>
    	
        <main class="page-content">
            <!-- Gallery -->
            <section class="well-md well-md-var-4">
                <div class="container">
                    <h5>The most romantic Places in the Mexican Caribbean</h5> 
                </div>
                
                <div class="row row-no-gutter">
                	<?php 
                	foreach ($this->data['destinations'] as $destination)
                	{
                		?>
                	<div class="col-md-4 ">
	                    <div class="post-news postfix-1 ">
	                        <img src="<?php echo $this->url."/img-up/destinations/original/".$destination['photo']; ?>" width="955" height="700" alt="">
	                        <span class="overlay-var-1"></span>
	
	                        <div class="inner_txt">
	                            <h4><?php echo $destination['name']; ?></h4>
	                            <div class="col-md-12 text-justify">
									<h6><?php echo $destination['small_description']; ?></h6>
								</div>

                                <a href="index.html#" class=" link text-italic link-lg link-default" data-toggle="modal" data-target="#myModal-<?php echo $destination['destination_id']; ?>"> View more</a>
	                        </div>
	                    </div>
	                </div>
                		<?php
                	}
                	?>
            	</div>
            </section>
        </main>
        <?php
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function getExtrasHead()
    {
    	ob_start();
    	?>
    	<script type="text/javascript"></script>
    	<?php
    	$head = ob_get_contents();
    	ob_end_clean();
    	return $head;
    }
    
    public function getExtrasScripts()
    {
    	ob_start();
    	?>
    	<script type="text/javascript">
		</script>
		<script src=""></script>
		<!-- Latest compiled and minified JavaScript -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    	<script src="//rawgit.com/saribe/eModal/master/dist/eModal.min.js"></script>
    	<?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
    
    public function getExtrasContent()
    {
    	ob_start();
    	?>
    	<!--========================================================
                              CONTENT
    	=========================================================-->
    	<?php 
		foreach ($this->data['extras'] as $extra)
		{
			?>
    	<!-- Modal -->
		<div class="modal fade" id="myModal-<?php echo $extra['extra_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-<?php echo $extra['extra_id']; ?>">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"><?php echo $extra['name']; ?></h4> 
					</div>
					<div class="modal-body"> 
						<div class="row">
							<div class="col-md-12 text-justify">
								<h6><?php echo $extra['description']; ?></h6>
								<br>
								<h5>From <?php echo $extra['price']; ?> USD per couple</h5>
							</div>
							
							<div class="col-md-12 text-center">
								<br>
								<img class="responsive" src="<?php echo $this->url."/img-up/extras/original/".$extra['photo']; ?>">
							</div>
							                                
							<div class="col-md-12 col-xl-4 z-ind">
							<!-- END RD Mailform -->
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal -->
    	<?php 
		}
		?>
    	
        <main class="page-content">
            <!-- Gallery -->
            <section class="well-md well-md-var-4">
                <div class="container">
                    <h5>If you want something even more special we offer you the perfect complement for a perfect experience</h5> 
                    
                    <p style="font-size: 12px; color: #af0d76; font-family: 'Source Sans Pro'; letter-spacing: 1.5px; font-weight: 400;">
                    	*Extras may not be available in all destinations 
                    </p>
                </div>
                
                <div class="row row-no-gutter">
                	<?php 
                	foreach ($this->data['extras'] as $destination)
                	{
                		?>
                	<div class="col-md-4 ">
	                    <div class="post-news postfix-1 ">
	                        <img src="<?php echo $this->url."/img-up/extras/original/".$destination['photo']; ?>" width="955" height="700" alt="">
	                        <span class="overlay-var-1"></span>
	
	                        <div class="inner_txt">
	                            <h4><?php echo $destination['name']; ?></h4>
	                            <h5 class="text-light "><?php echo $destination['small_description']; ?></h5>
	                            <a href="index.html#" class=" link text-italic link-lg link-default" data-toggle="modal" data-target="#myModal-<?php echo $destination['extra_id']; ?>"> View more</a>
	                        </div>
	                    </div>
	                </div>
                		<?php
                	}
                	?>
            	</div>
            </section>
        </main>
        <?php
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function getContactHead()
    {
    	ob_start();
    	?>
    	<script type="text/javascript"></script>
    	<?php
    	$head = ob_get_contents();
    	ob_end_clean();
    	return $head;
    }
    
    public function getContactScripts()
    {
    	ob_start();
    	?>
    	<script type="text/javascript">
		</script>
		<script src=""></script>
    	<?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
    
    public function getContactContent()
    {
    	ob_start();
    	?>
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
                    <form class='rd-mailform offset-10' method="post" action="/bat/rd-mailform.php">
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
                                        <select name="Celebrating">
                                            <option value="">What are you celebrating?</option>
                                            <option value="Honeymoon">Honeymoon</option>
                                            <option value="Anniversary">Anniversary</option>
                                            <option value="Romantic Break">Romantic Break</option>
                                            <option value="Proposal">Proposal</option>
                                            <option value="Renewal">Renewal of vowes</option>
                                            <option value="Babymoon">Babymoon</option>
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
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
    
    public function getAboutHead()
    {
    	ob_start();
    	?>
    	<script type="text/javascript"></script>
    	<?php
    	$head = ob_get_contents();
    	ob_end_clean();
    	return $head;
    }
    
    public function getAboutScripts()
    {
    	ob_start();
    	?>
    	<script type="text/javascript">
		</script>
		<script src=""></script>
    	<?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
    
    public function getAboutContent()
    {
    	ob_start();
    	?>
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
	                        <?php 
							if ($this->data['testimonials'])
							{
								foreach ($this->data['testimonials'] as $testimonial)
								{
									?>
	                            <div class="owl-item">
	                                <img src="/images/page1_img02.png" width="48" height="41" alt="">
	                                <p class="heading-6"><?php echo $testimonial['testimonial']; ?></p>
	                                <p class=" offset-3"><?php echo $testimonial['name']; ?></p>
	                            </div>
	                            <?php
								}
							}
							?>
	                        </div>
	                    </div>
	                </div>
	                <!-- END Owl Carousel -->
	            </div>
	        </section>
	        <!-- END Testimonials-->
	    </main>

        <?php
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
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
                    <p> &#169; <span id="copyright-year">2018</span> Love Story Travels <a href='index-5.html'></a>
                        <!-- {%FOOTER_LINK} -->
                    </p>
                </div>
                
                <div class="text-center text-md-right">
                    <ul class="inline-list social sociallist">
                        <li><a href="https://www.facebook.com/Love-STORY-Travels-1216065071847283/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/lovestorytrvls/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/LoveStoryTvls?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <div id="getSize"><p>W: <span></span></p><p>H: <span></span></p></div>
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
    	<script src="/js/rd-mailform.js"></script>
    	<script src="/js/script.js"></script>
    	<?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
    
    public function getSectionHead()
    {
    	ob_start();
    	?>
    	<script type="text/javascript"></script>
    	<?php
    	$head = ob_get_contents();
    	ob_end_clean();
    	return $head;
    }
    
    public function getSectionScripts()
    {
    	ob_start();
    	?>
    	<script type="text/javascript">
		</script>
		<script src=""></script>
    	<?php
    	$scripts = ob_get_contents();
    	ob_end_clean();
    	return $scripts;
    }
    
    public function getSectionContent()
    {
    	ob_start();
    	?>

        <?php
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}