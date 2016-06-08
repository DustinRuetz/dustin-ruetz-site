<?php get_header(); ?>

<main>

	<section id="about" class="page-section">
		
	</section>

	<section id="portfolio" class="page-section">
		<div class="container">
			<h2>Portfolio</h2>

			<div class="portfolio-pieces">
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
						<?php while( $portfolioQuery -> have_posts() ) :
							$portfolioQuery -> the_post(); 
							$class = get_field('featured_piece') ? 'featured-piece' : '';
						?>
						<article class="portfolio-piece <?php echo $class; ?>" background-image="  ">
							<?php $ppImage = get_field('pp_image'); ?>
							<img src=" <?php echo $ppImage['url'] ?> ">

							<div class="overlay">
								<div>
									<h3> <?php the_title() ?> </h3>
									<p class="pp-type"> <?php the_field('pp_type') ?> </p>
									<ul>
										<?php while(has_sub_field('pp_tech')) {
										?>
											<li> <?php the_sub_field('technology') ?> </li>
										<?php
										} ?>
									</ul>
									<?php // the_field('pp_desc') ?>
								</div>
							</div>
						</article>
						<?php endwhile; ?>
				<?php endif; ?>

				<pre> <?php print_r(the_post_thumbnail); ?> </pre>

				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>

	<section id="skills" class="page-section">
		<div class="container">
			<h2>Skills</h2>
		</div>
	</section>

	<section id="contact" class="page-section">
		<div class="container">
			<h2>Contact</h2>
		</div>
	</section>

	<?php // Start the loop ?>
		<?php if ( have_posts() )
			while ( have_posts() ) :
				the_post(); ?>

		<!-- <h2> <?php // the_title(); ?> </h2> -->
		<?php the_content(); ?>

	<?php endwhile; // End the loop ?>
	<!-- </div> /.content -->

</main>

<?php get_footer(); ?>