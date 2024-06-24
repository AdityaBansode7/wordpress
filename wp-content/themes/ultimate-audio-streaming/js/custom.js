jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
	});
});

function ultimate_audio_streaming_menu_open() {
	jQuery(".menu-brand.primary-nav").addClass('show');
}
function ultimate_audio_streaming_menu_close() {
	jQuery(".menu-brand.primary-nav").removeClass('show');
}

var ultimate_audio_streaming_Keyboard_loop = function (elem) {
    var ultimate_audio_streaming_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');

    var ultimate_audio_streaming_firstTabbable = ultimate_audio_streaming_tabbable.first();
    var ultimate_audio_streaming_lastTabbable = ultimate_audio_streaming_tabbable.last();
    /*set focus on first input*/
    ultimate_audio_streaming_firstTabbable.focus();

    /*redirect last tab to first input*/
    ultimate_audio_streaming_lastTabbable.on('keydown', function (e) {
        if ((e.which === 9 && !e.shiftKey)) {
            e.preventDefault();
            ultimate_audio_streaming_firstTabbable.focus();
        }
    });

    /*redirect first shift+tab to last input*/
    ultimate_audio_streaming_firstTabbable.on('keydown', function (e) {
        if ((e.which === 9 && e.shiftKey)) {
            e.preventDefault();
            ultimate_audio_streaming_lastTabbable.focus();
        }
    });

    /* allow escape key to close insiders div */
    elem.on('keyup', function (e) {
        if (e.keyCode === 27) {
            elem.hide();
        }
        ;
    });
};

// scroll
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
	    if (jQuery(this).scrollTop() > 0) {
	        jQuery('#scrollbutton').fadeIn();
	    } else {
	        jQuery('#scrollbutton').fadeOut();
	    }
	});
	jQuery(window).on("scroll", function () {
	   document.getElementById("scrollbutton").style.display = "block";
	});
	jQuery('#scrollbutton').click(function () {
	    jQuery("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});
    jQuery('.ai-track-subtitle').prepend("<p class='playing-text'>Playing</p>");
    jQuery('.ai-track-title').prepend("<p class='featured-album-text'>Features Album</p>");
});

jQuery(function($){
	$('.mobiletoggle').click(function () {
        ultimate_audio_streaming_Keyboard_loop($('.menu-brand.primary-nav'));
    });
});

// preloader
jQuery(function($){
    setTimeout(function(){
        $(".frame").delay(1000).fadeOut("slow");
    });
});

jQuery('document').ready(function($){
    $('.main-search span a').click(function(){
        $(".searchform_page").slideDown(500);
        ultimate_audio_streaming_Keyboard_loop($('.searchform_page'));
    });

    $('.close a').click(function(){
        $(".searchform_page").slideUp(500);
    });
}); 
