(function(){

    jQuery(document).ready(function() {

        /* ---------------------------------------------- /*
         * Scroll top
         /* ---------------------------------------------- */

        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.page-scroll-up').fadeIn();
            } else {
                jQuery('.page-scroll-up').fadeOut();
            }
        });
		
		jQuery('.page-scroll-up').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 700);
			return false;
		});

        // let it snow, let it snow, let it snow, 
        if ((new Date()).getMonth() in {0: 'Jan', 1: 'Feb', 11: 'Dec'}){
            jQuery(document).snowfall({
                image : `${mytheme.template_url}/images/snow/snow${Math.floor(Math.random() * (3 - 1) + 1)}.png`, 
                minSize: 10, 
                maxSize: 15,
                round: true,
                shadow: false,
            });
        }

    });
})(jQuery);