<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nature</title>
		<?php wp_head(); ?>
	</head>

	<body>
		<nav>
	<?php wp_nav_menu(array('theme_location'=> 'primary')); ?>
		</nav> 
	<?php	
		if(is_front_page()):
	?>
	<div class="cover">
		<!-- <img src="<?php //echo get_template_directory_uri().'/images/cover.jpg' ?>" alt="Cover Image" /> -->
		<img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php get_custom_header()->width ?>" alt="Cover Image" />
		<div class="caption">
			<h1>Multipager Theme</h1>
			<h2>- basic -</h2>
		</div>
	</div>
	<div class="fullscreen"></div>
	<?php
		endif
	?>