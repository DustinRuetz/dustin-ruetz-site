WORKING CODE

<!-- Writing a custom Loop and using WP_Query -->
			<?php
				// $portfolioArgs is an ARRAY
				$portfolioArgs = array(
					'post_type' => 'portfolio-piece',
					'meta_key' => 'featured',
					'orderby' => 'meta_value_num',
					'order' => 'DESC'
				);
				// portfolioQuery is an OBJECT
				$portfolioQuery = new WP_Query($portfolioArgs);
				// In PHP the -> is equivalent to . in JavaScript
				if( $portfolioQuery -> have_posts() ) {
					while( $portfolioQuery -> have_posts() ) {
						$portfolioQuery -> the_post();
						?>

			<article>
				<figure class="">
					<?php echo the_post_thumbnail('medium'); ?>
					<div>
						<h3> <?php the_title() ?> </h3>
						<p> <?php the_field('pp_type') ?> </p>
						<div>

							<ul>
							<?php while(has_sub_field('pp_tech')) {
							?>
								<li> <?php the_sub_field('technology') ?> </li>
							<?php
							} ?>
							</ul>

							<?php the_field('pp_desc') ?>
						</div>
					</div>
			</article>
			<?php
		}
	}
// Best practice: always include below line to rest the Loop
wp_reset_postdata();
?>