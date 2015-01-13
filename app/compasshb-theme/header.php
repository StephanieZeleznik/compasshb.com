<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--
        ________            ______                      __     
       /_  __/ /_  ___     / ____/___  _________  ___  / /     
        / / / __ \/ _ \   / / __/ __ \/ ___/ __ \/ _ \/ /      
 _ _ _ / / / / / /  __/  / /_/ / /_/ (__  ) /_/ /  __/ /       
(_|_|_)_/ /_/ /_/\___/ _ \____/\____/____/ .___/\___/_/  __  __
1 Thessalonians / __ \(_)___  ____ _____/_/ / __ \__  __/ /_/ /
   1:8         / /_/ / / __ \/ __ `/ ___/  / / / / / / / __/ / 
              / _, _/ / / / / /_/ (__  )  / /_/ / /_/ / /_/_/  
             /_/ |_/_/_/ /_/\__, /____/   \____/\__,_/\__(_)   
                           /____/			tech.compasshb.com
-->	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="apple-touch-icon-precomposed apple-touch-icon apple-touch-startup-image" href="/wp-content/themes/compasshb-theme/images/apple-touch-icon.jpg">
	<link rel="shortcut icon" href="/wp-content/themes/compasshb-theme/images/favicon.ico">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<?php wp_head(); ?>
	<?php compass_video_og(); ?>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53384235-1', 'auto');
	  ga('send', 'pageview');

	</script>
	
</head>

<!-- Begin Body -->
<body <?php body_class(); ?>>

<div id="outer-wrap" class="clr">

	<?php
	// Wrap before hook
	wpex_hook_wrap_before(); ?>

	<div id="wrap" class="clr">

		<?php
		// Header top hook
		wpex_hook_wrap_top(); ?>
	
		<?php
		// Header layout - see @ partials/header/header-layout.php
		wpex_header_layout(); ?>
		
		<?php
		// Main before hook
		wpex_hook_main_before(); ?>
	
		<div id="main" class="site-main clr">
	
			<?php
			// Main top hook
			wpex_hook_main_top(); ?>