$("document").ready(function() {

        // function menggambil values css dari suatu element
     
        function getStyleRuleValue(style, selector, sheet) {
                            var sheets = typeof sheet !== 'undefined' ? [sheet] : document.styleSheets;
                            for (var i = 0, l = sheets.length; i < l; i++) {
                                var sheet = sheets[i];
                                if( !sheet.cssRules ) { continue; }
                                for (var j = 0, k = sheet.cssRules.length; j < k; j++) {
                                    var rule = sheet.cssRules[j];
                                    if (rule.selectorText && rule.selectorText.split(',').indexOf(selector) !== -1) {
                                        return rule.style[style];
                                    }
                                }
                            }
                            return null;
        }
        
        
        function colorToHex(color) {
                    if (color.substr(0, 1) === '#') {
                        return color;
                    }
                    var digits = /(.*?)rgb\((\d+), (\d+), (\d+)\)/.exec(color);

                    var red = parseInt(digits[2]);
                    var green = parseInt(digits[3]);
                    var blue = parseInt(digits[4]);

                    var rgb = blue | (green << 8) | (red << 16);
                    return digits[1] + '#' + rgb.toString(16);};
                
                
// menampilkan sub sidebar panel     
    
        function loadSubsidebar(param) {
                $(".sub-sidebar").load(""+base_url+"panel/"+param+"");
            }          
  
	
// Event Clik Subsidebar
        
	$('.add-page').click(function() {
		$('.sub-sidebar').fadeIn('fast');
                loadSubsidebar('addPage');
	});
        
        
// sub menu panel element text di click
    $('div').on('click','#settingText', function() {
            
               $.getScript(''+base_url+'assets/js/color-picker/spectrum.js');
               var elementType = $('div[resize=true] ').attr('type');
               
               
                $('.submenuWidget').remove();
		        $('.sub-sidebar').fadeIn('fast');
                loadSubsidebar('settingText');

                                              var counter=0;
                                              var countdown = setInterval(function(){
                                              $("#countersec").html(counter);
                                              if (counter == 0) {
                                              clearInterval(countdown);
                                              var slider  = $('#slider');

                                              // memsaukan value link kedalam text
                                                var href = $('.body div[resize=true] a').attr('href');
                                                var rootDir = base_url.split('/');
                                                var explode = href.split('/');
                                    
                                                
                                                if(explode[2] == rootDir[2]) {
                                                    $('#LinkTo').val(explode[7]);
                                                } else {
                                                    $('#LinkTo').val(href);
                                                }
                                           
                                                   // jika element berupa text 
                                                    if( elementType == 'text') {  
                                                                var colorText = $('div[resize=true]').css('color');
                                                                if(colorText) {
                                                                
                                                                    $("#custom").spectrum({
                                                                    color: colorText,
                                                                    showInput: true,
                                                                    className: "full-spectrum",
                                                                    showInitial: true,
                                                                    showPalette: true,
                                                                    showSelectionPalette: true,
                                                                    maxPaletteSize: 40,
                                                                    preferredFormat: "hex",
                                                                    move: function(color) {
                                                                       $('.body div[resize=true] ').css({'color': ''+color.toHexString()+''});

                                                                    }
                                                                    });
                                                                    $('#custom').val(colorText);
                                                                }else {
                                                                    $('#custom').val('#666');
                                                                }
                                                                
                                                                 var fontSize = $('div[resize=true]').css('font-size');
                                                                 if(colorText) {
                                                                 var delPx = fontSize.split("px").join(" ");
                                                                 $(".volume").val(delPx);
                                                                 slider.slider({
                                                                         //Config
                                                                         range: "min",
                                                                         value: delPx
                                                                    });
                                                                 }else {
                                                                 $(".volume").val('12');    
                                                                 }      
                                                    }

                                                    
                                                    // jika element berupa Paragraph
                                                    
                                                    if(elementType == 'title') {

                                                                var colorText = $('div[resize=true] h2').css('color');
                                                                if(colorText) {
                                                                
                                                                    $("#custom").spectrum({
                                                                    color: colorText,
                                                                    showInput: true,
                                                                    className: "full-spectrum",
                                                                    showInitial: true,
                                                                    showPalette: true,
                                                                    showSelectionPalette: true,
                                                                    maxPaletteSize: 40,
                                                                    preferredFormat: "hex",
                                                                    move: function(color) {
                                                                       $('div[resize=true] h2 ').css({'color': ''+color.toHexString()+''});

                                                                    }
                                                                    });
                                                                    $('#custom').val(colorText);
                                                                }else {
                                                                    $('#custom').val('#666');
                                                                }
                                                                
                                                                 var fontSize = $('div[resize=true] h2').css('font-size');
                                                                 if(colorText) {
                                                                 var delPx = fontSize.split("px").join(" ");
                                                                 $(".volume").val(delPx);
                                                                 slider.slider({
                                                                         //Config
                                                                         range: "min",
                                                                         value: delPx
                                                                    });
                                                                 }else {
                                                                 $(".volume").val('12');    
                                                                 }
                                                    }
                                                }
                                                counter--;
                                                }, 500);});
                
        
        
// sub menu panel element button di click
        $('div').on('click','#settingButton', function() {

             $.getScript(''+base_url+'assets/js/color-picker/spectrum.js');
             $.getScript(''+base_url+'assets/js/jscolor.js');
             $.getScript(''+base_url+'assets/js/slimscroll/prettify.js');
             $.getScript(''+base_url+'assets/js/slimscroll/jquery.slimscroll.js');
             
                        var init =  $('div[resize=true]').attr('init');
                        var pages = $('.title_pages').html();
                        var ElementId = pages+'-'+init;
                                    
                             
                        var counter=0;
                        var countdown = setInterval(function(){
                        if (counter === 0) {
                        clearInterval(countdown);

                               var color = getStyleRuleValue('background', '.button');
                               var colorText = $('div[resize=true] .button').css('color');
                               

                               var elm = document.querySelector('div[resize=true] .button');
                               var elm1 = document.querySelector('div[resize=true] .button p');
                               var borderColor = window.getComputedStyle(elm, null).getPropertyValue('border-color');
                               
                               var borderSize = window.getComputedStyle(elm, null).getPropertyValue('border-width');
                               var fontSize = window.getComputedStyle(elm1, null).getPropertyValue('font-size');


                               var colorTop = $('div[resize=true] .button').attr('colorTop');
                               var colorBottom = $('div[resize=true] .button').attr('colorBottom');


                                    // memsaukan value link kedalam text
                                    var href = $('.body div[resize=true] a').attr('href');
                                    var rootDir = base_url.split('/');
                                    var explode = href.split('/');
                                 
                                    
                                    
                                    if(explode[2] == rootDir[2]) {
                                        $('#LinkTo').val(explode[7]);
                                    } else {
                                        $('#LinkTo').val(href);
                                    }
                    
                    
                                            $("#background").spectrum({
                                                color: color,
                                                showInput: true,
                                                className: "full-spectrum",
                                                showInitial: true,
                                                showPalette: true,
                                                showSelectionPalette: true,
                                                maxPaletteSize: 40,
                                                preferredFormat: "hex",
                                                move: function(color) {
                                                    $('div[resize=true] div[type=btnStyle] ').css({'background': ''+color.toHexString()+''});
                                                }
                                            });
                                            
                                            
                                            
                                             $("#textcolor1").spectrum({
                                                color: colorText,
                                                showInput: true,
                                                className: "full-spectrum",
                                                showInitial: true,
                                                showPalette: true,
                                                showSelectionPalette: true,
                                                maxPaletteSize: 40,
                                                preferredFormat: "hex",
                                                move: function(color) {
                                                    $('div[resize=true] div[type=btnStyle] p ').css({'color': ''+color.toHexString()+''});
                                                }
                                            });
                                            
                                            
                                              $("#bordercolor").spectrum({
                                                    color: borderColor,
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                            $('div[resize=true] .button ').css({'border-color': ''+color.toHexString()+''});
                                                    }
                                                });
                                                
                                                $("#TopColor").spectrum({
                                                    color: colorTop,
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                       var slv = $('#TopColor').val(color.toHexString());
                                                       var slv = $('div[resize=true] .button').attr('colorTop',color.toHexString());
                                                        refreshGradient();
                                                    }
                                                });



                                                 $("#BottomColor").spectrum({
                                                    color: colorBottom,
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                        var slv = $('#BottomColor').val(color.toHexString());
                                                        var slv = $('div[resize=true] .button').attr('colorBottom',color.toHexString());
                                                        refreshGradient();
                                                    }
                                                 });
                                                
                                                
                                            
                                    $('.borderSize').val(borderSize);
                                    $('#background').val(BgHexColor);
                                    $('#textcolor1').val(textHexColor);
                                    $('#bordercolor').val(borderHexColor);
                                    $('.volumes').val(fontSize);
                                    

                                    
                                    var valueBtn = $('div[resize=true] .button p').html();
                                    $('.btnText').val(valueBtn);
                                    
                                    
                                            
                 }
                 counter--;
            }, 500);  

                $('.submenuWidget').remove();
		$('.sub-sidebar').fadeIn('fast');
                loadSubsidebar('settingButton');  

            });      
        
        
