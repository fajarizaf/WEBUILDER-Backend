
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/common.css"/>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar-style.css"/>
	
		<link href="<?php echo base_url(); ?>assets/js/slimscroll/prettify.css" type="text/css" rel="stylesheet" />
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/prettify.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.js"></script>                
        
            
                <script src="<?php echo base_url(); ?>assets/proses_ajax/menu.js" type="text/javascript"></script>
                
                
		<script type="text/javascript" >
			$(document).ready(function() {
				$('.handles').slimScroll({
                                height: '200px',
                                width: '305px'
                            });
                            
                             $('.subsub-sidebar').on('click','.pageBtnLink', function() {    
                                $('.typeOfLink').fadeOut('fast');
                                $('.stepPageLink').fadeIn('fast');
                                 $('#TypeLink').val('pages');
                            });
                            
                            
                            $('.subsub-sidebar').on('click','.LinkBtnLink', function() {    
                                $('.typeOfLink').fadeOut('fast');
                                $('.stepAddressLink').fadeIn('fast');
                                $('#TypeLink').val('address');
                            });
                            
                            
                             $('.subsub-sidebar').on('click','.back', function() { 
                                $('.typeOfLink').fadeIn('fast');
                                $('.stepPageLink').fadeOut('fast');
                                $('.stepAddressLink').fadeOut('fast'); 
                             });
                            
                            $(".handles").load("<?php echo base_url(); ?>panel/selectListMenu");
                            
                           
                            $('.subsub-sidebar').on('click','#listmenuadd li ', function() { 
                                var valMenu = $(this).attr('data-href');
                                var TypeLink = $('#TypeLink').val();
                                $('#LinkTo').val(valMenu);
                                
                                if( TypeLink == 'pages' ) {
                                            $('.content div[resize=true] a').attr('href','<?php echo base_url(); ?>layout/page/'+valMenu+'');
                                        } else {
                                            $('.content div[resize=true] a').attr('href','http://'+valMenu+'');
                                        }
                                
                                $('.subsub-sidebar').fadeOut('fast');
                            });
                            
                            $('.subsub-sidebar').on('click','#addLinkAdress', function() { 
                                var valMenu = $('.textAddressLink').val();
                                $('#LinkTo').val(valMenu);
                                $('.subsub-sidebar').fadeOut('fast');
                            });
                            
                            
                            
                            
                           
                            
			});
		</script>
                
                <style>
                    .stepAddressLink {
                        display: none;
                    }
                     .stepPageLink {
                        display: none;
                    }
                    
                    .LinkBtnLink {
                        cursor:pointer
                    }
                    
                    .pageBtnLink {
                        cursor:pointer
                    }
                    
                </style>
                
		
	<div class="head-sidebar">
		Link To
		
		<div class="btn-drop"><div class="dropsub-sidebar"></div></div>
		</div>
		
		
		<div style="width:100%;" class="pages">
                    
                    
                    <div class="typeOfLink">    
			<table style="width:100%;">
				<tr>
                                    <td><label class><p style="margin-top:7px;" class="font1">Type Of Link</p></label></td>
				</tr>
				<tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tr>
                                                <td>
                                                    <div class="box-section" style="border:1px solid #ccc;width:290px;padding-left: 10px;padding-top:7px;padding-bottom: 8px;">
                                                        <div class="LinkBtnLink"></div>
                                                        <div class="pageBtnLink"></div>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>  
                                    </td>
				</tr>
			</table>
                    </div>
                    
                    
                    <div class="stepPageLink">
                        
                        <table style="width:100%;">
				<tr>
                                    <td><label><a class="back" style="text-decoration:none;color:#29a4e6;margin-top:7px;" href="#">Back To Link Options</a></label></td>
				</tr>
				<tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tr>
                                                <td>
                                                    <div id="sectionMenu" class="box-section" style="margin-top:7px;border:1px solid #ccc;width:305px;padding-top:5px;">
                                                        <p class="font1" style="width:150px;margin-left:10px;">Select Page : </p>
                                                        <ul id="listmenuadd" class="handles list" style="font-family:calibri;width:280px;background-position: 250px 15px;" class="pilih_font">
                                                            
                                                            
                                                        </ul>
                                                    </div>

                                                </td>
                                            </tr>
                                        </table>  
                                    </td>
				</tr>
			</table>
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    <div class="stepAddressLink">
                        
                        <table style="width:100%;">
				<tr>
                                    <td><label><a class="back" style="text-decoration:none;color:#29a4e6;margin-top:7px;" href="#">Back To Link Options</a></label></td>
				</tr>
				<tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tr>
                                                <td>
                                                    <div class="box-section" style="margin-top:7px;border:1px solid #ccc;width:290px;padding-left: 10px;padding-top:5px;">
                                                        <p class="font1">Insert Web Address : </p>
                                                        <input type="text" class="textAddressLink" placeholder="E.g www.intersweb.com" style="margin-left: 8px;width:250px;" />
                                                    </div>
                                                    <div id="addLinkAdress" style="margin-bottom: 50px;" class="btn">Add</div>
                                                </td>
                                            </tr>
                                        </table>  
                                    </td>
				</tr>
			</table>
                        
                    </div>
                    
                    
                    
                    
                       	
		</div>								


