<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<?php // Load Meta ?>
	<title> <?php wp_title('|', true, 'right'); ?> </title>
	<link rel="icon" href="wp-content/themes/dustin-ruetz-theme/icons/dr-favicon.png">
	<link rel="pingback" href=" <?php bloginfo( 'pingback_url' ); ?> " />
	<meta charset=" <?php bloginfo( 'charset' ); ?> " />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- stylesheets should be enqueued in functions.php -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >