<?php get_header('dark'); ?>

<main>
    <section class="people_archive">
      <div class="outer-container">
        <div class="inner-container flex-grid-3">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part('components/people'); ?>
<?php endwhile; endif; ?>
    </div>
    </div>
    </section>

<?php rewind_posts(); ?>


<section class="people_offCanvas">
  <div class="close-bio">x</div>
  <div class="outer-container">
    <div class="inner-container">
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('components/bios'); ?>
<?php endwhile; ?>

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
<?php get_footer();
