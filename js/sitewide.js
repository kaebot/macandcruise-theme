// JavaScript included on every theme page
// Code for single pages included in Twig templates

jQuery(document).ready(function(jQuery) {
	jQuery('.slick-element').slick({dots: true, focusOnSelect: false});
	
	jQuery('#featured-events img, .artists-featured-image img').each(function() {
		var image = jQuery(this);
		//console.log(image.attr('src')+" - "+image.width()+" x "+image.height());
		if (image.width() > image.height()) {
			image.addClass('landscape');        
		} else {
			image.addClass('portrait');        
		}
	});
});

jQuery(function() {
  jQuery('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname && !jQuery(this).hasClass('unmove')) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html,body').animate({
          scrollTop: target.offset().top-jQuery('.navbar-top').height()-jQuery('#wpadminbar').height()
        }, 500);
        return false;
      }
    }
  });
});
scrollready = document.body.scrollTop; 

jQuery(window).load(function(){
    // scroll at doc ready is 0 if we have never been here before even though 
    // there is a hash. hash height gets computed at window load
    if(window.location.hash.length>1 && document.body.scrollTop!==scrollready){
        window.scrollTo(0,document.body.scrollTop-jQuery('.navbar-fixed-top').height()-jQuery('#wpadminbar').height());
    }
});
