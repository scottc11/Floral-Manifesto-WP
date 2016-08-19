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
					<section class="articles-container">

						<?php get_template_part('homepage-loop'); ?>

						<a href="#">More Articles</a>

					</section>
					<!-- /section -->

		</div>
	</main>

<?php get_footer(); ?>
