// Avoid `console` errors in browsers that lack a console.
(function () {
  var method;
  var noop = function () {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
        console[method] = noop;
    }
}
}());
if (typeof jQuery == 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
/**
 * home slider
 */
var owlContainer = $('.home-owl-carousel');
owlContainer.owlCarousel({
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  items:1,
  smartSpeed:450,
  autoplay:true,
  autoplayTimeout:5000,
  autoplayHoverPause:true,
  loop: true,
  dotsContainer: '.carousel-custom-dots'
});
$('.owl-dot').click(function () {
  owlContainer.trigger('to.owl.carousel', [$(this).index(), 300]);
});
