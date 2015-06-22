
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/common.css"/>
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/lists.css"/>
	  
        <script src="<?php echo base_url(); ?>assets/js/dynamic_content.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/layout.js" type="text/javascript"></script>     
        <script src="<?php echo base_url(); ?>assets/js/plugin.js" type="text/javascript"></script> 
		<script src="<?php echo base_url(); ?>assets/js/shortable/jquery.sortable.js"></script>

		
			<script>
                            
                                // event ketika list menu pada sidebar di move
				jQuery(document).on('mouseover','.icon-handler', function() {
					$('.sortable').sortable();
					$('.handles').sortable({
						handle: 'span'
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
                
                
                
                
	

	<div class="accortrigger" ><a  class="font2" style="color:#333;font-size: 12px;border-right:none;" href="#"><img style="float:left;margin-left:-20px;margin-right:20px;margin-top: 7px;border:none;" src="<?php echo base_url(); ?>assets/pic/tools/sidebar/menu.png" width="25" />Pages</a></div>
             <div id="accorcontainer" >
	     <div class="accorblock">
                 <div  style="padding-bottom:0px;" class="sidebar-scroll">
                     <ul id="listpage" style="padding-top: 0px;" class="handles list">
                     <li data-href="home" ><span><div class="icon-handler"></div></span>home</li>
                         <?php foreach ($menu as $row ) { ?>
                             <li data-href="<?php echo $row->template_name; ?>" ><span><div class="icon-handler"></div></span><?php echo $row->name_pages; ?></li>
                         <?php } ?>
                     </ul>
	           </div>
					
	         <div id="vbn" style="width:100%;height:50px;border-top:1px solid #ccc;">		
                    <div  class="btn add-page">Add Page</div>		
		 </div>			
	     </div>
             </div> 
	
     