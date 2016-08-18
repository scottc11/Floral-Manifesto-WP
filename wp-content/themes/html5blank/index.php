<?php get_header(); ?>

	<main role="main">
		<div class="container">

					<div class="row">
						<div class="heading-stitch-divider col-xs-12">
							<div class="stitch-heading">
								<img src="<?php echo get_template_directory_uri(); ?>/img/articles.png" alt="ARTICLES" />
							</div>
						</div>
					</div>


					<!-- section -->
					<section>

						<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>

					</section>
					<!-- /section -->
					
		</div>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
