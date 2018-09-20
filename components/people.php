<?php
if (has_post_thumbnail() ):
  $id = get_post_thumbnail_id();
  $src1 = wp_get_attachment_image_src( $id, 'full' );
  $src = $src1[0];
  $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
endif;
$title = get_the_title();
$role = get_field('faculty_title');
$link = get_permalink();
$rawid = get_the_ID();
$id = 'person-' . $rawid
?>

<div class="people-wrap" data-person="<?php echo $id; ?>">
  <div class="relative oh">
    <div class="bg-center zoom" style="background-image:url(<?php echo $src ?>)"></div>
    <svg viewBox="0 0 1 1" class="aspect"><rect x="0" y="0" width="1" height="1" /></svg>
  </div>
  <h4><?php echo $title; ?></h4>
  <span class="title"><?php echo $role; ?></span>
</div>
