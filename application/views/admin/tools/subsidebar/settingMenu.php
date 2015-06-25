  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/color-picker/spectrum.css">
  
                <script src="<?php echo base_url(); ?>assets/js/layout.js" type="text/javascript"></script>     
                <script src="<?php echo base_url(); ?>assets/js/plugin.js" type="text/javascript"></script>    
    
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar-style.css"/>
                 <link href="<?php echo base_url(); ?>assets/js/slimscroll/prettify.css" type="text/css" rel="stylesheet" />
        
		<script type="text/javascript" >
			$(document).ready(function() {
                        var siteUrl = 'http://localhost/project/intersweb/';
                        
                         $('.step1addpages ').slimScroll({
                                height: '400px',
                                width: '250px',
                            });
                            
                            
                         // setting font pada button 
                         
                          $('.sub-sidebar').on('change','.select2', function() {    
                                var font = $(this).val();
                               $('div[resize=true] .button p').attr('font',''+font+''); 
                            });
                            
                            
                        //Event button save edit Panel Button
                            
                            $('#saveSettingButton').click(function() {
                                 $('.loadingUpdate1').html('<img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/loadings.gif" width="30" style="margin-top:5px;margin-left:21px;" />').delay(6000);
                                
                                var hal_pages = $('.title_pages').html();
                                var init = $('div[resize=true]').attr('init');
                                
                                var linkTo = $('#LinkTo').val();
                                var fontColor = $('#textcolor1').val();
                                var background = $('#background').val();
                                var textColor = $('#textcolor1').val();
                                var borderColor = $('#bordercolor').val();
                                var borderSize = $('.borderSize').val();
                                var TopColor = $('#TopColor').val();
                                var BottomColor = $('#BottomColor').val();
                                var fontFamily = $('.select2 option:selected').val();
                                var fontSize = $('.volumes').val();
                                var TypeLink = $('#TypeLink').val();
                                
                                
                                var init =  $('div[resize=true]').attr('init'); 
                                var pages = $('.title_pages').html();
                                
                                //proses penambahan value pada button search
                                        if( TypeLink == 'pages' ) {
                                            $('div[resize=true] a').attr('href','<?php echo base_url(); ?>page/'+linkTo+'');
                                        } else {
                                            $('div[resize=true] a').attr('href','http://'+linkTo+'');
                                        }
                                        
                                        $('#saveEditMode').submit();

                                    var param = $(this).attr('data');
                                    var dataString = 'init=' + init +'&pages=' + pages +'&LinkTo=' + linkTo +'&fontColor='+fontColor+"&background="+background+"&textColor="+textColor+"&borderColor="+borderColor+"&borderSize="+borderSize+"&TopColor="+TopColor+"&BottomColor="+BottomColor+"&fontFamily="+fontFamily+"&fontSize="+fontSize+"&TypeLink="+TypeLink;

                                        $.ajax({
                                                type	: "POST",
                                                url	: "<?php echo base_url(); ?>panel/SavesettingButton/",
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
               
                
                 
                            // setting size font pada button 
                 
                            $('.volumes').keyup(function() {
                                var valuess = $(this).val();
                                $('.content div[resize=true] .button p').css({'font-size': valuess});
                            });          
                
                //set value text button ketika text di isi
                
                $('.btnText').keyup(function() {
                    var valText = $(this).val();
                    $('.content div[resize=true] .button p ').html(valText);
                });
                
               //set size border button ketika text di isi
               
                $('.borderSize').keyup(function() {
                    var value = $(this).val();
                    var borderColor =$('#bordercolor').val();
                    $('div[resize=true] .button').css({'border-width': value});
                    $('div[resize=true] .button').css({'border-style': 'solid'});
                    $('div[resize=true] .button').css({'border-color': borderColor});
                });
                
                

                $('.sub-sidebar').on('click','#LinkTo', function() {
                    $('.subsub-sidebar').fadeIn('fast');
                    loadSubsubsidebar('LinkTo');
                });
                
                
                 $('.sub-sidebar').on('click','#ChangeStyleMenu', function() {
                    $('.subsub-sidebar').fadeIn('fast');
                    loadSubsubsidebar('ChangeStyleMenu');
                 });
                 
                 
                 
                 
                 //Setting Gradient Color
                      function refreshGradient() {
                        var gradientBody = 'linear-gradient(top, ' + $("#TopColor").val() + ', ' + $("#BottomColor").val() + ')';

                        // we need to use vendor prefixes
                        $.each(['', '-o-', '-moz-', '-webkit-', '-ms-'], function() {
                          $("div[resize=true] ul").css({ 'background-image': this + gradientBody });
                        });
                      }
                      
                </script>
                
                
                
               
                
                
                <script>
		$(function() {
			//Setting Value font Size menu
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
                                   
					

                                            var value  = slider.slider('value');
                                            $('div[resize=true] ul li a').css({'font-size': value});
                                            $('.volumes').val(value);

				},
                                

				stop: function(event,ui) {
				    tooltip.fadeOut('fast');
				},
			});

		});
	</script>
        
        
        
        
        <script>
		$(function() {

			//Store frequently elements in variables
                                var slider  = $('#borderSize'),
				tooltip = $('.tooltip');

			//Hide the Tooltip at first
			tooltip.hide();

			//Call the Slider
			slider.slider({
				//Config
				range: "min",
				min: 0,
				value: 10,

				start: function(event,ui) {
				    tooltip.fadeIn('fast');
				},

				//Slider Event
				slide: function(event, ui) { //When the slider is sliding
                                        
                                            var value  = slider.slider('value');
                                            $('div[resize=true] ul').css({'border-width': value});
                                            $('div[resize=true] ul').css({'border-style': 'solid'});
                                            $('.borderSize').val(value);
                                       


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
		<div style="color:#666;margin-top:-4px;margin-left:7px;font-size:16px;float:left;">Setting Menu</div>
		
		<div class="btn-drop"><div class="drop-sidebar"></div></div>
		</div>
		
		
		<div style="width:100%;" class="pages">
                    <div class="step1addpages" >    
                   
                    
			<table style="width:100%;">
				
                                
                                <tr>
                                    <td>
                                        <div style="margin-top:10px;" id="ChangeStyleMenu" class="btn-subsidebars">Personalize This Menu</div>
                                    </td>
                                </tr>
                                
                                <tr>
					<td><label>Color Menu</label></td>
				</tr>
                                
                                <tr>
                                        <td>
                                        <div class="box-section" style="border:1px solid #ccc;">
                     
                                            <div style="margin-bottom: 5px;">
                                             <div style="margin-left:10px;margin-top:10px;width:80px;float:left;color:#666;">Background</div>    
                                             <input style="float: right;" type='text' id="background" />
                                             <div style="clear: both;"></div>
                                            </div>
                                            
                                
                                            <div style="margin-bottom: 5px;">
                                             <div style="margin-left:10px;margin-top:10px;width:80px;float:left;color:#666;">Text</div>    
                                             <input style="float: right;" type='text' id="textcolor" />
                                             
                                             <div style="clear: both;"></div>
                                            </div>
                                            
                                            <div style="margin-bottom: 5px;">
                                             <div style="margin-left:10px;margin-top:10px;width:80px;float:left;color:#666;">Text Selected</div>    
                                             <input style="float: right;" type='text' id="textSelected" />
                                             
                                             <div style="clear: both;"></div>
                                            </div>
                                     
                                            <div style="margin-bottom: 5px;">
                                             <div style="margin-left:10px;margin-top:10px;width:80px;float:left;color:#666;">Border</div>    
                                             <input style="float: right;" type='text' id="borderLeftcolor" />
                                             
                                             <div style="clear: both;"></div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        </td>
				</tr>
                                
                                <tr>
					<td><label>Border Menu</label></td>
				</tr>
                                
                                <tr>
                                    <td> 
                                        
                                        <div class="box-section" style="border:1px solid #ccc;padding-top:0px;height:38px;">
                                            <div style="margin-left:10px;margin-top:10px;width:80px;float:left;color:#666;">Color</div>    
                                            <div style="margin-bottom: 5px;">
                                            <input style="float: right;" type='text' id="bordercolor" />
                                            <div style="clear: both;"></div>
                                            </div>
                                            
                                           
                                      </div>
                                        
                                        <div class="box-section" style="border:1px solid #ccc;padding-top:10px;height:42px;">
                                           <div id="section"  >	
                                                <span class="tooltip"></span> <!-- Tooltip -->
                                                <div id="borderSize" style="margin-left:8px;margin-top:8px;float:left;"></div> <!-- the Slider -->
                                          
                                                <input type="text" class="borderSize" style="width:40px;float:right;margin-top: -2px;margin-right:10px;"  /><!-- Volume -->
                                            </div>
                                      </div>
                                        
                                    </td>
                                </tr>
                                
                                
                                <tr>
					<td><label>Color Gradient Button</label></td>
				</tr>
                                
                                <tr>
                                        <td>
                                        <div class="box-section" style="border:1px solid #ccc;">
                                            <div style="margin-left:10px;margin-top:10px;width:80px;float:left;color:#666;">Color Top</div>    
                                            <div style="margin-bottom: 5px;">
                                            <input style="float: right;" type='text' id="TopColor" />
                                            <div style="clear: both;"></div>
                                            </div>
                                            <div style="margin-bottom: 5px;">
                                             <div style="margin-left:10px;margin-top:10px;width:80px;float:left;color:#666;">Color Bottom</div>    
                                             <input style="float: right;" type='text' id="BottomColor" />
                                             <div style="clear: both;"></div>
                                             </div>
                                            
                                          
                                        </div>
                                        </td>
				</tr>
                                
                                
                                <tr>
                                    <td>
                                        <select class="select2" style="font-family:calibri;width:220px;margin-left:0px;background-position: 190px" class="pilih_font">
                                            <option selected="selected" style="font-family:calibri" value="font1">Pilih Type Font</option>
                                            <option data-name="Open Sans" style="font-family:calibri" value="font2">Open Sans</option>
                                            <option data-name="Armata" style="font-family:calibri" value="font3">Armata</option>
                                            <option data-name="Monsterat" style="font-family:calibri" value="font4">Monsterat</option>
                                            <option data-name="Roboto" style="font-family:calibri" value="font5">Roboto</option>
                                            <option data-name="Lato" style="font-family:calibri" value="font6">Lato</option>
                                        </select><br/>
                                 </td>
                                </tr>         
                                <tr>
                                    <td>        
                                        <div class="box-section" style="border:1px solid #ccc;padding-top:10px;height:42px;">
                                           <div id="section"  >	
                                                <span class="tooltip"></span> <!-- Tooltip -->
                                                <div id="slider" style="margin-left:8px;margin-top:8px;float:left;"></div> <!-- the Slider -->
                                          
                                                <input type="text" class="volumes" style="width:40px;float:right;margin-top: -2px;margin-right:10px;"  /><!-- Volume -->
                                            </div>
                                      </div>
                                    </td>
                                </tr>
                                
                                
                                
			</table>
                    
                        
                    </div>
                    
                    
                    
                       	
		</div>								


