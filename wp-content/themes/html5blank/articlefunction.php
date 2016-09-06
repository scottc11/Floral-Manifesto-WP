<?php
  $images = get_attached_media('image', $post->ID);
  $counter = 0;
  foreach($images as $image) { ?>
    <!-- If first element -->
    <?php if ($counter == 0) { ?>
      <div class="main-product-img-container horizontal-center col-xs-12">
        <img src="<?php echo wp_get_attachment_url($image->ID); ?>" />
      </div>

    <?php } else { ?>
      <div class="alt-product-img-container col-xs-3 col-md-4 col-lg-3">
          <img src="<?php echo wp_get_attachment_url($image->ID); ?>" />
      </div>
    <?php } ?>
    <?php $counter++; ?>
<?php } ?>
