!function(){for(var e,t=function(){},o=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],i=o.length,n=window.console=window.console||{};i--;)e=o[i],n[e]||(n[e]=t)}(),"undefined"==typeof jQuery?console.warn("jQuery hasn't loaded"):console.log("jQuery has loaded"),function(e){e(window).load(function(){e(".article-inner").length>0&&e(".article-inner").mCustomScrollbar({theme:"3d",scrollButtons:{enable:!0},callbacks:{onInit:function(){console.log("scrollbars initialized")}}})})}(jQuery);var maxheight=0;$(".menu-category-inner").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".menu-category-inner").height(maxheight);var maxheight=0;$(".chiefs-advice-inner").each(function(){$(this).height()>maxheight&&(maxheight=$(this).height())}),$(".chiefs-advice-inner").height(maxheight),$(document).ready(function(){var e=$("#owl-gallery-menu");e.owlCarousel({items:1,slideSpeed:15e3,nav:!0,autoplay:!0,dots:!1,loop:!0,responsiveRefreshRate:200,navText:["назад","вперед"]})});var $sidebarNavLink=$(".sidebarnav .menu-item-has-children").children("a");$sidebarNavLink.click(function(e){e.preventDefault(),$(this).parent().toggleClass("menu-item-opened")}),$(document).ready(function(){var e=$(".home-owl-carousel");e.owlCarousel({items:1,autoplay:!0,autoplayTimeout:5e3,autoplayHoverPause:!0,loop:!0,dotsContainer:".carousel-custom-dots"}),$(".owl-dot").click(function(){e.trigger("to.owl.carousel",[$(this).index(),300])})}),$(document).ready(function(){function e(e){var t=e.item.count-1,o=Math.round(e.item.index-e.item.count/2-.5);0>o&&(o=t),o>t&&(o=0),i.find(".owl-item").removeClass("current").eq(o).addClass("current");var n=i.find(".owl-item.active").length-1,a=i.find(".owl-item.active").first().index(),l=i.find(".owl-item.active").last().index();o>l&&i.data("owl.carousel").to(o,100,!0),a>o&&i.data("owl.carousel").to(o-n,100,!0)}function t(e){if(a){var t=e.item.index;o.data("owl.carousel").to(t,100,!0)}}var o=$("#owl-gallery-main"),i=$("#owl-gallery-thumbs"),n=4,a=!0;o.owlCarousel({items:1,slideSpeed:2e3,nav:!0,autoplay:!0,dots:!1,loop:!0,responsiveRefreshRate:200,navText:["назад","вперед"]}).on("changed.owl.carousel",e),i.on("initialized.owl.carousel",function(){i.find(".owl-item").eq(0).addClass("current")}).owlCarousel({items:n,dots:!1,nav:!0,smartSpeed:200,margin:15,slideSpeed:2e3,slideBy:n,responsiveRefreshRate:100,navText:["назад","вперед"]}).on("changed.owl.carousel",t),i.on("click",".owl-item",function(e){e.preventDefault();var t=$(this).index();o.data("owl.carousel").to(t,300,!0)})});var $dateLocaleMounth=$("span .m");$dateLocaleMounth.each(function(e,t){var o=$(this).html();"May"==o&&$(this).html("Мая")});
//# sourceMappingURL=maps/scripts.js.map