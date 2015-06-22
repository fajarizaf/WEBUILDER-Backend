
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
                            $('.subsub-sidebar').on('click','.styleBtn1', function() { 
                                $('.body div[resize=true] div[type=btnStyle] ').attr('class','button default');
                            }); 
                            
                            // style button 2 di klick
                            $('.subsub-sidebar').on('click','.styleBtn2', function() { 
                                $('.body div[resize=true] div[type=btnStyle] ').attr('class','button style2');
                            }); 
                            
                           
                           // style button 3 di klick
                            $('.subsub-sidebar').on('click','.styleBtn3', function() { 
                                $('.body div[resize=true] div[type=btnStyle] ').attr('class','button style3');
                            });
                            
                            
                            // style button 4 di klick
                            $('.subsub-sidebar').on('click','.styleBtn4', function() { 
                                $('.body div[resize=true] div[type=btnStyle] ').attr('class','button style4');
                            });
                            
                            
                            // style button 5 di klick
                            $('.subsub-sidebar').on('click','.styleBtn5', function() { 
                                $('.body div[resize=true] div[type=btnStyle] ').attr('class','button style5');
                            });
                            
                            
                            // style button 6 di klick
                            $('.subsub-sidebar').on('click','.styleBtn6', function() { 
                                $('.body div[resize=true] div[type=btnStyle] ').attr('class','button style6');
                            });
                            
                            // style button 7 di klick
                            $('.subsub-sidebar').on('click','.styleBtn7', function() { 
                                $('.body div[resize=true] div[type=btnStyle] ').attr('class','button style7');
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
                                                        <div class="contSes">
                                                        <div class="contStyleButton" ><div class="styleBtn1"></div></div>
                                                        <div class="contStyleButton" ><div class="styleBtn2"></div></div>
                                                        <div class="contStyleButton" ><div class="styleBtn3"></div></div>
                                                        <div class="contStyleButton" ><div class="styleBtn4"></div></div>
                                                        <div class="contStyleButton" ><div class="styleBtn5"></div></div>
                                                        <div class="contStyleButton" ><div class="styleBtn6"></div></div>
                                                        <div class="contStyleButton" ><div class="styleBtn7"></div></div>
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


