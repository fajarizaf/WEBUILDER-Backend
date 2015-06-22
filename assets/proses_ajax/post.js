$(document).ready(function() {

	

	$('.editpost').click(function() {
            $('#parentloading').fadeIn('fast');
            
            var param = $(this).attr('data');
            var dataString = 'id=' + param;
            
		$.ajax({
			type	: "POST",
			url		: "post/editpost/",
                        data	: dataString,
			timeout	: 3000,
                        dataType: "json",				  
			success	: function(response){
                    
                           
                            $.each( response, function(key,val) {
                            $('.no').val(val.no);
                            $('.title').val(val.title);
                            $('.redactor_editor').html(val.content);
                            $('#image_post').val(val.image);
                            $('.category').html(val.category);
                            
                            
                            $('#table-content').css({'display':'none'});
                            $('#edit-content').css({'display':'block'});
                            $('#parentloading').fadeOut('slow');
                            
                            
                            
                            }); 
                            
			}
		});
		return false;
	});
        
        
        
        
        // proses update post
        
        $('#form-update').submit(function() {
            $('.loadingUpdate').html('<img src="http://localhost/project/masterwebstore/images/loading_wait.gif" width="30" />').delay(6000);
            
            var param = $(this).attr('data');
            var dataString = 'id=' + param;
            
		$.ajax({
			type	: "POST",
                        url: $(this).attr('action'),
			data: $(this).serialize(),				  
			success	: function(response){
                            
                        if(response) {    
                        $('.loadingUpdate').html('');
                        $('#sticky').sticky('<span style="color:#802222;font-weight:bold;">'+response+'</span>');
                        }else {
                        $('#sticky').sticky('<span style="color:#802222;font-weight:bold;">'+response+'</span>');    
                        }    
			}
		});
		return false;
	});
        
        
        
        
        
        
});
 

