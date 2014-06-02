<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie <?php echo substr(get_bloginfo('language'), 0, 2); ?>" lang="<?php echo substr(get_bloginfo('language'), 0, 2); ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie <?php echo substr(get_bloginfo('language'), 0, 2); ?>" lang="<?php echo substr(get_bloginfo('language'), 0, 2); ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie <?php echo substr(get_bloginfo('language'), 0, 2); ?>" lang="<?php echo substr(get_bloginfo('language'), 0, 2); ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="<?php echo substr(get_bloginfo('language'), 0, 2); ?>" lang="<?php echo substr(get_bloginfo('language'), 0, 2); ?>"> <!--<![endif]-->
<!--
    Nice to meet you here!

    We are always looking for talented people to help us experiment with the latest project.
    If you're interested, drop us a line:
    awesome@saloon.io

    -P
-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
  <title dir="<?php bloginfo('text_direction'); ?>"><?php
  if ( is_single() ) {
    single_post_title();
    print ' • ';
    bloginfo('name');
  } elseif ( is_front_page() ) {
    bloginfo('name'); /*print ' • '; bloginfo('description');*/ get_page_number();
  } elseif ( is_page() ) {
    single_post_title('');
    print ' • ';
    bloginfo('name');
  } elseif ( is_search() ) {
    bloginfo('name');
    print ' • Search results for ' . wp_specialchars($s);
    get_page_number();
  } elseif ( is_404() ) {
    bloginfo('name');
    print ' • Not found';
  } else {
    bloginfo('name');
    wp_title('•', true);
    get_page_number();
  }
  ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/vendor/animate.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/style.css">
  <meta name="author" content="Saloon">
  <meta name="city" content="Vienna">
  <meta name="country" content="Austria">
  <meta name="state" content="Vienna">
  <meta name="zipcode" content="1100">
  <meta name="geo.position" content="48.208174;16.373819">
  <meta name="geo.placename" content="Vienna, VIE">
  <meta name="geo.region" content="AT">
  <meta name="robots" content="index, follow">
  <meta property="fb:page_id" content="saloon.io">

  <?php /*if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); */?>

  <?php remove_action('wp_head', 'wp_generator'); ?>
  <?php wp_head(); ?>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.smooth-scroll.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/min/main.min.js"></script>
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf('%s latest posts', wp_specialchars( get_bloginfo('name'), 1 ) ); ?>">
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf('%s latest comments', wp_specialchars( get_bloginfo('name'), 1 ) ); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<div class="container">

  <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
        <span class="sr-only">Toggle navigation</span>
        <div class="pull-left">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
        <div class="icon-bar-label pull-right">MENU</div>
      </button>

      <a href="#"><img class="navbar-logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/blog" class=" <? echo (is_single() || is_page('blog')) ? 'current':'' ?>">Blog</a></li>
        <li><a href="/about" class=" <? echo is_page('about') ? 'current':'' ?>">About us</a></li>
      </ul>
    </div>
  </nav>
</div>
