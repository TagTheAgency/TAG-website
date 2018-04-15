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

	// Content Page popups

	function openPopUp(target){
		$(target).click(function(){
			popupContent = target+"-popup";
			$('.popup-overlay').css('display','flex').fadeIn();
			$(popupContent).fadeIn();
			$.scrollify.disable();
		})
	}

	openPopUp('#how-creative');
	openPopUp('#how-video');

	$("#close-popup-btn, .close-overlay").click(function(){
		$(".popup-overlay").fadeOut();
		$(popupContent).fadeOut();
		$.scrollify.enable()
	});

	if($('.popup-overlay').is(':visible')){
		$.scrollify.disable()
	}

	$('[data-popup-open]').click(function(){
		$.scrollify.disable()
		var targeted_popup_class = $(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350).css('display','flex');
		preventDefault();
	});
	$('[data-popup-close]').click(function(){
		var targeted_popup_class = $(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
		$.scrollify.enable()
		preventDefault();
	});

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


	fixContrast();


});
