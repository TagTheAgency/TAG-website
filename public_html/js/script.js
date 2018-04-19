$(function() {

	// Global Variables
	var popupContent;

	$.scrollify({
		section:".homepage-block, .content-block",
		scrollbars:false,
		scrollSpeed: 800,
		before: function(i,panels) {
			var ref = panels[i].attr("data-section-name");

			$(".pagination a.active").removeClass("active");

			$(".pagination a[href=\\#" + ref + "]").addClass("active");

			fixContrast();
		},
		after: fixContrast
	});

	$(".pagination a").on("click",function() {
		$.scrollify.move($(this).attr("href"));
	});

	function fixContrast() {
		var current = $.scrollify.current();

	    if(current.hasClass("dark")) {
	    		$('.pagination a, .social-icons, .mobile-navigation .fas').addClass("dark-contrast").removeClass("light-contrast");
				$("#tag-logo, #tag-logo-mobile").attr("src","img/content/logo-white.png");
	    } else if (current.hasClass("light")){
	    		$('.pagination a, .social-icons, .mobile-navigation .fas').addClass("light-contrast").removeClass("dark-contrast");
				$("#tag-logo, #tag-logo-mobile").attr("src","img/content/logo-black.png");
	    } else {
	    		$('.pagination a, .social-icons, .mobile-navigation .fas').removeClass("dark-contrast light-contrast");
				$("#tag-logo, #tag-logo-mobile").attr("src","img/content/logo-white.png");
	    }

	}

	$("#mobile-menu-icon").click(function(){
			$(".mobile-menu-wrapper").fadeIn();
			$("body").css('','')
	});

	$("#close-menu").click(function(){
			$(".mobile-menu-wrapper").fadeOut();
	});

	// Hover effect for links/nav
	$(".btn, li").hover(function(){
		if( !$(this).hasClass("active-page") ){
			$(this).find('.hover-bar').css("width","100%");
		}
		$(this).find("img").attr("src","img/layout/eyes-open.png");
	}, function(){
		$(this).find('.hover-bar').css("width","0");
		$(this).find("img").attr("src","img/layout/eyes-closed.png");
	});

	// Popup Overlay
	$('[data-popup-open]').click(function(){
		$.scrollify.disable()
		var targeted_popup_class = $(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350).css('display','flex');
		$("body").css('overflow','hidden');
	});
	$('[data-popup-close]').click(function(){
		var targeted_popup_class = $(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
		$("body").css('overflow','auto');

		// Stop Youtube videos
		var video = $(this).find('iframe').attr("src");
		$(this).find('iframe').attr("src","");
		$(this).find('iframe').attr("src",video);

		$.scrollify.enable()
	});

	// Homepage section link hover
	$(".link-hover").hover(function(){
		$(this).find('.fa-chevron-right').removeClass('link-hover-arrow');
	},function(){
		$(this).find('.fa-chevron-right').addClass('link-hover-arrow');
	});

	// Submit Button Hover Effect
	$('.submit-btn').hover(function(){
		$('.submit-btn span').css('width','100%');
	}, function(){
		$('.submit-btn span').css('width','0%');
	});

	// Nav effect on scroll
	$(window).scroll(function(){
		if ($(this).scrollTop() > 50) {
			$('.nav-container').css('padding','1em 4em');
			$('.nav-container .logo-wrapper').css('width','85px');
		} else{
			$('.nav-container').css('padding','2em 4em');
			$('.nav-container .logo-wrapper').css('width','100px');
		}
	});

	// Scroll to top
	$("#top-btn").click(function(){
		$("html").animate({scrollTop: 0}, 900);
	});

	fixContrast();

});
