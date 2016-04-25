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
      autoplayTimeout:5000,
      autoplayHoverPause:true,
      loop: true,
      dotsContainer: '.carousel-custom-dots'
    });
    $('.owl-dot').click(function () {
      owlContainer.trigger('to.owl.carousel', [$(this).index(), 300]);
    });
  });
})(jQuery);
/**
 * single gallery page
 */
(function($){
  $(document).ready(function() {
    require('./owl.carousel-single.js');
    var sync1 = $("#owl-gallery-main");
    var sync2 = $("#owl-gallery-thumbs");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
      items : 1,
      slideSpeed : 2000,
      nav: true,
      autoplay: true,
      dots: false,
      loop: true,
      responsiveRefreshRate : 200,
      navText: ['назад','вперед'],
    }).on('changed.owl.carousel', syncPosition);

    sync2
      .on('initialized.owl.carousel', function () {
        sync2.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
      items : slidesPerPage,
      dots: false,
      nav: true,
      smartSpeed: 200,
      margin:15,
      slideSpeed : 500,
      slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
      responsiveRefreshRate : 100,
      navText: ['назад','вперед'],
    }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
      //if you set loop to false, you have to restore this next line
      // var current = el.item.index;

      //if you disable loop you have to comment this block
      var count = el.item.count-1;
      var current = Math.round(el.item.index - (el.item.count/2) - .5);
      if(current < 0) {
        current = count;
      }
      if(current > count) {
        current = 0;
      }
      //end block

      sync2
        .find(".owl-item")
        .removeClass("current")
        .eq(current)
        .addClass("current");
      var onscreen = sync2.find('.owl-item.active').length - 1;
      var start = sync2.find('.owl-item.active').first().index();
      var end = sync2.find('.owl-item.active').last().index();

      if (current > end) {
        sync2.data('owl.carousel').to(current, 100, true);
      }
      if (current < start) {
        sync2.data('owl.carousel').to(current - onscreen, 100, true);
      }
    }

    function syncPosition2(el) {
      if(syncedSecondary) {
        var number = el.item.index;
        sync1.data('owl.carousel').to(number, 100, true);
      }
    }

    sync2.on("click", ".owl-item", function(e){
      e.preventDefault();
      var number = $(this).index();
      sync1.data('owl.carousel').to(number, 300, true);
    });
  });
})(jQuery);
