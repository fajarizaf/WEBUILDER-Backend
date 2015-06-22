$(document).ready(function() {

	$('#saveEditMode').submit(function() {
      
         
             $('#nwgrip, #negrip, #swgrip, #segrip, #ngrip, #egrip, #sgrip, #wgrip').remove();
             $('.btnDeleteResize').remove();
             $('.btnmenuWidget').remove();
             $('.btnmenuWidgetLayout').remove();
             $('.head div').css({'border':'none'});
             $('.scrat div').css({'border':'none'});
             $('.foot div').css({'border':'none'});

             
             $('div[resize=true]').attr('resize','false');
             $('div[resizelayout=true]').attr('resizelayout','false');
             
          $('.loadingUpdate').html('<img src="'+base_url+'/assets/pic/tools/sidebar/loadings.gif" width="25" />').delay(6000);
           

           
           var content = $('.scrat').html();
           var content1 = '<section class="scrat" element="section" resizelayout="false">'+content+'</section>';
           var head = $('.head').html();
           var head1 = '<section class="head" element="section" initSection="1"  resizelayout="false">'+head+'</section>';
           var head2 = head1.split('class="activeMenu"').join('');
           var foot = $('.foot').html();
           var foot1 = '<section class="foot" element="section" resizelayout="false">'+foot+'</section>';



           var namePages = $('.visitedmenus').attr('data-href');
           $('.content_themes').val(content1);
           $('.content_head').val(head2);
           $('.content_foot').val(foot1);
           $('.name_pages').val(namePages);

              		$.ajax({
              			type	: "POST",
                    url: $(this).attr('action'),

              			data: $(this).serialize(),				  
              			success	: function(response){
                
                                var counter=3;
                                var countdown = setInterval(function(){
                                $("#countersec").html(counter);
                                if (counter == 0) {
                                clearInterval(countdown);
                                
                                      $('#sticky').sticky('<span style="color:#802222;font-weight:bold;">'+response+'</span>');
                                      $('.loadingUpdate').html('').delay(6000);
                                      loadContent(base_url+'layout/page/'+title_pages+'');
                                
                                }
                                counter--;
                                }, 500);  

              			}
                  });
            
          return false;
	});
  
     
        
});
 