// sub menu panel element menu di click
        $('div').on('click','#settingMenu', function() {
             $.getScript(''+base_url+'assets/js/color-picker/spectrum.js');
             $.getScript(''+base_url+'assets/js/jscolor.js');
             $.getScript(''+base_url+'assets/js/slimscroll/prettify.js');
             $.getScript(''+base_url+'assets/js/slimscroll/jquery.slimscroll.js');
             
              $('.submenuWidget').remove();
		$('.sub-sidebar').fadeIn('fast');
                loadSubsidebar('settingMenu');
                
                
                var counter=1;
                        var countdown = setInterval(function(){
                        if (counter === 0) {
                        clearInterval(countdown);
                        var slider  = $('#slider');
                              
                               // membaca background menu
                               var elm = document.querySelector('.body div[resize=true] ul');
                               var background = window.getComputedStyle(elm , null).getPropertyValue('background-color'); 

                               
                               // membaca warna text menu
                               var elm1 = document.querySelector('.body div[resize=true] ul li a');
                               var colortext = window.getComputedStyle(elm1 , null).getPropertyValue('color');
                               
                               
                               // membaca warna text menu selected
                               var elm2 = document.querySelector('.body div[resize=true] ul .activeMenu a');
                               var colortextselected = window.getComputedStyle(elm2 , null).getPropertyValue('color');
                               
                               
                                // membaca border left li menu
                               var elm3 = document.querySelector('.body div[resize=true] ul li');
                               var borderleftcolor = window.getComputedStyle(elm3 , null).getPropertyValue('border-right-color'); 
                               
                               
                                // membaca border menu
                               var elm4 = document.querySelector('.body div[resize=true] ul');
                               var bordercolor = window.getComputedStyle(elm4 , null).getPropertyValue('border-color');
                               
                                // membaca border menu
                               var elm5 = document.querySelector('.body div[resize=true] ul li a');
                               var fontSize = window.getComputedStyle(elm5 , null).getPropertyValue('font-size');
                               
                               
                               // membaca gradasi pada background menu
                               var colorTop = $('.body div[resize=true] ul').attr('colorTop');
                               var colorBottom = $('.body div[resize=true] ul').attr('colorBottom');
                               
                               
                               
                                            $("#background").spectrum({
                                                color: background,
                                                showInput: true,
                                                className: "full-spectrum",
                                                showInitial: true,
                                                showPalette: true,
                                                showSelectionPalette: true,
                                                maxPaletteSize: 40,
                                                preferredFormat: "hex",
                                                move: function(color) {
                                                    $('.body div[resize=true] ul').css({'background': ''+color.toHexString()+''});
                                                }
                                            });
                                            
                                            
                                             $("#textcolor").spectrum({
                                                color: colortext,
                                                showInput: true,
                                                className: "full-spectrum",
                                                showInitial: true,
                                                showPalette: true,
                                                showSelectionPalette: true,
                                                maxPaletteSize: 40,
                                                preferredFormat: "hex",
                                                move: function(color) {
                                                    $('.body div[resize=true] ul li a').css({'color': ''+color.toHexString()+''});
                                                }
                                            });
                                            
                                            
                                            $("#textSelected").spectrum({
                                                color: colortextselected,
                                                showInput: true,
                                                className: "full-spectrum",
                                                showInitial: true,
                                                showPalette: true,
                                                showSelectionPalette: true,
                                                maxPaletteSize: 40,
                                                preferredFormat: "hex",
                                                move: function(color) {
                                                    $('.body div[resize=true] ul .activeMenu a').css({'color': ''+color.toHexString()+''});
                                                }
                                            });
                                            
                                            
                                            $("#borderLeftcolor").spectrum({
                                                color: borderleftcolor,
                                                showInput: true,
                                                className: "full-spectrum",
                                                showInitial: true,
                                                showPalette: true,
                                                showSelectionPalette: true,
                                                maxPaletteSize: 40,
                                                preferredFormat: "hex",
                                                move: function(color) {
                                                    $('.body div[resize=true] ul li').css({'border-color': ''+color.toHexString()+''});
                                                }
                                            });
                                            
                                            $("#bordercolor").spectrum({
                                                    color: bordercolor,
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                            $('.body div[resize=true] ul').css({'border-color': ''+color.toHexString()+''});
                                                    }
                                                });
                                                
                                                
                                            
                                            $("#TopColor").spectrum({
                                                    color: colorTop,
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                       var slv = $('#TopColor').val(color.toHexString());
                                                       var slv = $('.body div[resize=true] ul').attr('colorTop',color.toHexString());
                                                        refreshGradient();
                                                    }
                                                });



                                                 $("#BottomColor").spectrum({
                                                    color: colorBottom,
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                        var slv = $('#BottomColor').val(color.toHexString());
                                                        var slv = $('.body div[resize=true] ul').attr('colorBottom',color.toHexString());
                                                        refreshGradient();
                                                    }
                                                 });    
                               
                               
                                                    // setting slide font size menu
                                                    
                                                                $('.volumes').val(fontSize);
                                                                if(fontSize) {
                                                                 var delPx = fontSize.split("px").join(" ");
                                                                 $(".volumes").val(delPx);
                                                                 slider.slider({
                                                                         //Config
                                                                         range: "min",
                                                                         value: delPx
                                                                    });
                                                                 }else {
                                                                 $(".volumes").val('12');    
                                                                 }
                
                }
                 counter--;
            }, 500);   });
               
        
 // sub menu panel element layout di click
        $('div').on('click','#settingLayout', function() {
            
             $.getScript(''+base_url+'assets/js/color-picker/spectrum.js');
             $.getScript(''+base_url+'assets/js/jscolor.js');
             $.getScript(''+base_url+'assets/js/slimscroll/prettify.js');
             $.getScript(''+base_url+'assets/js/slimscroll/jquery.slimscroll.js');
             
                $('.submenuWidget').remove();
                $('.sub-sidebar').fadeIn('fast');
                loadSubsidebar('settingLayout');
                
                var color = $('div[resizelayout=true]').css('background-color');
                var bordercolor = $('div[resizelayout=true]').css('border-top-color');
                
                
                
                    if(color != 'transparent') {
                    var BgHexColor = colorToHex(color); 
                    }else {
                        BgHexColor = '#fff';
                    }
                    
                    if(bordercolor != 'rgb(255,0,0)') {
                    var BgHexborderColor = colorToHex(bordercolor); 
                    }else {
                        BgHexborderColor = '#fff';
                    }
                    
                   
                    
                    
                    
                    
                    
             
                                              var counter=0;
                                              var countdown = setInterval(function(){
                                              $("#countersec").html(counter);
                                              if (counter == 0) {
                                              clearInterval(countdown);
                                             
                                                $(".bgcolor").spectrum({
                                                    color: BgHexColor,
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                           $('div[resizelayout=true]').css({'background': ''+color.toHexString()+''});
                                                    }
                                                 });
                                                 
                                                 // membaca da setting color border layout
                                                 $("#bordercolor1").spectrum({
                                                    color: BgHexborderColor,
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                         $('div[resizelayout=true]').css({'border-color': ''+color.toHexString()+''});
                                                    }
                                                 });
                                                 
                                                 // membaca dan setting size border layout
                                                  var slider  = $('#borderSize');
                                                    var borderWidth = $('div[resizelayout=true]').css('border-top-width');
         
                                                    if(borderWidth) {
                                                      var delPx = borderWidth.split("px").join(" ");
                                                      $(".borderSize").val(delPx);
                                                      slider.slider({
                                                      //Config
                                                      range: "min",
                                                      value: delPx
                                                      });
                                                      }else {
                                                      $(".borderSize").val('12');    
                                                      }
                                                      
                                                      
                                                 $("#TopColor1").spectrum({
                                                    color: '#fff',
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                       var slv = $('#TopColor1').val(color.toHexString());
                                                       var slv = $('div[resizelayout=true]').attr('colorTop',color.toHexString());
                                                        refreshGradientLayout();
                                                    }
                                                });



                                                 $("#BottomColor1").spectrum({
                                                    color: '#fff',
                                                    showInput: true,
                                                    className: "full-spectrum",
                                                    showInitial: true,
                                                    showPalette: true,
                                                    showSelectionPalette: true,
                                                    maxPaletteSize: 40,
                                                    preferredFormat: "hex",
                                                    move: function(color) {
                                                        var slv = $('#BottomColor1').val(color.toHexString());
                                                        var slv = $('div[resizelayout=true]').attr('colorBottom',color.toHexString());
                                                        refreshGradientLayout();
                                                    }
                                                 }); 
                                                 
                                                 
                                                 var backgroundImageLayout = $('div[resizelayout=true]').css('background-image');
                                                 var a = backgroundImageLayout.replace('url', '');
                                                 var b = a.replace('(', '');
                                                 var c = b.replace(')', '');
                                                 var d = c.replace('"', '');
                                                 var e = d.replace('"', '');
                                                
                                                 if(backgroundImageLayout != 'none' ) {
                                                     $('.imagesThumbs img').attr('src',e);
                                                 }
                                                 
                                                 
                                              }
                                                counter--;
                                                }, 500);   });


 // sub menu panel element setting Gambar di click
        $('div').on('click','#settingGambar', function() {
            
             $.getScript(''+base_url+'assets/js/color-picker/spectrum.js');
             $.getScript(''+base_url+'assets/js/jscolor.js');
             $.getScript(''+base_url+'assets/js/slimscroll/prettify.js');
             $.getScript(''+base_url+'assets/js/slimscroll/jquery.slimscroll.js');
             
                $('.submenuWidget').remove();
                $('.sub-sidebar').fadeIn('fast');
                loadSubsidebar('settingGambar');

                                            // get image

                                              var counter=0;
                                              var countdown = setInterval(function(){
                                              $("#countersec").html(counter);
                                              if (counter == 0) {
                                              clearInterval(countdown);

                                                var getImages = $('div[resize=true] img').attr('src');
                                                var init = $('div[resize=true]').attr('init');

                                                $('.imagesThumbs img').attr('src', getImages);


                                                $('.editimages').attr("onclick","return launchEditor('"+init+"','"+getImages+"');");

                                              }
                                                counter--;
                                              }, 500);    

        });


// sub menu panel element edit Gambar di click
        $('div').on('click','#editgambar', function() {
            $('.submenuWidget').remove();
        });


// sub menu panel element button di click Link To
        $('div').on('click','#LinkTo', function() {
            $('.submenuWidget').remove();                                           
            $('.subsub-sidebar').fadeIn('fast');
            loadSubsubsidebar('LinkTo');
        });
       
     
        
        
        
    // even delete subsidebar        
	
        $('.sub-sidebar').on('click','.drop-sidebar', function() {
		$('.sub-sidebar').fadeOut('fast');
	});
        
        $('.subsub-sidebar').on('click','.dropsub-sidebar', function() {
		$('.subsub-sidebar').fadeOut('fast');
	});
        
       
     
	
});
