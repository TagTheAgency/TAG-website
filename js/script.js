 $(document).ready(function() {

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
			$.scrollify.disable()
			$(".mobile-menu-wrapper").fadeIn();
			$("body").css('','');
	});

	$("#close-menu").click(function(){
			$(".mobile-menu-wrapper").fadeOut();
			$.scrollify.enable()
	});

	// Hover effect for links/nav
	$(".btn, li, p, .contact-region div").hover(function(){
		if( !$(this).hasClass("active-page") ){
			$(this).find('.hover-bar').css("width","100%");
		}
	}, function(){
		$(this).find('.hover-bar').css("width","0");
	});

	// Popup Overlay
	$('[data-popup-open]').click(function(){
		$.scrollify.disable();
		var targeted_popup_class = $(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350).css('display','flex');
		$("body").css('overflow','hidden');
	});
	$('[data-popup-close]').click(function(){
		$(".mobile-menu-wrapper").fadeOut();
		var targeted_popup_class = $(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
		$("body").css('overflow','auto');

		// Stop Youtube videos
		var video = $(this).find('iframe').attr("src");
		$(this).find('iframe').attr("src","");
		$(this).find('iframe').attr("src",video);

		$.scrollify.enable();
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

	$('.contact-region div').click(function(){
		$('.contact-region div').removeClass('active-region');
		$(this).addClass('active-region');
	});

	$('.form-container').submit(function(){
		$(this).fadeOut(200);
		setTimeout(function(){
			$('.contact-region, #contactform').hide();
			$('.contact-title h3').html('Message Sent <i class="fas fa-check"></i>');
			$('.region-help').text("We'll be in touch!");
			$('.contact-title').css('width','100%');
			$('.form-container').fadeIn(200);
		}, 400);
	});

	$('.nz').click(function(){
		$('#region').val('nz');
		$("#nz-img").attr('src','img/layout/n-hover.png');
		$("#aus-img").attr('src','img/layout/au.png');
		$(this).addClass('active-region').removeClass('inactive');
		$('.aus').removeClass('active-region').addClass('inactive');
	});

	$('.aus').click(function(){
		$('#region').val('aus');
		$("#nz-img").attr('src','img/layout/n.png');
		$("#aus-img").attr('src','img/layout/au-hover.png');
		$(this).addClass('active-region').removeClass('inactive');;
		$('.nz').removeClass('active-region').addClass('inactive');
	});

	$('.nz, .aus').click(function(){
		$('.nz, .aus').removeClass('region-select');
		$('.contact-form').removeClass('submitted');
		$("#form-name").focus();
	});

	$('.nz, .aus').hover(function(){
		if(!$(this).hasClass('active-region')){
			$(this).removeClass('inactive');
		}
	}, function(){
		if(!$(this).hasClass('active-region')){
			$(this).addClass('inactive');
		}
	});

	$('.product').hover(function(){
		$('.product').css('opacity','0.2');
		$(this).css('opacity','1');
	}, function(){
		$('.product').css('opacity','1');
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
	//
	$(".scroll-icon").click(function(){
		$("html, body").animate({
			scrollTop: $("#what").offset().top
		}, 500);
	});

	// Go Back Button
	$(".go-back").click(function(){
		history.back()
	});

	for (var i = 1; i < 50; i++) {
		$('.mosaic-wrapper').append("<div class='mosaic-image'><img src='img/content/who/who-"+i+".jpg' alt='mosaic image "+i+"'></div>");
	}

	// Resize who page mosaic images
	setInterval(function () {
		mosaicWidth = $('.mosaic-image').width();
		$('.mosaic-image').css('height',mosaicWidth);
	}, 0);

	$(function () {
	    var parent = $(".mosaic-wrapper");
	    var divs = parent.children();
	    while (divs.length) {
	        parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
	    }
	});

});
