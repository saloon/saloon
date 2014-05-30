$(function(){
  var resize_helper = function() {
    var setHeightTo = $(window).outerHeight() - $('.navbar').height() - 300;

    $('.article-featured-image').height((setHeightTo > 300) ? setHeightTo : 300);
  };

  resize_helper();
  $('.blog-single a').smoothScroll({offset: -60});

  $(window).on('resize', resize_helper);
});
