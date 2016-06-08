<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<?php // Load Meta ?>
	<title> <?php wp_title('|', true, 'right'); ?> </title>
	<link rel="pingback" href=" <?php bloginfo( 'pingback_url' ); ?> " />
	<meta charset=" <?php bloginfo( 'charset' ); ?> " />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- stylesheets should be enqueued in functions.php -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<header>
		<div class="container">
			<h1>
				<a href=" <?php echo home_url( '/' ); ?> " title=" <?php bloginfo( 'name', 'display' ); ?> " rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			
			<div class="nav-container">
				<!-- Main navbar (includes logo and page links) -->
				<nav id="main-nav">
					<?php $siteLogo = get_field('site_logo', 'option') ?>
					<img src='<?php echo $siteLogo[sizes][medium] ?>'>

					<?php wp_nav_menu( array(
						'container' => false,
						'theme_location' => 'primary'
					)); ?>
				</nav>
			</div>

			<?php // wp_nav_menu( array(
				// 'container' => false,
				// 'theme_location' => 'primary'
			// )); ?>
		</div> <!-- /.container -->
	</header>
