/*
** Upload File - JavaScript
** Author	:Anang Suryana
** E-mail	:nanxz2008@gmail.com
** url		:http://www.magzimp.com/about
** Powered	:jQuery
*/
$(function() {
    
    var siteUrl = 'http://localhost/project/intersweb2/';
    
    
    function ambilDataGallery(param) {
                
                var dataString = 'category=' + param ;
                
             
                
             
                            $.ajax({
                            type	: "POST",
                            url: ""+siteUrl+"setting/getImages2/",
                            data: dataString,
                            dataType: "json",
                            success	: function(data){
                                
                                var i = 1;
                        $('.box-modalAddImages').html('');
                               
                                 $.each( data, function( key, val ) {
                                    var idCategory = val.idCategory;
                                    var rows = val.rows;
                                    
                                  if( rows == 0 ) {
                                       
                                   $('.box-modalAddImages').html('<div style="width:400px;height:200px;margin:0px auto;margin-top:60px;"><img src="'+siteUrl+'assets/pic/tools/sidebar/sdf.png" width="141" style="margin-left:90px;" /><h3>Tidak Ada Gambar Di folder <span style="color:orange;font-size:20px;">"'+param+'"</span></h3><p>Tambah Gambar baru dengan mengklik tombol upload images</p></div>');
                                   $('#categoryImages').val(idCategory);
                                   } else {
                                       
                                     
                                        $('.box-modalAddImages').append('<div data-box="'+i+'" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;"><div class="imagesThumbsFileMedia"><img src="'+siteUrl+'upload/'+val.path+'" style="width:100%;" /></div></div>');    
                                   }
                                  i++;   
                                 }); 
                                    
                                 }
                            
                    });
                    return false;   
                }
    
    
	var UPLOAD ={
		init : function (){
			$('#btnAddImages').change(function(){
				$('#form-UploadImages').submit();
                                $('.loadingUpdate1').html('<img src="'+siteUrl+'assets/pic/tools/sidebar/loadings.gif" width="30" style="margin-top:5px;margin-left:21px;" />').delay(6000);
                                
                                
                                var counter=7;
                                var idCategory = $('.categoryimgmanageractive').val();
                                var countdown = setInterval(function(){
                                $("#countersec").html(counter);
                                if (counter == 0) {
                                clearInterval(countdown);
                                
                                 
                                        $('.loadingUpdate1').html('').delay(6000);
                                  alert(idCategory);
                                        ambilDataGallery(idCategory);
                                        
                                        
                                
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