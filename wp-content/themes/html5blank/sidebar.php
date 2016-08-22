<!-- sidebar -->
<aside class="sidebar col-xs-12 col-md-4" role="complementary">

	<div>

		<h3>Look for it</h3>
		<?php get_template_part('searchform'); ?>


		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<div class="heading-stitch-divider">
			<div class="heading-stitch-divider"></div>
		</div>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>


		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<div class="heading-stitch-divider">
			<div class="heading-stitch-divider"></div>
		</div>


	</div>


</aside>
<!-- /sidebar -->
