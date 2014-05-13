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


function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}