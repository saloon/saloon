<?php get_header(); ?>
<?php while ( have_posts() ) : the_post() ?>

<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full")?>

<div class="blog-single">
  <div class="article-featured-image-wrapper">
    <div class="article-featured-image" style="background-image:url('<?=$imgsrc[0]?>');">
      <div class="blog-single-article-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <h1 class="article-title">
                <span>
                  <?php the_title(); ?>
                </span>
              </h1>
              <div class="media article-title-about">
                <img src="https://secure.gravatar.com/avatar/<? echo md5(get_the_author_meta('email'))?>?s=200" class="img-circle media-object pull-left img-author">
                <div class="media-body">
                  <p class="article-info">
                    <span>
                      <time class="published" datetime="<?php the_time('Y-m-d\TH:i:sO') ?>">
                        Posted on <?php the_time( get_option( 'date_format' ) ); ?>
                      </time>
                      <br />
                      Written by <a href="<?php the_author_meta('user_url') ?>"><?php the_author_meta('first_name'); ?></a>
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a href="#content"><i class="fa fa-angle-down blog-single-scroll-down"></i></a>
    </div>
  </div>
  <div class="container" id="content">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="content">
            <?php the_content(); ?>
            <?php wp_link_pages('before=<div class="page-link">Pages:&after=</div>') ?>
          </div>
        </article>
    </div>
  </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>