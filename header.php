<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
<script src="//branding.vcu.edu/bar/academic/latest.js"
    type="text/javascript">
    </script>
    <!-- Matomo -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.online.vcu.edu"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="https://stats.rampages.us/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '6']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<style>
	#skip-to-content {
		position: fixed;
		z-index: 1000;
		top: -50px;
		left: 0;
		width: 100%;
		height:35px;
		text-align:center;
		font-size: 1.5em;
		background-color:white;
	}
	#skip-to-content:focus {
		top: 0;
	}
	.alert-message {
	    line-height: 100px;
	    font-family: Roboto,sans-serif;
	    font-weight: 600;
	    font-size: 1.3rem;
	    line-height: 1.5;
	    text-align: center;
	    padding: 25px 10px 25px 10px;
	}
	.alert-message a {
    	color: #fff;
    	text-decoration: underline;
	}
	.alert-message a:hover {
		color: #fff;
	}
	.alert-banner {
	    color: #fff;
	    background-color: #d43900;
	}
</style>
<a id="skip-to-content" href="#main">Skip to Content</a>
<div class="alert-banner">
	<div class="alert-message col-md-12">ALERT: VCU faculty can find <a href="https://altlab.vcu.edu/facilitated-courses/">professional development opportunities for online courses here.</a></div>
</div>
		<div class="container">

			<header class="header clearfix" role="banner" aria-label="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div class="inner-header">
					<div class="inner-header-wrap">
						<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						<p id="logo" class="h1" role="heading" aria-level="1" itemscope itemtype="http://schema.org/Organization">
							<a href="<?php echo home_url(); ?>" rel="nofollow">
        <img class="monotone" alt="Online @ VCU brand logo in monotone" src="<?php echo get_template_directory_uri(); ?>/library/images/svg/online-vcu-horz.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/online-vcu-horz.jpg'">
        <img class="color" alt="Online @ VCU brand logo in color" src="<?php echo get_template_directory_uri(); ?>/library/images/svg/online-vcu-horz-hover.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/online-vcu-horz-hover.jpg'">
        					</a>
        				</p>

						<?php // if you'd like to use the site description you can un-comment it below ?>
						<?php // bloginfo('description'); ?>

						<div class="hamburger"><span class="closed">&#9776;</span><span class="open">&#10005;</span> MENU</div>
						<nav class="cf" aria-label="main-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
	    					'container' => false,                           // remove nav container
	    					'container_class' => 'menu',                 // class of container (should you choose to use it)
	    					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					'menu_class' => 'nav top-nav',               // adding custom nav class
	    					'theme_location' => 'main-nav',                 // where it's located in the theme
	    					'before' => '',                                 // before the menu
		        			'after' => '',                                  // after the menu
		        			'link_before' => '',                            // before each link
		        			'link_after' => '',                             // after each link
		        			'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
						</nav>
					</div>
				</div>

				<?php if ( !is_front_page() ){ ?>
					<header class="page-title-wrap" aria-label="page-title">
						<?php
						if ( is_404() ){
							echo '<h1 class="page-title" itemprop="headline" style="text-align:center">(ಠ_ಠ)</h1>';
						} elseif ( is_search() ){
							echo '<h1 class="page-title" itemprop="headline">Search</h1>';
						} else {
							echo '<h1 class="page-title" itemprop="headline">'. get_the_title() .'</h1>';
						}?>

					</header>
				<?php } else{
					wp_nav_menu(array(
    					'container' => false,                           // remove nav container
    					'container_class' => 'menu',                 // class of container (should you choose to use it)
    					'menu' => __( 'The Home Menu', 'bonestheme' ),  // nav name
    					'menu_class' => 'home-nav top-nav',               // adding custom nav class
    					'theme_location' => 'home-nav',                 // where it's located in the theme
    					'before' => '',                                 // before the menu
	        			'after' => '',                                  // after the menu
	        			'link_before' => '',                            // before each link
	        			'link_after' => '',                             // after each link
	        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => ''                             // fallback function (if there is one)
						));
					} ?>


<?php if ( is_front_page() ){ ?>
<video aria-hidden="true" autoplay loop poster="https://farm8.staticflickr.com/7422/10885973016_2c86d90f36_b.jpg" id="bgvid">
	<source src="<?php echo get_template_directory_uri(); ?>/library/videos/montage4mark.webm" type="video/webm">
</video>
<?php } ?>

			</header>
