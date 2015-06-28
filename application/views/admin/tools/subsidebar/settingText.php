  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/color-picker/spectrum.css">
  
    
        <script src="<?php echo base_url(); ?>assets/js/layout.js" type="text/javascript"></script>     
        <script src="<?php echo base_url(); ?>assets/js/plugin.js" type="text/javascript"></script> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar-style.css"/>
	   
        
		<script type="text/javascript" >
			$(document).ready(function() {
                  
                            
                            $('.sub-sidebar').on('change','.select1', function() {    
                                var font = $(this).val();
                               $('.body div[resize=true] h2').attr('font',''+font+'');
                               $('.body div[resize=true]').attr('font',''+font+''); 
                            });

                            // sidebar ganti link text
                            $('.sub-sidebar').on('click','#LinkTo', function() {
                                $('.subsub-sidebar').fadeIn('fast');
                                loadSubsubsidebar('LinkTo');
                            });
                            
                            
                            //Event button save edit Panel Text
                            
                            $('#saveSettingText').click(function() {
                                 $('.loadingUpdate1').html('<img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/loadings.gif" width="30" style="margin-top:5px;margin-left:21px;" />').delay(6000);
                                
                                var hal_pages = $('.title_pages').html();
                                var init = $('.content div[resize=true]').attr('init');
                                
                                var fontFamily = $('.select1 option:selected').text();
                                var fontColor = $('#custom').val();
                                var fontSize = $('.volume').val();
                                var init =  $('.content div[resize=true]').attr('init'); 
                                var pages = $('.title_pages').html();
                       

                                    var param = $(this).attr('data');
                                    var dataString = 'fontfamily=' + fontFamily +'&fontColor='+fontColor+"&fontSize="+fontSize+"&elementId="+init+"&pages="+pages;

                                        $.ajax({
                                                type	: "POST",
                                                url	: "<?php echo base_url(); ?>panel/SavesettingText/",
                                                data	: dataString,
                                                timeout	: 3000,				  
                                                success	: function(response){
                                                    
                                                    
                                                    var counter=3;
                                                    var countdown = setInterval(function(){
                                                    $("#countersec").html(counter);
                                                    if (counter == 0) {
                                                    clearInterval(countdown);
                                                    $('.loadingUpdate1').html('').delay(6000);
                                                    }
                                                    counter--;
                                                    }, 500);
                                                    
                                                    $.each( response, function(key,val) {
                                                     
                                                    }); 
                                                }
                                        });
                                        return false;
                                           
                            });
                            
                            
			});
		</script>
                
                
                <script>
                $("#custom").spectrum({
                    color: "#6A6A6A",
                    showInput: true,
                    className: "full-spectrum",
                    showInitial: true,
                    showPalette: true,
                    showSelectionPalette: true,
                    maxPaletteSize: 40,
                    preferredFormat: "hex",
                    move: function(color) {
                        var elementType = $('.body div[resize=true] ').attr('type');
                        if(elementType == 'text') {
                            $('.body div[resize=true] ').css({'color': ''+color.toHexString()+''});
                        } else {
                            $('.body div[resize=true] h2 ').css({'color': ''+color.toHexString()+''}); 
                            }
                      
                    }
                });
                </script>
                
                
                
                
                
                <script>
		$(function() {

			//Setting Value Font Size Text
                                var slider  = $('#slider'),
				tooltip = $('.tooltip');

			//Hide the Tooltip at first
			tooltip.hide();

			//Call the Slider
			slider.slider({
				//Config
				range: "min",
				min: 1,
				value: 32,

				start: function(event,ui) {
				    tooltip.fadeIn('fast');
				},

				//Slider Event
				slide: function(event, ui) { //When the slider is sliding
                                   
                                        
                                        var elementType = $('.body div[resize=true] ').attr('type');
                                        
                                        if(elementType == 'text') {
                                            var value  = slider.slider('value');
                                            $('.body div[resize=true]').css({'font-size': value});
                                            $('.volume').val(value);
                                        } else {
                                            var value  = slider.slider('value');
                                            $('.body div[resize=true] h2').css({'font-size': value});
                                            $('.volume').val(value);
                                        }


				},
                                change: function(event, ui) {
                                    
                                },

				stop: function(event,ui) {
				    tooltip.fadeOut('fast');
				},
			});

		});
	</script>
                
                
                
		
	<div class="head-sidebar">
		<div style="color:#666;margin-top:-4px;margin-left:7px;font-size:16px;float:left;">Setting Text</div>
		
		<div class="btn-drop"><div class="drop-sidebar"></div></div>
		</div>
		
		
		<div style="width:100%;" class="pages">
                    <div class="step1addpages">    
                   
                    
			<table style="width:100%;">
				<tr>
					<td><label style="color:#666">Font Family</label></td>
				</tr>   
                <tr>
                                    <td><select class="select1" style="font-family:calibri" class="pilih_font">
                                            <option selected="selected" style="font-family:calibri" value="font1">Pilih Type Font</option>
                                            <option data-name="Open Sans" style="font-family:calibri" value="font2">Open Sans</option>
                                            <option data-name="Armata" style="font-family:calibri" value="font3">Armata</option>
                                            <option data-name="Monsterat" style="font-family:calibri" value="font4">Monsterat</option>
                                            <option data-name="Roboto" style="font-family:calibri" value="font5">Roboto</option>
                                            <option data-name="Lato" style="font-family:calibri" value="font6">Lato</option>
                                        </select>
                                    </td>
				</tr>

                <tr>
                    <td>
                    <div class="box-section" style="border:1px solid #ccc;">
                        <div style="margin-left:10px;width:80px;float:left;color:#666">Link To</div>    
                        <input type="text" id="LinkTo" class="select2" style="font-family:calibri;" class="pilih_font" />     
                    </div>
                    </td>
                </tr>
                                
				<tr>
                                        <td>
                                        <div class="box-section" style="border:1px solid #ccc;">
                                            <div style="margin-left:10px;margin-top:10px;width:80px;float:left;color:#666">Font Color</div>    
                                        <input style="float: right;" type='text' id="custom" />
                                        </div>
                                        </td>
				</tr>          
                                        
                                 <tr>
                                        <td>           
                                       <div style="margin-top:-14px;width:80px;float:left;margin-bottom:6px;color:#666">Font Size</div><br/>      
                                       <div class="box-section" style="border:1px solid #ccc;padding-top:10px;height:42px;">
                                           <div id="section"  >	
                                                <span class="tooltip"></span> <!-- Tooltip -->
                                                <div id="slider" style="margin-left:8px;margin-top:8px;float:left;"></div> <!-- the Slider -->
                                          
                                                <input type="text" class="volume" style="width:40px;float:right;margin-top: -2px;margin-right:10px;"  /><!-- Volume -->
                                            </div>
                                      </div>
                                        
                                      
                                            
                                        </td>
				</tr>
			</table>
                    
                    
                    
                    
                        
                    </div>
                    
                    
                    
                       	
		</div>								


