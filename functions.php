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
