jQuery(document).ready(function(){
	// maps market survey
	jQuery(".maps-1").click(function(){
		window.location.href = 'market-survey/can-tho';
		// alert('map 1');
    });
    jQuery(".maps-2").click(function(){
		window.location.href = 'market-survey/around-ho-chi-minh';
		// alert('map 2');
    });
    jQuery(".maps-3").click(function(){
		window.location.href = 'market-survey/ho-chi-minh';
		// alert('map 3');
    });
    jQuery(".maps-4").click(function(){
		window.location.href = 'market-survey/vung-tau';
		// alert('map 4');
    });
    jQuery(".maps-5").click(function(){
		window.location.href = 'market-survey/tay-ninh';
		// alert('map 5');
    });

	// mega menu
	jQuery('.mega-menu').click(function(){
		jQuery('nav.navbar').show();
		jQuery('.mega-menu-close').show();
		jQuery(this).hide();
	});
	jQuery('.mega-menu-close').click(function(){
		jQuery('nav.navbar').hide();
		jQuery('.mega-menu').show();
		jQuery(this).hide();
	});
	jQuery('.nav.navbar li a').click(function(){
		jQuery('.mega-menu').show();
		jQuery('.nav.navbar').hide();
	});



	//animation
	jQuery('.ques-fillter').delay('slow').fadeIn();
	// short time
	jQuery('.ques-fillter-st-bt').click(function(){
		jQuery('.ques-fillter').hide();
		jQuery('.ques-fillter-st').delay('slow').fadeIn();
	});
		// short time use yes
		jQuery('.ques-fillter-st-bt-y').click(function(){
			jQuery('.ques-fillter-st').hide();
			jQuery('.ques-fillter-st-use-y').delay('slow').fadeIn();
			// window.location.href = ' rental-office';
		});
		// short time use no
		jQuery('.ques-fillter-st-bt-n').click(function(){
			jQuery('.ques-fillter-st').hide();
			jQuery('.ques-fillter-st-use-n').delay('slow').fadeIn();
			// window.location.href = 'rental-conference-room';
		});

	// long time
	jQuery('.ques-fillter-lt-bt').click(function(){
		jQuery('.ques-fillter').hide();
		jQuery('.ques-fillter-lt').delay('slow').fadeIn();
	});
		// long time register
		jQuery('.ques-fillter-lt-bt-y').click(function(){
			jQuery('.ques-fillter-lt').hide();
			jQuery('.ques-fillter-lt-register').delay('slow').fadeIn();
		});
			// long time register yes
			jQuery('.ques-fillter-lt-register-bt-y').click(function(){
				jQuery('.ques-fillter-lt-register').hide();
				jQuery('.ques-fillter-lt-register-y').delay('slow').fadeIn();
				// window.location.href = 'private-office';
			});
			// long time register no
			jQuery('.ques-fillter-lt-register-bt-n').click(function(){
				jQuery('.ques-fillter-lt-register').hide();
				jQuery('.ques-fillter-lt-register-n').delay('slow').fadeIn();
				// window.location.href = 'share-office';
			});
		// long time not register
		jQuery('.ques-fillter-lt-bt-n').click(function(){
			jQuery('.ques-fillter-lt').hide();
			jQuery('.ques-fillter-lt-not-register').delay('slow').fadeIn();
		});
			// long time not register yes
			jQuery('.ques-fillter-lt-not-register-bt-y').click(function(){
				jQuery('.ques-fillter-lt-not-register').hide();
				jQuery('.ques-fillter-lt-register-n').delay('slow').fadeIn();
				// window.location.href = 'share-office';
			});
			// long time register no
			jQuery('.ques-fillter-lt-not-register-bt-n').click(function(){
				jQuery('.ques-fillter-lt-not-register').hide();
				jQuery('.ques-fillter-lt-not-register-n').delay('slow').fadeIn();
				// window.location.href = 'virtual-office';
			});

});