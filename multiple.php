<?php
  /*
  Template Name: Blog Post List
  */
 get_header();
?>


<div class="container blog">
  <div class="col-lg-8 col-lg-offset-2 article">
    <h1 class="article-heading">You Don't need to know growth hacking, to do growth hacking <br><small>8, May, 2014 by Philipp Spieß</small></h1>

    <p>Last year, we were working on a tool for photographers to share their photos to different platforms. Think of it as "Buffer for Photographers" (That's how we always pitched it). To drive more traffic to the website, we thought about a way to attract customers.</p>

    <h3>It's all about the perfect customer</h3>
    <p>We specialized on three major photography platforms. 500px, Flickr and Facebook. All of them are heavily used by photographers. We knew that our target customer would use two or more of those platforms.</p>

    <img src="http://f.cl.ly/items/333Z2h0c0x170F2q0I1o/Facebook%20union%20500px%20union%20Flickr@2x.png" class="img-responsive">

    <p>We were always searching for photographers who are active on two or more of those platforms.  When we finally found one, who matched our requirements, we wrote a very personal email to them. We never wanted to use predefined emails, because adding a personal touch is important in our opinion. This went well, but this process was waaaay too slow for us.</p>

    <h3>Increasing performance</h3>

    <p>We liked to use 500px "Popular", "Editor's Pick" or "Upcoming" channels for picking photographs. Those pages are regularly updated and cover a wide variety of photographers. To make things faster I've written a small Bookmarklet which reduces the opacity of photos, if the photographers don't match our requirements. The bookmarklet injects some Javascript and loads every photographer's page to see if he is active on Facebook and Flickr (If you're interested: <a href="https://gist.github.com/philipp-spiess/404d8b82c0298df2d9a5">[I've released the source code here]</a>.</p>

    <img src="http://f.cl.ly/items/2U33362v000V0k1F3F1D/Reduce%20Noise@2x.png" class="img-responsive">

    <h3>Oh S%&$, Oh S%&$, Oh S%&$!</h3>

    <p>The bookmarklet worked like a charm. Both of us used it to send acquisition emails as often as we could. It didn't took long until we realized that we've been sending emails to the same photographers.

    To solve that problem, I created a Web App that let us enter the email addresses and run a unique check first. To speed things up we added pre defined email messages, which we just needed to enhance with a personal paragraph. We used basic HTML `mailto:` links to send emails as quickly as possible. We even kept track about reply and sign up rates (Perhaps I should open source this and put the link right here).</p>

    <img src="http://cloud.philippspiess.com/TKEN/Bildschirmfoto%202014-01-12%20um%2023.43.32.png" class="img-responsive">

    <h3>Don't forget the challenge</h3>

    <p>We contacted about 150 photographers with this method and had a sign up rate of about 15% and a reply rate of about 7%. To keep things funny, we decided to make this a challenge. We tracked who of us sent most of the emails. In the end, the winner was Nicolas, he sent 67% of the emails where I only sent 33%.

    It was a funny experiment and helped us find great customers. Unfortunately we had to shut down that website, but that's material for another article.</p>
  </div>
<!--
  <?php while ( have_posts() ) : the_post(); ?>
  <article id="article-<?php the_ID(); ?>" class="article" >

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

  <?php endwhile; ?>-->


</div>