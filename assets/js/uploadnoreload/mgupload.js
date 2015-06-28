/*
** Upload File - JavaScript
** Author	:Anang Suryana
** E-mail	:nanxz2008@gmail.com
** url		:http://www.magzimp.com/about
** Powered	:jQuery
*/
$(function() {
    
    // event ketika category list image manager di click
                function ambilDataGallery(param) {
                $('.loadingloadimagefilemanager').css({'display':'block'});
                $('.box-modalAddImages').css({'opacity':'0.4'});
                var dataString = 'category=' + param ;
             
                            $.ajax({
                            type  : "POST",
                            url: ""+base_url+"panel/getImagesbyAlbum",
                            data: dataString,
                            success : function(data){
                        
                                $('.box-modalAddImages').html('');
                                  $('.loadingloadimagefilemanager').css({'display':'none'});
                                  $('.box-modalAddImages').css({'opacity':'1'});   
                                  if(data) {
                                        $('.box-modalAddImages').html(data);
                                   } else {
                                        $('.box-modalAddImages').append('<div style="width:400px;height:200px;margin:0px auto;margin-top:60px;"><img src="'+base_url+'assets/pic/tools/sidebar/sdf.png" width="141" style="margin-left:90px;" /><h3>Tidak Ada Gambar Di folder <span style="color:orange;font-size:20px;">"'+param+'"</span></h3><p>Tambah Gambar baru dengan mengklik tombol upload images</p></div>');    
                                   }                        
                                 }
                            
                    });
                    return false;   
                }


                var siteUrl = 'http://localhost/project/intersweb/';
    
                              	var UPLOAD ={
                              		init : function (){
                              			$('#btnAddImages').change(function(){
                              				$('#form-UploadImages').submit();
                                $('.loadingUpdate1').html('<img src="'+siteUrl+'assets/pic/tools/sidebar/loadings.gif" width="20" style="margin-top:10px;margin-left:25px;" />').delay(6000);
                                
                                
                                var counter=7;
                                var param = $('#categoryImages').val();
                                var idCategory = $('.categoryimgmanageractive').val();
                                var countdown = setInterval(function(){
                                $("#countersec").html(counter);
                                if (counter == 0) {
                                clearInterval(countdown);
                                
                                        $('.loadingUpdate1').html('').delay(6000);
                                        ambilDataGallery(param)
                                
                                }
                                counter--;
                                }, 500);
                                
                                
                                });
                        
                       
			$('#form-UploadImages').iframePostForm ({
         		post : function (){		
        		}
			});
		}
		
	};
	UPLOAD.init(); 
        
});