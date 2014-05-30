<?php
  /*
  Template Name: Blog Post List
  */
 get_header();
?>

<div class="container blog-list">
  <div class="row">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="col-xs-12 col-sm-6 col-md-4 animated fadeIn">
        <article class="article">
          <div class="article-header">
            <div class="article-header-thumbnail">
              <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large"); ?>
              <a href="<?php the_permalink(); ?>" title="<?php printf('Permalink to %s', the_title_attribute('echo=0') ); ?>">
                <img src="<?=$imgsrc[0]?>">
              </a>
            </div>
            <a href="<?php the_permalink(); ?>" title="<?php printf('Permalink to %s', the_title_attribute('echo=0') ); ?>" class="article-title">
              <?php the_title(); ?>
            </a>
            <div class="media article-title-about">
              <img src="https://secure.gravatar.com/avatar/<?php echo md5(get_the_author_meta('email'))?>?s=200" class="img-circle media-object pull-left img-author">
              <div class="media-body">
                <p class="info">
                  <span>
                    <time class="published" datetime="<?php the_time('Y-m-d\TH:i:sO') ?>">
                      Posted on <?php the_time( get_option( 'date_format' ) ); ?>
                    </time>
                    <br />
                    Written by <?php the_author_meta('first_name'); ?>
                  </span>
                </p>
              </div>
            </div>
          </div>
          <div class="share">
            <div style="clear:both"></div>
          </div>
        </article>
      </div>
    <?php endwhile; ?>
  </div>
</div>
