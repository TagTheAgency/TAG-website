 $(document).ready(function() {
     var apiKey = 'ZoXww14IceqypBz8TYwEwwB3K2ifzKjj';
     var userID = 'TAGTheAgency'
     var behanceUserAPI = 'http://www.behance.net/v2/users/'+ userID +'/projects?client_id='+ apiKey;

     $.ajax({
         dataType: "json",
         url: behanceUserAPI,
         contentType: "application/json",
         dataType: "jsonp",
         async:false,
         success: function(data){
             var behanceProjects = data.projects;
             console.log(behanceProjects);
             for(var i = 0; i < behanceProjects.length; i++){
                 var coverImage = behanceProjects[i].covers.original;
                 $('#behance-gallery').append(

                     "<div class='col-10 col-sm-6 col-lg-4 what-project behance-project px-4 py-2'>"+
                         "<a href=''>"+
                             "<div class='primary what-project-wrapper row align-items-center justify-content-center text-center p-2 px-4' style='background-image: url("+coverImage+");'>"+
                                 "<div class='project-overlay'></div>"+
                                 "<h3 class='mb-0 font-1 project-title'>"+behanceProjects[i].name+"</h3>"+
                             "</div>"+
                         "</a>"+
                     "</div>"
                 );
             }

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
