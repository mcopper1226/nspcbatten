<?php
if (has_post_thumbnail() ):
  $id = get_post_thumbnail_id();
  $src1 = wp_get_attachment_image_src( $id, 'full' );
  $src = $src1[0];
  $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
endif;
$title = get_the_title();
$date = get_field('event_date');
$start = get_field('event_start_time');
$end = get_field('event_end_time');
$link = get_permalink();
$cat = wp_get_post_terms($post->ID, 'event_type', array("fields" => "names"));
?>

<div class="eventSnippet">
  <a class="es__innerWrap" href="<?php echo $link; ?>">
    <div class="relative oh">
      <div class="bg-center zoom" style="background-image:url(<?php echo $src ?>)"></div>
      <svg viewBox="0 0 2 1" class="aspect"><rect x="0" y="0" width="2" height="1" /></svg>
        <?php if($cat): echo '<div class="category-flag">' . $cat[0] . '</div>' ; endif; ?>
    </div>
    <div class="es__content">
      <h5><?php echo $title; ?></h5>
      <p><?php echo date("M d", strtotime($date)); ?> / <?php echo date("g:ia", strtotime($start)); ?><?php echo date("g:ia", strtotime($end)); ?></p>
    </div>
  </a>
</div>
