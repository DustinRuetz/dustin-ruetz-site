<?php get_header(); ?>

<main id="top">
	<div class="full-page container">		
		<aside class="nav-sidebar">
			<nav class="nav-main" ">
				<?php wp_nav_menu( array(
					'container' => false,
					'theme_location' => 'primary' ));
				?>
			</nav>
		</aside>
			
		<div class="page-content">

			<header class="homepage-header page-section">
				<div class="name-title">
					<h1>Dustin Ruetz</h1>
					<h3>Front-End Web Developer</h3>
				</div>
			</header>

			<section id="about" class="page-section">
				<h2>About</h2>

				<?php // $profilePicture = get_field('profile_picture'); ?>
				<!-- <img class="profile-picture" src="<?php // echo $profilePicture['url'] ?>" alt="<?php//  echo $profilePicture['alt'] ?>"> -->

				<div>
					<h3>Hello! My name is Dustin and I am a front-end web developer headquartered in Toronto.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi earum voluptatem maiores dolores consequuntur consequatur aliquid, assumenda non, modi nesciunt eum voluptate sapiente. Blanditiis non, officia atque totam quae necessitatibus voluptates modi, libero maxime unde minus beatae tempora nostrum quis reiciendis eius illo aliquid voluptas aliquam. Iusto sint autem similique corporis repudiandae, accusantium necessitatibus, sed maiores, accusamus, blanditiis rem saepe!</p>
				</div>
			</section>

			<section id="work">
				<h2>Work</h2>

				<div class="work-text-container">
						
					<?php
						// $workArgs is an ARRAY
						$workArgs = array(
							'post_type' => 'work',
							'meta_key' => 'work_order',
							'orderby' => 'meta_value_num',
							'order' => 'ASC'
						);
						
						$workQuery = new WP_Query($workArgs);
					?>

					<?php if( $workQuery -> have_posts() ): ?>
							<?php while( $workQuery -> have_posts() ) :
								$workQuery -> the_post(); 
							?>
							<article class="work-text">
								<div class="title-type">
									<h4> <?php the_title() ?> </h4>
									<p class="work-type"> <?php the_field('work_type') ?> </p>
								</div>
								<div class="desc-tech">
									<p class="work-desc"> <?php the_field('work_desc') ?> </p>

									<ul>
									<?php while(has_sub_field('work_tech')) {
									?>
										<li> <?php the_sub_field('technology') ?> </li>
									<?php
									} ?>
									</ul>
									
									<?php while(has_sub_field('work_collaborators')) {
									?>
										<p>Made in collaboration with <a href="<?php the_sub_field('work_coll_site') ?>" target="_blank"> <?php the_sub_field('work_coll_name') ?> </a></p>
									<?php
									} ?>
								</div>
								<div class="work-links">
									<a class="work-live" href="<?php the_field('work_live') ?>">View Live</a>
									<a class="work-github" href="<?php the_field('work_github') ?>">View Code</a>
								</div>


							</article>
							<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

				</div>

				<div>
					<?php
						// $workArgs is an ARRAY
						$workArgs = array(
							'post_type' => 'work',
							// 'posts_per_page' => -1,
							'meta_key' => 'work_order',
							'orderby' => 'meta_value_num',
							'order' => 'ASC'
						);
						
						$workQuery = new WP_Query($workArgs);
					?>

					<?php if( $workQuery -> have_posts() ): ?>
							<?php while( $workQuery -> have_posts() ) :
								$workQuery -> the_post(); 
							?>
							<figure class="work-image">
								<?php $workImage = get_field('work_image'); ?>
								<img src="<?php echo $workImage['url'] ?>" alt="">
							</figure>
							<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</section>

			<section id="skills" class="page-section">
				<div>
					<h2>Skills</h2>
				</div>
			</section>

			<section id="contact" class="page-section">
				<div>
					<h2>Contact</h2>
				</div>
			</section>
		</div>
	</div>
</main>

<?php get_footer(); ?>