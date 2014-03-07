<?php

/**
 * Add thumbnail support for our-work
 */
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_image_size( 'widescreen', 1240, 640, true);

// Get the page number
function get_page_number() {
    if ( get_query_var('paged') ) {
        print ' • page ' . get_query_var('paged');
    }
} // end get_page_number

function the_post_widescreen_image() {
  $post_thumbnail_id = get_post_thumbnail_id( get_the_ID() );
  $size = apply_filters( 'post_thumbnail_size', 'widescreen' );
  if ( $post_thumbnail_id ) {
    do_action( 'begin_fetch_post_thumbnail_html', $post_id, $post_thumbnail_id, $size ); // for "Just In Time" filtering of all of wp_get_attachment_image()'s filters
    if ( in_the_loop() )
      update_post_thumbnail_cache();
    $src = wp_get_attachment_image_src( $post_thumbnail_id, $size );
  } else {
    $src = array('');
  }
  return $src[0];
}
