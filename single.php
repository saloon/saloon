<?php get_header(); ?>
<?php while ( have_posts() ) : the_post() ?>

<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full")?>

<div class="blog-single">
  <div class="article-featured-image-wrapper">
    <div class="article-featured-image" style="background-image:url('<?=$imgsrc[0]?>');">
      <div class="blog-single-article-header-wrapper">
        <div class="blog-single-article-header">
          <h1 class="article-title">
            <span>
              <?php the_title(); ?>
            </span>
          </h1>
          <div class="media article-title-about">
            <img src="https://secure.gravatar.com/avatar/<?php echo md5(get_the_author_meta('email'))?>?s=200" class="img-circle media-object pull-left img-author">
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
      <a href="#content"><i class="fa fa-angle-down blog-single-scroll-down"></i></a>
    </div>
  </div>

  <div class="container" id="content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="content">
        <?php the_content(); ?>
        <?php wp_link_pages('before=<div class="page-link">Pages:&after=</div>') ?>
      </div>
    </article>

    <div class="about-author">
      <hr>
      <div class="media">
        <img src="https://secure.gravatar.com/avatar/<?php echo md5(get_the_author_meta('email'))?>?s=200" class="img-circle pull-left media-object">
        <div class="media-body">
          <h3 class="media-heading">About <?php the_author_meta('first_name'); ?></h3>
          <p>
            <?php the_author_meta('description'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>


<?php endwhile; ?>


<div class="subscribe">
  <h3>Who are we?</h3>
  <p>We're just two developers who love creating products. On this site we want to share some of our projects, ideas and experiences with you.</p>
  <p>If you want to <strong>stay up to date</strong>, join <strong>1 billion subscribers</strong>:</p>
  <?php mailchimpSF_signup_form(); ?>
</div>

<?php get_footer(); ?>