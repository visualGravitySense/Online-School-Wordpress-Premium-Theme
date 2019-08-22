$(window).load(function() {
  $('#horizontalTab').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                }
            });

////hot deals slider left
$('.flexhd').flexslider({
    animation: "slide"
  });
 $('.flexgallery').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 176,
    itemMargin: 5
  });
  $('.flexreview').flexslider({
    animation: "slide"
  });
  $('.flext-r').flexslider({
    animation: "slide"
  });
});
//// Pretty Photo
$(window).load(function(){
    $("a.prettyphoto").prettyPhoto({
	theme: 'dark_rounded', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
	social_tools:false,
	show_title: true, /* true/false */
	});
  });
$(window).load(function(){
  var $container = $('.gw');
// init
$container.isotope({
  // options
  itemSelector: '.gal',
  layoutMode: 'masonry'
});
});
$(document).ready(function(){
$('.wither-w a.w-select').bind("click", function(e){ 
	$('.city-drop').fadeToggle();
});
});