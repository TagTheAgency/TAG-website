 $(document).ready(function() {
	 var apiKey = 'sBUztz0plJJ8ZQirBWrRdX9OadJrajeY';
	 var userID = 'TAGTheAgency'
	 var projectID;
	 var allProjects = 'http://www.behance.net/v2/users/'+ userID +'/projects?client_id='+ apiKey;

	 $.ajax({
		 dataType: "json",
		 url: allProjects,
		 contentType: "application/json",
		 dataType: "jsonp",
		 async:false,
		 success: function(data){
			 var behanceProjects = data.projects;
			 for(var i = 0; i < behanceProjects.length; i++){
				 var coverImage = behanceProjects[i].covers[404];
				 $('#behance-gallery').append(

					 "<div class='col-10 col-sm-6 col-lg-4 what-project behance-project px-4 py-2' data-id='"+behanceProjects[i].id+"' data-popup-open='project-popup'>"+
							 "<div class='primary what-project-wrapper row align-items-center justify-content-center text-center p-2 px-4' style='background-image: url("+coverImage+");'>"+
								 "<div class='project-overlay'></div>"+
								 "<h3 class='mb-0 font-1 project-title'>"+behanceProjects[i].name+"</h3>"+
							 "</div>"+
					 "</div>"
				 );
			 }

			 // Popup function.
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

			$('.behance-project').click(function(){
				$('#behance-project-popup').empty();
				var projectID = $(this).attr('data-id');
				var singleProjects = 'http://www.behance.net/v2/projects/'+projectID+'?api_key='+apiKey;

				$.ajax({
					 dataType: "json",
					 url: singleProjects,
					 contentType: "application/json",
					 dataType: "jsonp",
					 async:false,
					 success: function(data){


						var galleryImage = data.project.modules;
						var projectLink = data.project.url;

						$('#behance-project-popup').append(
							"<div class='col-9 text-center'>"+
								"<h3 class='uppercase ls-6 mb-4'>"+data.project.name+"</h3>"+
								"<a href='"+projectLink+"' target='_blank'><h4 class='mb-4'>View on Behance</h4></a>"+
							"</div'>"
						);

						 for(var i = 0; i < galleryImage.length; i++){

							var componentPath = data.project.modules[i];

							if( componentPath.components ){

								$('#behance-project-popup').append(
									"<div class='col-10 text-center'>"+
									   "<div class='img-container d-block'>"+
										   "<img src='"+componentPath.components[0].sizes.disp+"'>"+
									   "</div'>"+
									"</div>"
								);

							}
							else{
								for (var b = 0; b < galleryImage.length; b++) {
		   						     $('#behance-project-popup').append(
		   						         "<div class='col-10 text-center'>"+
		   						            "<div class='img-container d-block'>"+
		   						                "<img src='"+galleryImage[b].sizes.original+"'>"+
		   						            "</div'>"+
		   						         "</div>"
		   						     );
	   						 	}
							}
						 }

						 $('#behance-project-popup').append("<div class='spacer-100'></div>");
					 },
					 error: function(){
						 alert('NOPE');
					 }
				 });
			});

			 $('.behance-project').hover(function(){
				 $(this).find('.project-overlay, .project-title').fadeIn();
			 }, function(){
				 $(this).find('.project-overlay, .project-title').fadeOut();
			 });


		 },
		 error: function(){
			 alert('NOPE');
		 }
	 });
});
