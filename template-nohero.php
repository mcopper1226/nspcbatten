<?php
// Template Name: No Hero Page

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
