jQuery(document).ready(function(){

jQuery(function() {
    if (jQuery.browser.webkit) {
        jQuery(".flexfull").css('position','relative');
    }
});

	// initiate page scroller plugin
	jQuery('#nav').onePageNav({
		begin: function() {
		console.log('start')
		},
		end: function() {
		console.log('stop')
		},
		
    	filter: ':not(.external a)'
	});


		jQuery('.section').parallax("50%", 0.05);
		
		
		// fading out/in slider stuff
		var fadeStart=100 // 100px scroll or less will equiv to 1 opacity
			,fadeUntil=500 // 200px scroll or more will equiv to 0 opacity
			,fading = jQuery('.stuff2')
		;
		
		jQuery(window).bind('scroll', function(){
			var offset = jQuery(document).scrollTop()
				,opacity=0
			;
			if( offset<=fadeStart ){
				opacity=1;
			}else if( offset<=fadeUntil ){
				opacity=1-offset/fadeUntil;
			}
			fading.css('opacity',opacity);
		});
		

		/* adipoli effects an one + */
		
		jQuery('.clients img').adipoli({
			'startEffect' : 'grayscale',
			'hoverEffect' : 'normal'
		}); 
		

		/* folio hover */
			
		jQuery('#portfolio-list,ul.block').on('mouseenter', 'li', function() {
			jQuery(this).find('img.attachment-folio').stop(true, true).animate({'opacity': '0.8'}, {duration:350});
	
		});
	
		jQuery('#portfolio-list,ul.block').on('mouseleave', 'li', function() {
			jQuery(this).find('img.attachment-folio').stop(true, true).animate({'opacity': '1'}, {duration:350});                           
		});  

		jQuery('ul.block').on('mouseenter', 'li', function() {
			jQuery(this).find('.inside').stop(true, true).animate({'opacity': '1'}, {duration:350});
	
		});
	
		jQuery('ul.block').on('mouseleave', 'li', function() {
			jQuery(this).find('.inside').stop(true, true).animate({'opacity': '0'}, {duration:500});                           
		}); 

		/* wp gallery hover */	
				
		jQuery('.imgwrap').hover(function() {
			jQuery(this).find('a.hoverstuff-link,a.hoverstuff-zoom')
				.animate({
					opacity: '1', 	
				}, 100); 
		
			} , function() {
		
			jQuery(this).find('a.hoverstuff-link,a.hoverstuff-zoom')
				.animate({
					opacity: '0', 	
				}, 400); 
		});

		jQuery('ul.block li').hover(function() {
			jQuery(this).find('img')
				.animate({
					opacity: '.5', 	
				}, 100); 
		
			} , function() {
		
			jQuery(this).find('img')
				.animate({
					opacity: '.8', 	
				}, 400); 
		});



	/* Tooltips */
		jQuery("body").prepend('<div class="tooltip"><p></p></div>');
		var tt = jQuery("div.tooltip");
		
		jQuery(".flickr_badge_image a img,ul.social-menu li a").hover(function() {								
			var btn = jQuery(this);
			
			tt.children("p").text(btn.attr("title"));								
						
			var t = Math.floor(tt.outerWidth(true)/2),
				b = Math.floor(btn.outerWidth(true)/2),							
				y = btn.offset().top - 30,
				x = btn.offset().left - (t-b);
						
			tt.css({"top" : y+"px", "left" : x+"px", "display" : "block"});			
			   
		}, function() {		
			tt.hide();			
		});


	/* Resize too large images */
	var size = 614;
	var image = jQuery('.entry img');
	
	for (i=0; i<image.length; i++) {
		var bigWidth = image[i].width;
		var bigHeight = image[i].height;
	
		if (bigWidth > size) {	
			var newHeight = bigHeight*size/bigWidth;
			image[i].width = size;
			image[i].height = newHeight;
		}
	}


	function lightbox() {
		// Apply PrettyPhoto to find the relation with our portfolio item
		jQuery("a[rel^='prettyPhoto']").prettyPhoto({
			// Parameters for PrettyPhoto styling
			animationSpeed:'fast',
			slideshow:5000,
			theme:'pp_default',
			show_title:false,
			overlay_gallery: false,
			social_tools: false
		});
	}
	
	if(jQuery().prettyPhoto) {
		lightbox();
	}

});