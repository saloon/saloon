$(function(){
  var resize_helper = function() {
    $('.article-featured-image').height($(window).outerHeight() - $('.navbar').height() - 4);
  };

  resize_helper();
  $('.blog-single a').smoothScroll({offset: -60});

  $(window).on('resize', resize_helper);

});
