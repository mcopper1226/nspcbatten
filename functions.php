<?php

define('UENO_THEME_VERSION', '0.1');

// and make sure we're not leaking on stage/prod
if (!defined('UENO_CONFIG_SET')) {
  ini_set('display_errors', 0);
  define('WP_DEBUG_DISPLAY', false);
  define('SCRIPT_DEBUG', false);
  define('WP_DEBUG', false);
}

require_once('lib/clean.php');

// If we're running a development version this will be set, otherwise it's not
if (!defined('IS_DEV')) {
  define('IS_DEV', false);
}

add_action('wp_enqueue_scripts', function() {
  wp_enqueue_script( 'typekit', '//use.typekit.net/mem7kci.js', array(), '1.0.0' );
  // in development styles are injected via development build of main.js
  if (!IS_DEV) {
    wp_enqueue_style('styles', get_stylesheet_uri(), array(), UENO_THEME_VERSION);
  }
  wp_enqueue_script('slick', get_theme_file_uri('/vendor/slick.min.js'), array(), UENO_THEME_VERSION);
  wp_enqueue_script('scripts', get_theme_file_uri('/js/main.js'), array(), UENO_THEME_VERSION);
});

add_action( 'wp_head', 'nspcbatten_typekit_inline' );

function nspcbatten_typekit_inline() {
	if ( wp_script_is( 'typekit', 'enqueued' ) ) {
		echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
	}
}

//IMG Dir Constant
if( !defined('THEME_IMG_PATH') ) {
  define( 'THEME_IMG_PATH', get_theme_file_uri('assets') );
}

// Add pages to menu under Appearance > Menus
add_action('init', function() {
  register_nav_menus(
    array(
      'menu' => 'Menu',
    )
  );
});

// Allow SVG uploads
add_filter('upload_mimes', function($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
});

add_theme_support( 'post-thumbnails' );
add_image_size( 'blur-thumb', 100 );

// Create a cron job to run the day after an event happens or ends
function set_expiry_date( $post_id ) {

  // See if an event_end_date or event_date has been entered and if not then end the function
  if( get_post_meta( $post_id, $key = 'event_date', $single = true ) ) {

    // Get the end date of the event in unix grenwich mean time
    $acf_date = get_post_meta( $post_id, $key = 'event_date', $single = true );

  } elseif ( get_post_meta( $post_id, $key = 'event_date', $single = true ) ) {

    // Get the start date of the event in unix grenwich mean time
    $acf_date = get_post_meta( $post_id, $key = 'event_date', $single = true );

  } else {

    // No start or end date. Lets delete any CRON jobs related to this post and end the function.
    wp_clear_scheduled_hook( 'make_past_event', array( $post_id ) );
    return;

  }

  // Convert our date to the correct format
  // Start with the standard string format
  $unix_acf_date = strtotime( $acf_date );
  $gmt_date = gmdate( 'Ymd', $unix_acf_date );
  $unix_gmt_date = strtotime( $gmt_date );

  // Get the number of seconds in a day
  $delay = 24 * 60 * 60; //24 hours * 60 minutes * 60 seconds

  // Add 1 day to the end date to get the day after the event
  $day_after_event = $unix_gmt_date + $delay;

  // Temporarily remove from 'Past Event' category
  wp_remove_object_terms( $post_id, 'past', 'event_status' );

  // If a CRON job exists with this post_id them remove it
  wp_clear_scheduled_hook( 'make_past_event', array( $post_id ) );
  // Add the new CRON job to run the day after the event with the post_id as an argument
  wp_schedule_single_event( $day_after_event , 'make_past_event', array( $post_id ) );

}

// Hook into the save_post_{post-type} function to create/update the cron job everytime an event is saved.
add_action( 'acf/save_post', 'set_expiry_date', 20 );


function event_status_event_taxonomy( $post_id ) {
  wp_set_object_terms( $post_id, 'past', 'event_status');
}

add_action( 'make_past_event', 'event_status_event_taxonomy');
