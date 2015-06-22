  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/color-picker/spectrum.css">
  
  
    
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar-style.css"/>
                 <link href="<?php echo base_url(); ?>assets/js/slimscroll/prettify.css" type="text/css" rel="stylesheet" />
        
		<script type="text/javascript" >
			$(document).ready(function() {
                        var siteUrl = 'http://localhost/project/intersweb/';
                        
                         $('.step1addpages ').slimScroll({
                                height: '400px',
                                width: '250px',
                            });
                           
                          // setting Skala Background image Gambar 
                           
                          $('.sub-sidebar').on('change','.select2', function() {
                              
                              var scaling = $(this).val();
                             
                              if(scaling == 'crop') {
                                $('div[resizelayout=true]').css({'background-repeat':'no-repeat'});
                                $('div[resizelayout=true]').css({'background-position':'50% 50%'});
                                $('div[resizelayout=true]').css({'background-size':'cover'});
                              } else if(scaling == 'fit') {
                                $('div[resizelayout=true]').css({'background-size':'200px'});
                                $('div[resizelayout=true]').css({'background-repeat':'repeat'});
                                 
                              } else if(scaling == 'actual_size') {
                                $('div[resizelayout=true]').css({'background-repeat':'repeat'});
                                $('div[resizelayout=true]').css({'background-position':'50% 50%'});
                                $('div[resizelayout=true]').css({'background-size':'auto'});
                              }
                          }); 
                          
                          
                          $('.sub-sidebar').on('click','.addbglayout', function() {
                              $('.box-modalAddImages').append('asdadasd');
                               $.getJSON( ""+siteUrl+"setting/getImagesWhere/img000020", function( data ) {
                                    var items = [];
                                    var i = 1;
                                    $('.box-modalAddImages').html('');
                                           $.each( data, function( key, val ) {
                                              $('.box-modalAddImages').append('<div data-box="'+i+'" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;"><div class="imagesThumbsFileMedia"><img src="'+siteUrl+'upload/'+val.path+'" style="width:100%;" /></div></div>');
                                              $('li[data-link='+val.categoryImage+']').addClass('activecatGallery');
                                              $('.categoryimgmanageractive').val('img000020');
                                           i++;
                                           });
                                });
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
				min: 1,
				value: 10,

				start: function(event,ui) {
				    tooltip.fadeIn('fast');
				},

				//Slider Event
				slide: function(event, ui) { //When the slider is sliding
                                   
					var value  = slider.slider('value'),
						volume = $('.borderSize');
                                         
					tooltip.css('left', value).text(ui.value);  //Adjust the tooltip accordingly

					if(value <= 5) { 
						volume.css('background-position', '0 0');
					} 
					else if (value <= 25) {
						volume.css('background-position', '0 -25px');
					} 
					else if (value <= 75) {
						volume.css('background-position', '0 -50px');
					} 
					else {
						volume.css('background-position', '0 -75px');
					};
                                        
                                        
                                        
                                        var elementType = $('div[resizelayout=true]').attr('type');
                                        
                                            var borderColor =$('#bordercolor').val();
                                            var value  = slider.slider('value');
                                            $('div[resize=true]').css({'border-width': value});
                                            $('div[resize=true]').css({'border-style': 'solid'});
                                            $('div[resize=true]').css({'border-color': borderColor});
                                            $('.borderSize').val(value);
                                       


				},
                                change: function(event, ui) {
                                    
                                },

				stop: function(event,ui) {
				    tooltip.fadeOut('fast');
				},
			});

		});
                
                
                
                     //Setting Gradient Color
                      function refreshGradientLayout() {
                        var gradientBody = 'linear-gradient(top, ' + $("#TopColor1").val() + ', ' + $("#BottomColor1").val() + ')';

                        // we need to use vendor prefixes
                        $.each(['', '-o-', '-moz-', '-webkit-', '-ms-'], function() {
                          $("div[resizelayout=true]").css({ 'background-image': this + gradientBody });
                        });
                      }
                
	</script>
              
                
		
	<div class="head-sidebar">
		<div style="color:#666;margin-top:-4px;margin-left:7px;font-size:16px;float:left;">Setting Gambar</div>
		
		<div class="btn-drop"><div class="drop-sidebar"></div></div>
		</div>
		
		
		<div style="width:100%;" class="pages">
    <div class="step1addpages" >    
                   
                    
	<table style="width:100%;">               
        <tr>
					<td><label>Background Image</label></td>
				</tr>
                                                     
        <tr>
           <td>
            <div class="box-section" style="border:1px solid #ccc;">
              <div class="imagesThumbs">
                  <img  src="<?php echo base_url(); ?>assets/pic/tools/sidebar/sdf1.png" />
              </div>
                  <a data-toggle="modal" class="addbglayout" href="#imageManager"><div style="float:left;margin-top:13px;margin-left:20px;width:100px;text-align: center;"  class="btn-subsidebars">Change Image</div>
            </div>
          </td>
				</tr>
                                
        <tr>
					<td><label>Edit Image</label></td>
				</tr>
                                
        <tr>
          <td>
            <div class="btn-subsidebars editimages">Edit Images</div>
          </td>
        </tr>                           
	</table>
                    
                    
  <div class="loadingUpdate1" style="margin-top: 6px;height: 90px;margin-right: 10px;"></div>  
                    
                        
  </div>
                    
                    
                    
                       	
		</div>								


