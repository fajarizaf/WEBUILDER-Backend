
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/common.css"/>
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/lists.css"/>
	   
     
		
	
        <link href="<?php echo base_url(); ?>assets/js/slimscroll/prettify.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/prettify.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.js"></script>                
                        
		<script type="text/javascript" >
			$(document).ready(function() {
                            
                            $('#listBackgroundsTemplates').slimScroll({
                                height: '200px',
                                width: '240px'
                            });

                            $('#listBackgroundsTemplates').on('click','.imagesThumbsBackground', function() {
                                var image = $(this).attr('values');
                                $('.body').css({'background':'url(<?php echo base_url() ?>upload/'+image+') repeat fixed'});
                            });


                       
			});
                        
                        
                        
                        
		</script>
		
         
                <script>
                    $(document).ready(function() {
                        
                        //Semantic Accordion
                                $('#accorcontainer').show();
                        	$('.accorcontainer').hide();
                        	$('.accortrigger').click(function(){
                        		if( $(this).next().is(':hidden') ) {
                        			$(this).toggleClass('active').next().slideDown();
                        		} else {
                        			$(this).removeClass('active').next().slideUp();
                        		}
                        		return false;
                        	});
     
                    });
                </script>
                
                <style>
                    #vbn {
                        -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
                    }
                </style>
                
                
                
                
	

	<div class="accortrigger" ><a  class="font2" style="color:#333;font-size: 12px;border-right:none;" href="#"><img style="float:left;margin-left:-20px;margin-right:20px;margin-top: 7px;border:none;" src="<?php echo base_url(); ?>assets/pic/tools/sidebar/menu.png" width="25" />Background</a></div>
             <div id="accorcontainer" >

	     <div class="accorblock">
            <div id="listBackgroundsTemplates">
                   
            </div> 			
	     </div>

              <div id="vbn" style="width:100%;height:50px;border-top:1px solid #ccc;background:#ececec;">       
                    <div style="width:190px;"  class="btn add-page">Add Background</div>       
              </div>
             </div> 
	
     