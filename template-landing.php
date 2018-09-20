<?php
// Template Name: Landing Page

get_header('dark');


if (have_posts()) {
  while (have_posts()) {
    the_post();
?>

<main>
    <section class="intro">
      <div class="outer-container">
        <div class="inner-container">
        <?php the_content(); ?>
        </div>
      </div>
    </section>
    <?php if( have_rows('landing_page_items') ): ?>
      <section class="landing-links">
        <div class="outer-container">
          <div class="inner-container">

	           <?php while( have_rows('landing_page_items') ): the_row();

          		// vars
          		$image = get_sub_field('image');
              $title = get_sub_field('title');
          		$description = get_sub_field('description');
          		$link = get_sub_field('page_link');

          		?>

              <a class="ll_outerWrap" href="<?php echo $link; ?>">
                <div class="ll_image bg-center" style="background-image:url('<?php echo $image['url'];?>')">
                  <svg viewBox="0 0 2 1" class="aspect"><rect x="0" y="0" width="2" height="1" /></svg>
                </div>
                <div class="ll_description">
                  <h2><?php echo $title; ?></h2>
                  <p><?php echo $description; ?></p>
                </div>
              </a>

	           <?php endwhile; ?>

        </div>
      </div>
    </section>

    <?php endif; ?>

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
  }
}
?>
<?php
get_footer();
