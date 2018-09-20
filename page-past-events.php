<?php
// Template Name: No Hero Page

get_header('dark');
?>
<main>
    <section class="intro">
      <div class="outer-container">
        <div class="inner-container">
        <?php the_content(); ?>
        </div>
				<?php
				$args = array(
					'post_type' => 'events',
					'tax_query' => array(
						array(
							'taxonomy' => 'event_status',
							'field'    => 'slug',
							'terms'    => 'past',
						),
					),
				);

				$query = new WP_Query( $args );


				if ($query->have_posts() ) { ?>
					<div class="inner-container flex-grid-3">

					<?php while ( $query->have_posts() ) {
						$query->the_post();
						get_template_part('components/event', 'snippet');
					} // end while ?>
				</div>
			<?php	} // end if
				/* Restore original Post Data */
				wp_reset_postdata(); ?>


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
    </main>

<?php
get_footer();
