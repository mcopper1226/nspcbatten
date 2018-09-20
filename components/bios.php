<?php
if (has_post_thumbnail() ):
  $id = get_post_thumbnail_id();
  $src1 = wp_get_attachment_image_src( $id, 'full' );
  $src = $src1[0];
  $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
endif;
$title = get_the_title();
$content = apply_filters('the_content', get_the_content());
$link = get_permalink();
?>

<div class="bio">
  <?php echo $title; ?>
</div>
