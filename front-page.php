<?php get_header(); ?>

<main>
	<div class="container">

		<!-- <div class="content"> -->

		<section id="about" class="page-section">
			
		</section>

		<section id="portfolio" class="page-section">
			<h2>Portfolio</h2>
		</section>

		<section id="skills" class="page-section">
			<h2>Skills</h2>
		</section>

		<section id="contact" class="page-section">
			<h2>Contact</h2>
		</section>

		<?php // Start the loop ?>
			<?php if ( have_posts() )
				while ( have_posts() ) :
					the_post(); ?>

			<h2> <?php the_title(); ?> </h2>
			<?php the_content(); ?>

		<?php endwhile; // End the loop ?>
		<!-- </div> /.content -->

	</div>
</main>

<?php get_footer(); ?>