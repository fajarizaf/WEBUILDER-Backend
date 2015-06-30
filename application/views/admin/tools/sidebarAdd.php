    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/common.css"/>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/lists.css"/>  
    <script src="<?php echo base_url(); ?>assets/js/plugin.js" type="text/javascript"></script> 
		             
              	<script type="text/javascript" >
              			$(document).ready(function() {
                            $('.sidebar-scroll2').slimScroll({
                                height: '400px',
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
                
                <div class="accortrigger" ><a  class="font2" style="color:#333;font-size: 12px;border-right:none;" href="#"><img style="float:left;margin-left:-20px;margin-right:20px;margin-top: 7px;border:none;" src="<?php echo base_url(); ?>assets/pic/tools/sidebar/add.png" width="25" />Add</a></div>
                    <div id="accorcontainer" >
    		              <div class="accorblock">
                          <div style="background: #fff;padding-left: 0px;" class="sidebar-scroll2">
                              <ul class="addList" style="margin-top: -15px;margin-left:0px;">
                                  <li class="font3" style="font-size: 14px;"><img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/text.png" style="width:33px;height:35px;float:left;" /><div id="titlePanel" style="float: left;margin-left: 9px;margin-top:5px;color:#333">Title</div> </li>
                                  <li class="font3" style="font-size: 14px;"><img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/paragraphPanel.jpg" style="width:33px;height:35px;float:left;" /><div id="paragraphPanel" style="float: left;margin-left: 9px;margin-top:5px;color:#333">Paragraph</div> </li>
                                  <li class="font3" style="font-size: 14px;"><img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/image.png" style="width:33px;height:35px;float:left;" /><a href="#imageManager" data-toggle="modal" ><div id="imagecPanel"  style="float: left;margin-left: 9px;margin-top:5px;color:#333">Image </div></a></li>
                                  <li class="font3" style="font-size: 14px;display:none"><img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/gallery.png" style="width:33px;height:35px;float:left;" /><div id="mediaPanel" style="float: left;margin-left: 9px;margin-top:5px;color:#333"> Media</div> </li>
                                  <li class="font3" style="font-size: 14px;"><img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/button.png" style="width:33px;height:35px;float:left;" /><div id="btnPanels"  style="float: left;margin-left: 9px;margin-top:5px;color:#333">Button</div></li>
                                  <li class="font3" style="font-size: 14px;"><img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/button.png" style="width:33px;height:35px;float:left;" /><div id="btnleftBox" style="float: left;margin-left: 9px;margin-top:5px;color:#333">Area</div></li>
                                  <li class="font3" style="font-size: 14px;display:none"><img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/blog.png" style="width:33px;height:35px;float:left;" /><div id="blogPanel" style="float: left;margin-left: 9px;margin-top:5px;color:#333"> Blogs</div> </li>
                              </ul>
    		                  </div>
    		              </div>
                    </div>    
             
                
                
             