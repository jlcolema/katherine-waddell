<!DOCTYPE HTML>

<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<title><?php tf_title(); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php echo get_theme_option('favicon'); ?>" />

	<?php wp_head();  ?>

	<!--[if lte IE 9]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if IE 8]>
		<link rel="stylesheet" href="<?php echo THEME_CSS; ?>/ie8.css" type="text/css" media="screen" />
	<![endif]-->

	<script type="text/javascript" src="http://use.typekit.com/ems2jky.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body <?php body_class(); ?>>

	<header id="header">
	
		<div class="container">
		
			<div class="sixteen columns">
			
				<a id="logo" title="<?php echo get_bloginfo('name'); ?>" href="<?php echo home_url( '/' ); ?>">
				
					<img src="<?php echo get_theme_option('logo_image'); ?>">
				
				</a>
	
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container' => false, 'theme_location'  =>'main_nav', 'menu_id' => 'nav')); ?>
		
			</div>
		
		</div>
		
	</header>
