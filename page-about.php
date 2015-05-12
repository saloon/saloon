<?php
  /*
  Template Name: About Page
  */
 get_header();
?>

<div class="container about">
  <div class="row">
    <div class="col-md-6 col-sm-12 nicolas animated fadeInLeft">
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

        <p>I am a <?= floor((time() - strtotime('Sept 24, 1992 00:00:00 GMT+2')) / (60*60*24*365)); ?> years old developer who fell in love with UI and UX design. Creating something from nothing was always fascinating to me. Besides studying, working, my band and other stuff I enjoy coding in Ruby on Rails.</p>

        <ul class="list-inline social-icons">
          <li><a href="http://github.com/nicolas-dular"><i class="fa fa-github"></i></a></li>
          <li><a href="http://twitter.com/nicolasdular"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://dribbble.com/nicolasdular"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="col-md-6 col-sm-12 philipp animated fadeInRight">
      <div class="about-text">
        <div class="clearfix">
          <div class="about-text-header">
            <img src="http://gravatar.com/avatar/046db2877d2f9342de37d0d59c5df4a9?s=200" class="avatar img-circle">

            <div class="about-text-name">
              <h2>Philipp Spie&szlig;</h2>
              <h4><small><i class="fa fa-heart"></i> Ruby on Rails | Ember.js | Interaction Design</small></h4>
            </div>
          </div>
        </div>

        <p>
          I think good software should be usable. This is why I started to become
          a software developer back in 2003. Today, I do most of the development jobs
          using Ruby on Rails or Ember.js. I'm <?= floor((time() - strtotime('nov 19, 1992 00:00:00 GMT+2')) / (60*60*24*365)); ?> years old.
        </p>

        <ul class="list-inline social-icons">
          <li><a href="http://github.com/philipp-spiess"><i class="fa fa-github"></i></a></li>
          <li><a href="http://twitter.com/philippspiess"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://dribbble.com/PhilippSpiess"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
