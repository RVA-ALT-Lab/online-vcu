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

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<style>.vcubar-topbar.light{background:#fff;border-top:3px solid #aab2b1;border-bottom:3px solid #aab2b1}.vcubar-topbar.dark{background:#000;border-top:3px solid #000;border-bottom:3px solid #000}.vcubar-topbar .inner-vcubar{max-width:100%;margin-left:auto;margin-right:auto;height:24px;position:relative}.vcubar-topbar .inner-vcubar:after{content:" ";display:block;clear:both}.vcubar-topbar a{display:block;height:32px;position:absolute;top:50%}.vcubar-topbar a.vcu{width:391px;height:20px;left:20px;margin-top:-10px}.vcubar-topbar a.vcu img{width:391px;height:20px}.vcubar-topbar a.vcu:hover .monotone{opacity:0;-ms-filter:"alpha(Opacity=0)";filter:alpha(opacity=0)}.vcubar-topbar a.vcu:hover .color{opacity:1;-ms-filter:"alpha(Opacity=100)";filter:alpha(opacity=100)}.vcubar-topbar a.vcuarts{width:96px;height:20px;right:20px;margin-top:-12px}.vcubar-topbar a.vcuarts:hover .monotone{opacity:0;-ms-filter:"alpha(Opacity=0)";filter:alpha(opacity=0)}.vcubar-topbar a.vcuarts:hover .color{opacity:1;-ms-filter:"alpha(Opacity=100)";filter:alpha(opacity=100)}.vcubar-topbar a img{position:absolute;border:0}.vcubar-topbar a .color{opacity:0;-webkit-transition:opacity .15s ease-in-out;transition:opacity .15s ease-in-out;-ms-filter:"alpha(Opacity=0)";filter:alpha(opacity=0)}.vcubar-topbar a .monotone{-webkit-transition:opacity .15s ease-in-out;transition:opacity .15s ease-in-out}@media (max-width:768px){.vcubar-topbar a.vcu{width:70px;overflow:hidden}}</style>
<div class="vcubar-topbar dark">
    <div class="inner-vcubar">
      <a href="http://vcu.edu" target="_blank" class="vcu">
        <img class="monotone" src="<?php echo get_template_directory_uri(); ?>/library/images/svg/vcu-dk.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/vcu-dk.jpg'">
        <img class="color" src="<?php echo get_template_directory_uri(); ?>/library/images/svg/vcu-dk-hover.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/vcu-dk-hover.jpg'">
      </a>
    </div>
</div>

		<div class="container">

			<header class="header clearfix" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div class="inner-header">
					<div class="inner-header-wrap">
						<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
						<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>

						<?php // if you'd like to use the site description you can un-comment it below ?>
						<?php // bloginfo('description'); ?>

						<div class="hamburger"><span class="closed">&#9776;</span><span class="open">&#10005;</span> MENU</div>
						<nav class="cf" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
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
					<header class="page-title-wrap">
						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
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

<video autoplay loop poster="https://farm8.staticflickr.com/7422/10885973016_2c86d90f36_b.jpg" id="bgvid">
	<source src="<?php echo get_template_directory_uri(); ?>/library/videos/montage4mark.webm" type="video/webm">
</video>

			</header>
