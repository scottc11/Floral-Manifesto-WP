<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container">

			<div class="row">

				<div class="col-xs-12">
					<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
				</div>

				<div class="col-xs-12 col-md-8">
					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar(); ?>

			</div>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
