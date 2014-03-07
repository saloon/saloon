<?php get_header(); ?>

<div class="widescreen brown team">
  <div class="container">
    <h1>Not Found</h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="span3">
      <img src="<?php bloginfo('template_url') ?>/img/404.png">
    </div>
    <div class="span8 offset1">
      <article id="post-0" class="post error404 not-found" style="margin-top:30px;">
        <h2 class="entry-subtitle">We're sorry, the page you are looking for does not exist.</h2>

        <div class="entry-content">
          <p>You probably clicked a broken link.</p>
          <p>
            <strong>You can now:</strong>
            <ol>
              <li>Check the URL for typos.</li>
              <li>Go back to <a href="/">home</a>.</li>
              <li>Search the website for information.</li>
            </ol>
          </p>
          <?php get_search_form(); ?>
        </div>
      </article>
    </div>
  </div>
</div>

<?php get_footer(); ?>