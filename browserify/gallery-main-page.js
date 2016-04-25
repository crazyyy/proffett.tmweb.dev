/**
 * home slider
 */
(function($){
  $(document).ready(function() {
    require('./owl.carousel-main.js');
    var owlContainer = $('.home-owl-carousel');
    owlContainer.owlCarousel({
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      items:1,
      smartSpeed:450,
      autoplay:true,
      autoplayTimeout:500,
      autoplayHoverPause:true,
      loop: true,
      dotsContainer: '.carousel-custom-dots'
    });
    $('.owl-dot').click(function () {
      owlContainer.trigger('to.owl.carousel', [$(this).index(), 300]);
    });
  });
})(jQuery);
