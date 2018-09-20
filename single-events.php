<?php get_header(); ?>

<?php
while (have_posts()):
  the_post();
  $title = get_the_title();
  $date = get_field('event_date');
  $start = get_field('event_start_time');
  $end = get_field('event_end_time');
  $shortname = get_field('event_shortname');
  $location = get_field('event_location');
  $maplink = get_field('event_map_link');
  $registration = get_field('event_registration');
  $cat = wp_get_post_terms($post->ID, 'event_status', array("fields" => "names"));
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

        <div class="hero-content">
          <h1><?php echo $title; ?></h1>
          <h3>
            <?php echo date("M d", strtotime($date)); ?> /
            <?php echo date("g:ia", strtotime($start)); ?>
            <?php if($end): echo ' - ' . date("g:ia", strtotime($end)); endif; ?>
            <?php if($shortname): echo ' / ' . $shortname; endif; ?>
          </h3>
        </div>


    </div>
    <svg viewBox="0 0 3 1" class="aspect"><rect x="0" y="0" width="3" height="1" /></svg>
  </div>
<?php endif; ?>

<?php if($cat[0] == 'Past') {
  echo 'this event should have a recap';
} else { ?>
  <section class="single-event-intro">
    <div class="outer-container small">
      <div class="inner-container breadcrumbs">Home / Events / Future of Counterterrorism</div>
      <div class="inner-container flex">
      <div class="event__description">
        <?php the_content(); ?>
        <?php if($registration): echo '<a class="button" target="_blank" href=' . $registration . '>Register Now</a>' ; endif; ?>
      </div>
      <div class="event__calloutBox">
        <h4>When</h4>
        <?php echo date("M d", strtotime($date)); ?></br>
        <?php echo date("g:ia", strtotime($start)); ?>
        <?php if($end): echo ' - ' . date("g:ia", strtotime($end)); endif; ?>

          <?php if($location): echo '<h4 class="mt1">Where</h4>' . $location ; endif; ?>
          <?php if($maplink): echo '<a class="maplink" target="_blank" href=' . $maplink . '>Find on Map</a>' ; endif; ?>
      </div>
      </div>
    </div>
  </section>
<?php } ?>


    <section class="signup">
      <div class="outer-container">
        <div class="inner-container">
          <div class="s__content">
            <h2 class="white">Receive NSPC news and updates</h2>
            <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a efficitur felis. Duis posuere turpis in tortor euismod porttitor. Duis nunc elit, placerat sit amet lacus ut, fringilla imperdiet.</p>
          </div>
          <div class="s__form">
            <?php gravity_form( 1, false, false, false, '', false ); ?>
          </div>
        </div>
      </div>
    </section>

</main>

<?php
endwhile;
get_footer();
