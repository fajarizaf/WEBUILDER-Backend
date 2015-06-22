$(document).ready(function() {


        
         // proses add pages Layout
        $('#addpage').click(function() {
             $('#parentloading').fadeIn('fast');
             $('.loadingUpdate').html('<img src="'+base_url+'/assets/pic/tools/sidebar/loadings.gif" width="25" />').delay(6000);
             
            var name_pages = $('.name_pages1').val();
            var title_pages = $('.title_pages').val();
            var desc_pages = $('.desc_pages').val();
            var templatesPages = $('#selectListTemplates').val();
            var dataString = 'name_pages='+name_pages+'&templatespageslay='+templatesPages;
            
                                var counter=1;
                                var countdown = setInterval(function(){
                                $("#countersec").html(counter);
                                if (counter == 0) {
                                clearInterval(countdown);

                                $('#parentloading').fadeOut('fast');
                                $('.loadingUpdate').html('').delay(6000);
            
                                     $.ajax({
                        			 type	: "POST",
                                     url: ""+base_url+"page/addPage",
                        			 data: dataString,
                                     dataType: "json",
                        			 success	: function(response){
                                        
                                        //load laman yang baru di create
                                        $.each(response,function(row,val) {            
                                            $('.toolbar-pages').click();    
                                            $('.body').load(''+base_url+'layout/pages/'+val.template_pages+'');
                                        });


                                            var counter=2;
                                            var countdown = setInterval(function(){
                                            $("#countersec").html(counter);
                                            if (counter == 0) {
                                            clearInterval(countdown);

                                                $.each(response,function(row,val) {
                                                    $('.scrat').html(val.content_pages);
                                                });

                                                // mengambil listmenu dari sidebar
                                                var liIds1 = $('#listpage li').map(function(i,n) {
                                                return $(n).attr('data-href');
                                                }).get();
                                                
                                                
                                                // menampilkan menu ke template
                                                $('.menu ul').html('');
                                                    $.each(liIds1,function(i,e) {  
                                                    $('.menu ul').append('<li initials="'+e+'"><a href="http://localhost/project/intersweb/layout/pages/home">'+e+'</a></li>'); 
                                                });

                                                // setting hover pada menu dan pages yang baru
                                                $.each(response,function(row,val) {    
                                                    $('.menu ul .activeMenu').removeClass('activeMenu');
                                                    $('.menu ul li[initials='+val.template_pages+']').addClass('activeMenu');  
                                                    $('#listpage li[data-href='+val.template_pages+']').click();                                   
                                                });
                                                
                                                $('#saveEditMode').submit();

                                            }
                                            counter--;
                                            }, 500);
                    			     }
                    		         });
                    		         return false;
                                }
                                counter--;
                                }, 500);   
                
	});
        
        
  



        
        $('#templatesLayout').click(function(){
            if ($('.name_pages1').val() == '') {
                $('.name_pages1').css({'border':'1px solid orange','color':'orange'});
                $('.name_pages1').attr('placeholder','input tidak boleh Kosong');
            }else {
            $('.step1addpages').fadeOut('fast');
            $('.step2addpages').fadeIn('fast');
            }
        });




        
        $('#selectListTemplates').change(function() {
            if ( $(this).val() == 'about2' ) {
               $('.imgpreviewTemplatespages').html('<img src="'+base_url+'assets/pic/tools/sidebar/about2.png" style="width:150px;margin-left:30px;" />'); 
            }else if ($(this).val() == 'about3' ) {
                 $('.imgpreviewTemplatespages').html('<img src="'+base_url+'assets/pic/tools/sidebar/about3.png" style="width:150px;margin-left:30px;" />'); 
            } else if ($(this).val() == 'about1' ) {
                 $('.imgpreviewTemplatespages').html('<img src="'+base_url+'assets/pic/tools/sidebar/about1.png" style="width:150px;margin-left:30px;" />'); 
            }
        });
        
        
          
       
        
      
       
});        


