
            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/common.css"/>
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/lists.css"/>
	   
       
       <script src="<?php echo base_url(); ?>assets/js/plugin.js" type="text/javascript"></script> 
		<script src="<?php echo base_url(); ?>assets/js/shortable/jquery.sortable.js"></script>
		
			<script>
				$(function() {
					$('.sortable').sortable();
					$('.handles').sortable({
						handle: 'span'
					});
				});
			</script>
		
	
        <link href="<?php echo base_url(); ?>assets/js/slimscroll/prettify.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/prettify.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.js"></script>                
                        
		<script type="text/javascript" >
			$(document).ready(function() {
                            
                            $('.sidebar-scroll').slimScroll({
                                height: '200px',
                                width: '240px'
                            });
                            
                           
                                $(".handles").load("<?php echo base_url(); ?>panel/listDragMenu");
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
                
                
                
                
	

	
                
                
                
            <div class="accortrigger" ><a  class="font2" style="color:#333;font-size: 12px;border-right:none;" href="#"><img style="float:left;margin-left:-20px;margin-right:20px;margin-top: 7px;border:none;" src="<?php echo base_url(); ?>assets/pic/tools/sidebar/setting.png" width="25" />Setting</a></div>
               <div id="accorcontainer">
		     <div class="accorblock">
                        <ul>                   
			<li><a class="font1" style="color:#333;" href="editprofile.html">&nbsp-&nbspView Profile</a></li>
                        <li><a class="font1" style="color:#333;" href="editprofile.html">&nbsp-&nbspEdit Profile</a></li>   
                        </ul>
		     </div>
               </div>
             

