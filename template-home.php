<?php
// Template Name: Homepage

get_header();

if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

<?php
  $heroTxt = get_field('hero_text');
  $heroCTA = get_field('hero_cta');

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
      <?php if($heroTxt): ?>
        <div class="hero-content">
          <?php echo $heroTxt; ?>
          <?php if($heroCTA): ?>
            <a class="button" href="<?php echo $heroCTA['url'];?>"><?php echo $heroCTA['title'];?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>

    </div>
    <svg viewBox="0 0 2 1" class="aspect"><rect x="0" y="0" width="2" height="1" /></svg>
  </div>
<?php endif; ?>
    <section class="intro">
      <div class="outer-container small">
        <div class="inner-container">
        <?php the_content(); ?>
        </div>
        <div class="inner-container flex-grid-3">
          <div class="hi__outerWrap">
            <a class="hi__innerWrap">
              <div class="hi__icon">
                <img src="<?php echo THEME_IMG_PATH . '/compass.svg'; ?>"/>
              </div>
              <h3>Education & Training</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a efficitur felis. Duis posuere turpis in tortor euismod porttitor.</p>
            </a>
          </div>
          <div class="hi__outerWrap">
            <a class="hi__innerWrap">
              <div class="hi__icon">
                <img src="<?php echo THEME_IMG_PATH . '/board.svg'; ?>"/>
              </div>
              <h3>Education & Training</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a efficitur felis. Duis posuere turpis in tortor euismod porttitor.</p>
            </a>
          </div>
          <div class="hi__outerWrap">
            <a class="hi__innerWrap">
              <div class="hi__icon">
                <img src="<?php echo THEME_IMG_PATH . '/people.svg'; ?>"/>
              </div>
              <h3>Education & Training</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a efficitur felis. Duis posuere turpis in tortor euismod porttitor.</p>
            </a>
          </div>
        </div>
        <div class="inner-container align-c">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a efficitur felis. Duis posuere turpis in tortor euismod porttitor.</p>
          <a class="button mt3" href="#">Learn More</a>
        </div>
      </div>
    </section>
    <section class="home-events np">
      <div class="outer-container w9">
        <h2 class"relative lined">Upcoming Events</h2>
        <div class="inner-container flex-grid-3">
          <?php
          $args = array(
          	'post_type' => 'events',
            'tax_query' => array(
          		array(
          			'taxonomy' => 'event_status',
          			'field'    => 'slug',
          			'terms'    => 'upcoming',
          		),
          	)
          );

          $query = new WP_Query( $args );


          if ($query->have_posts() ) {
          	while ( $query->have_posts() ) {
          		$query->the_post();
          		  get_template_part('components/event', 'snippet');
          	} // end while
          } // end if
          /* Restore original Post Data */
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </section>
    <section class="testimonials np">
      <div class="t__outerWrap">
        <div class="testimonialSlider">
          <?php
          $args = array(
            'post_type' => 'people',
            'meta_query' => array(
                array(
                    'key' => 'show_on_front',
                    'value' => true,
                    'compare' => '='
                ),
            ),
          );

          $query = new WP_Query( $args );


          if ($query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
                get_template_part('components/testimonial');
            } // end while
          } // end if
          /* Restore original Post Data */
          wp_reset_postdata();
          ?>
        </div>
      </div>

    </section>
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


<?php
  }
}
?>
</main>
<?php
get_footer();
