<?php
  /*
  Template Name: About Page
  */
 get_header();
?>

<div class="container about">
  <div class="row">
    <div class="col-md-6 col-sm-12 nicolas">
      <div class="about-text">

        <div class="clearfix">
          <div class="about-text-header">
            <img src="http://gravatar.com/avatar/6217b8ec20914163fc0ea79cd20e0a4a?s=200" class="avatar img-circle">
            <div class="about-text-name">
              <h2>Nicolas Dular</h2>
              <h4><small><i class="fa fa-heart"></i> UI/UX Design | Drums | Photography</small></h4>
            </div>
          </div>
        </div>

        <p>I am a <?= floor((time() - strtotime('Sept 24, 1992 00:00:00 GMT+2')) / (60*60*24*365)); ?> years old developer who felt in love with UI and UX design. Creating something from nothing was always fascinating to me. Besides studying, working, my band and other stuff I enjoy coding in Ruby on Rails.</p>

        <ul class="list-inline social-icons">
          <li><a href="http://github.com/nicolas-dular"><i class="fa fa-github"></i></a></li>
          <li><a href="http://twitter.com/nicolasdular"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://dribbble.com/nicolasdular"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="col-md-6 col-sm-12 philipp">
      <div class="about-text">
        <div class="clearfix">
          <div class="about-text-header">
            <img src="http://gravatar.com/avatar/046db2877d2f9342de37d0d59c5df4a9?s=200" class="avatar img-circle">

            <div class="about-text-name">
              <h2>Philipp Spie&szlig;</h2>
              <h4><small><i class="fa fa-heart"></i> Ruby on Rails | Coffe-Script | Ice-Cream</small></h4>
            </div>
          </div>
        </div>

        <p>I'm a computer science student and programming for <?= floor((time() - strtotime('Nov 19, 1992 00:00:00 GMT+2')) / (60*60*24*365)) - 11; ?> years. Today, I do most of the development jobs in Ruby or Coffee-Script. At Saloon, I'm responsible for making everything rock-solid. I'm <?= floor((time() - strtotime('Nov 19, 1992 00:00:00 GMT+2')) / (60*60*24*365)); ?> years old.</p>

        <ul class="list-inline social-icons">
          <li><a href="http://github.com/philipp-spiess"><i class="fa fa-github"></i></a></li>
          <li><a href="http://twitter.com/philippspiess"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://facebook.com/spiessphilipp"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
