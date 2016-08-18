<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<div class="col-xs-12 col-md-4">
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

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>
	</div>


</aside>
<!-- /sidebar -->
