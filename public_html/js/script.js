$(function() {
	$.scrollify({
		section:".homepage-block",
		scrollbars:false,
		scrollSpeed: 500,
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
	    		$('.pagination a, .social-icons').addClass("dark-contrast").removeClass("light-contrast");
	    } else if (current.hasClass("light")){
	    		$('.pagination a, .social-icons').addClass("light-contrast").removeClass("dark-contrast");
	    } else {
	    		$('.pagination a, .social-icons').removeClass("dark-contrast light-contrast");
	    }

	}
	
	fixContrast();
});