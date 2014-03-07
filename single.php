<?php get_header(); ?>
<?php while ( have_posts() ) : the_post() ?>

  <div class="row">
    <div class="large-9 columns">
      <div class="single">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
            <?php the_content(); ?>
            <?php wp_link_pages('before=<div class="page-link">Pages:&after=</div>') ?>

        <div class="share">
        <div class="share-btn"><?php dd_twitter_generate('Compact','saloon_io') ?></div>
        <div class="share-btn"><?php dd_buffer_generate('Compact', 'saloon_io') ?></div>
        <div class="share-btn"><?php dd_fblike_generate('Like Button Count') ?></div>
        <div class="share-btn"><?php dd_google1_generate('Compact (20px)') ?></div>
        <div style="clear:both"></div>
      </div>
            <div class="row about-author">
              <div class="author-avatar large-3 column">
                <?php echo get_avatar($authordata->ID, 200); ?>
              </div>
              <div class="author-text large-9 column">
                <h4>Author: <?php echo get_the_author_meta('display_name'); ?></h4>
                <?php echo get_the_author_meta('description'); ?>
              </div>
            </div>
          </div>
        <!--
        <div class="main-title blog single">
          <h1>Comments</h1>
          <hr />
        </div>
        <div class="row">
          <div class="comments disqus span10 offset1">
            <?php /*comments_template();*/ ?>
          </div>
        </div> -->
      
      
      </article>
    </div>
  </div>
  <div class="large-3 columns">
    <?php include "sidebar.php"; ?>
  </div>
</div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>