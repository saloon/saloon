<?php
  /*
  Template Name: Blog Post List
  */
 get_header();
?>

<div class="container blog-list">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <?php while ( have_posts() ) : the_post(); ?>
        <article  class="article" >
          <div class="article-header">
            <h1 class="article-title">
              <a href="<?php the_permalink(); ?>" title="<?php printf('Permalink to %s', the_title_attribute('echo=0') ); ?>" rel="bookmark">
                <?php the_title(); ?>
              </a>
              <br><small><?php the_time( get_option( 'date_format' ) ); ?></small>
            </h1>

          </div>

          <div class="content">
            <?php the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>" class="btn btn-primary" title="<?php printf( __('Permalink to %s', 'saloon_io'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
              <?php _e( 'Read more', 'saloon_io' ); ?>
            </a>
          </div>

          <div class="share">
            <div style="clear:both"></div>
          </div>

        </article>

      <?php endwhile; ?>
    </div>
  </div>
</div>