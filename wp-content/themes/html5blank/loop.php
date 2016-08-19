

<!-- STARTING THE LOOP -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<div class="article col-xs-12 col-sm-6 col-md-4">

			<div id="post1" class="article-preview-container">

				<!-- the background image conatiner-->
				<div style="background-image: url();" class="post-background">

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(array(400,400)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

				</div>

				<!-- this is just a hack to position the next div -->
				<div class="post-image-shell"></div>

				<div class="sub-post-header-container">
					<div class="sub-post-header-shell">
						<h1 class="post-title sub-post-header"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
						<h3 class="post-date sub-post-date-header">
							<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
								<?php the_date(); ?> <?php the_time(); ?>
							</time>
						</h3>
					</div>
				</div>
			</div>

		</div>




		<!-- post thumbnail -->
		<!-- <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?> -->
		<!-- /post thumbnail -->

		<!-- post title -->
		<!-- <h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h2> -->
		<!-- /post title -->

		<!-- post details -->
		<!-- <span class="date">
			<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
				<?php the_date(); ?> <?php the_time(); ?>
			</time>
		</span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
		<!-- /post details -->

		<!-- <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?> -->

		<!-- <?php edit_post_link(); ?> -->

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
