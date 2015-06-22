
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/common.css"/>
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar-style.css"/>
	
		
		<link href="<?php echo base_url(); ?>assets/js/slimscroll/prettify.css" type="text/css" rel="stylesheet" />
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/prettify.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.js"></script>                
        
            
                <script src="<?php echo base_url(); ?>assets/proses_ajax/menu.js" type="text/javascript"></script>
                
                
		<script type="text/javascript" >
			$(document).ready(function() {
				$('.contSes').slimScroll({
                                height: '200px',
                                width: '280px'
                            });
                            
                            // style button 1 di klick
                            $('.subsub-sidebar').on('click','.styleMenu1', function() { 
                                $('div[resize=true] ul').attr('class','default');
                            }); 
                            
                            // style button 2 di klick
                            $('.subsub-sidebar').on('click','.styleMenu2', function() { 
                                $('div[resize=true] ul').attr('class','stylemenu2');
                            
                            }); 
                            
                           
                           // style button 3 di klick
                            $('.subsub-sidebar').on('click','.styleMenu3', function() { 
                                $('div[resize=true] ul').attr('class','stylemenu3');
                            });
                            
                            
                            // style button 4 di klick
                            $('.subsub-sidebar').on('click','.styleMenu4', function() { 
                                $('div[resize=true] ul').attr('class','stylemenu4');
                            });
                            
                            
                            // style button 5 di klick
                            $('.subsub-sidebar').on('click','.styleMenu5', function() { 
                                $('div[resize=true] div[type=menu] ').attr('class','menu stylemenu5');
                            });
                            
                            
                            // style button 6 di klick
                            $('.subsub-sidebar').on('click','.styleMenu6', function() { 
                                $('div[resize=true] div[type=menu] ').attr('class','menu stylemenu6');
                            });
                            
                            // style button 7 di klick
                            $('.subsub-sidebar').on('click','.styleMenu7', function() { 
                                $('div[resize=true] div[type=menu] ').attr('class','menu stylemenu7');
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
                                    <td><label class><p style="margin-top:7px;" class="font1">Type Of Style Menu</p></label></td>
				</tr>
				<tr>
                                    <td>
                                        <table style="width:100%;">
                                            <tr>
                                                <td>
                                                    <div class="box-section" style="border:1px solid #ccc;width:290px;padding-left: 10px;padding-top:7px;padding-bottom: 8px;">
                                                        <div class="contSes">
                                                        <div class="contStyleButton" ><div class="styleMenu1"></div></div>
                                                        <div class="contStyleButton" ><div class="styleMenu2"></div></div>
                                                        <div class="contStyleButton" ><div class="styleMenu3"></div></div>
                                                        <div class="contStyleButton" ><div class="styleMenu4"></div></div>
                                                        
                                                        </div>   
                                                        </div>

                                                </td>
                                            </tr>
                                        </table>  
                                    </td>
				</tr>
			</table>
                    </div>
                    
                    
                    
                    
                 
                    
                    
                    
                       	
		</div>								


