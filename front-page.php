<?php get_header(); ?>

<main>
	<div class="container">

		<!-- <div class="content"> -->

		<section id="about" class="page-section">
			
		</section>

		<section id="portfolio" class="page-section">
			<h2>Portfolio</h2>

			<!-- Writing a custom Loop and using WP_Query -->
			<?php
				// $portfolioArgs is an ARRAY
				$portfolioArgs = array(
					'post_type' => 'portfolio-piece',
					'posts_per_page' => -1,
					'meta_key' => 'featured_piece',
					'orderby' => 'meta_value_num',
					'order' => 'DESC'
				);
				
				$portfolioQuery = new WP_Query($portfolioArgs);
				?>

				<?php if( $portfolioQuery -> have_posts() ): ?>
					<ul>
					<?php while( $portfolioQuery -> have_posts() ) :
						$portfolioQuery -> the_post(); 
						
						$class = get_field('featured_piece') ? 'class="featured_piece"' : '';
						
						?>
						<li <?php echo $class; ?>>
							<h3> <?php the_title() ?> </h3>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>

				<?php wp_reset_query(); ?>
				











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