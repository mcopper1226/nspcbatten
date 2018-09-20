<?php
// Template Name: Hero Page

get_header();

if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

<main>
  <?php
  if (has_post_thumbnail() ): ?>
  <div class="hero">
    <?php
      $id = get_post_thumbnail_id();
      $src1 = wp_get_attachment_image_src( $id, 'full' );
      $src = $src1[0];
      $srcset = wp_get_attachment_image_srcset( $id, 'full');
      $thumb = wp_get_attachment_image_src( $id, 'blur-thumb');
      $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
    ?>
    <div class="placeholder hero-wrapper" data-large="<?php echo $src; ?>">
      <img src="<?php echo $thumb[0]; ?>" class="img-small">


    </div>
    <svg viewBox="0 0 5 2" class="aspect"><rect x="0" y="0" width="5" height="2" /></svg>
  </div>
<?php endif; ?>
    <section class="intro">
      <div class="outer-container">
        <div class="inner-container">
        <?php the_content(); ?>
        </div>
      </div>
    </section>
    <section class="bottom-cta np">
      <div class="outer-container">
        <div class="inner-container">
          <h2>CTA Text</h2>
          <a class="square-btn-sm" href="/contact">Get Started</a>
        </div>
      </div>
    </section>


<?php
  }
}
?>
</main>
<?php
get_footer();
