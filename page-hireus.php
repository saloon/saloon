<?php
  /*
  Template Name: Hire us
  */
 get_header();
?>

<script type="text/javascript">
  $(function(){
    $(".main").onepage_scroll({
      sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
      easing: "ease",                  // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
      // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
      animationTime: 500,             // AnimationTime let you define how long each section takes to animate
      pagination: false,                // You can either show or hide the pagination. Toggle true for show, false for hide.
      updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
      beforeMove: function(index) {},  // This option accepts a callback function. The function will be called before the page moves.
      afterMove: function(index) {
        // $('body').css('border', 0)
      },   // This option accepts a callback function. The function will be called after the page moves.
      loop: true,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
      keyboard: true,                  // You can activate the keyboard controls
      responsiveFallback: 800,        // You can fallback to normal page scroll by defining the width of the browser in which
      // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
      // the browser's width is less than 600, the fallback will kick in.
      direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
    });
  });

</script>

<div class="hire-us">

  <div class="hire-us-section section-white">

    <section class="section-about section">
      <div class="container">
        <div class="quote">"We want to desgin and develop people love to use"</div>
        <a href="#">What our customers say</a>
      </div>
    </section>
    <section class="section-jobiqo section">
      <h2 class="section-title">Jobiqo<br>
      </h2>
      <h3 class="section-tags">User Interface & User Experience Design</h3>
      <div class="media testimonial">
        <a class="pull-left" href="#">
          <img src="<?php bloginfo('template_directory'); ?>/img/testimonial1.jpeg" class="img-circle avatar">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Klaus Furtmüller</h4>
          <p>This is one of the best designs we had in the last years. It is a pleasure for us to work with these guys</p>
        </div>
      </div>

      <div class="screenshot col-sm-4">
        <img src="<?php bloginfo('template_directory'); ?>/img/jobiqo1.png" class="img-circle">
      </div>
      <div class="screenshot col-sm-4">
        <img src="<?php bloginfo('template_directory'); ?>/img/jobiqo1.png" class="img-circle">
      </div>
      <div class="screenshot col-sm-4">
        <img src="<?php bloginfo('template_directory'); ?>/img/jobiqo1.png" class="img-circle">
      </div>
    </section>
    <section class="section-swat section">Test2</section>
    <section class="section-ntry section">Test2</section>

  </div>

</div>

<?php get_footer(); ?>
