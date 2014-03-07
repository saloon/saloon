<div class="container">
  <div class="row">
    <div class="large-9 columns posts">
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="post multiple" >

        <div class="page-header">
          <h2>
            <a href="<?php the_permalink(); ?>" title="<?php printf('Permalink to %s', the_title_attribute('echo=0') ); ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
          </h2>
          <span class="author ">
            <a href="<?php the_author_meta('user_url') ?>">
              <?php echo get_avatar($authordata->ID, 100); ?>
            </a>
            <p class="post-info">
              <time class="published" datetime="<?php the_time('Y-m-d\TH:i:sO') ?>">
                Posted on <?php the_time( get_option( 'date_format' ) ); ?>
              </time>
              <br />
              Written by <a href="<?php the_author_meta('user_url') ?>"><?php the_author_meta('first_name'); ?></a>
            </p>
          </span>
        </div>

        <div class="content">
          <img src="<?php echo the_post_widescreen_image(); ?>" class="featured-image" />
          <?php the_post_widescreen_image(); ?>
          <?php the_excerpt(); ?>

          <a href="<?php the_permalink(); ?>" class="button radius success disabled small read-more-button" title="<?php printf( __('Permalink to %s', 'saloon_io'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
            <?php _e( 'Read more →', 'saloon_io' ); ?>
          </a>
        </div>

        <div class="share">
          <div style="clear:both"></div>
        </div>

      </article>

    <?php endwhile; ?>
    </div>
    <div class=" large-3 columns">
    <?php include "sidebar.php"; ?>
    </div>
  </div>

  <nav class="pager">
    <div class="previous">
      <?php previous_posts_link(__( '&larr; Previous', 'saloon_io' )) ?>
    </div>
    <div class="next">
      <?php next_posts_link(__( 'Next &rarr;', 'saloon_io' )) ?>
    </div>
  </nav>
</div>