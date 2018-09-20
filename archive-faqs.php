<?php get_header();

if (have_posts()) {
  echo 'FAQs'; 
  while (have_posts()) {
    the_post();
    the_content();
  }
}

get_footer();
