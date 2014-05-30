<?php
  /*
  Template Name: Blog Post List
  */
 get_header();
?>

<div class="container blog-list">
  <div class="row">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="<?php the_permalink(); ?>" title="<?php printf('Permalink to %s', the_title_attribute('echo=0') ); ?>" class="article" >
            <div class="article-header">
              <div class="article-header-thumbnail">
                <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large"); ?>
                <img src="<?=$imgsrc[0]?>">
              </div>
              <h1 class="article-title">
                <?php the_title(); ?>
                <br><small><?php the_time( get_option( 'date_format' ) ); ?></small>
              </h1>
            </div>
            <div class="share">
              <div style="clear:both"></div>
            </div>
          </a>
      </div>
    <?php endwhile; ?>
  </div>
</div>
