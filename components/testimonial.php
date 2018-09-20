<?php
if (has_post_thumbnail() ):
  $id = get_post_thumbnail_id();
  $src1 = wp_get_attachment_image_src( $id, 'full' );
  $src = $src1[0];
  $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
endif;
$title = get_the_title();
$testimonial = get_field('student_testimonial');
$year = get_field('cohort_year');
$link = get_permalink();
?>

<div class="t__slider">
  <div class="t__innerWrap">
    <div class="t__image" style="background-image:url('<?php echo $src; ?>')">
        <svg viewBox="0 0 5 4" class="aspect"><rect x="0" y="0" width="5" height="4" /></svg>
    </div>
    <div class="t__content">
      <p><?php echo $testimonial; ?></p>
      <p><span class="t__attribution"><?php echo $title; ?></span><span class="t__context">NSPC Cohort <?php echo $year; ?></span></p>
    </div>
  </div>
</div>
