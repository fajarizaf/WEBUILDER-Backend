$(document).ready(function() {

 
    function resizeElement(inizial) {
            $(inizial).resizable({  
                        handles: {
                            'ne': '#negrip',
                            'se': '#segrip',
                            'sw': '#swgrip',
                            'nw': '#nwgrip',
                            'n': '#ngrip',
                            'e': '#egrip',
                            's': '#sgrip',
                            'w': '#wgrip'
                        }
                    });

    };
        
        

        
        
     function disabledResizeElement(inizial) {
        $(inizial).draggable({ disabled: true });
     } 
     
     function enabledResizeElement(inizial) {
         $(inizial).draggable('enable');
     }
 


// element pada content div di click
 
 $('.body').on('click','div[resize=false]', function() {
    $('.submenuWidget').remove();

    var init = $(this).attr('init');
    var contentEditable = $('div[init='+init+']').attr('resize');
    
    
     if(contentEditable != 'true') {  
     // disabled element resize yang tidak terpilih     ( untuk type element )
     $('div[resize=true]').attr('resize','false');
    
     $('div[resize=false]').css(
                    {'border':'none',
                     'cursor':'default',
                    });
     
                    
    disabledResizeElement('.body div[resize=false]');
    $('div[resize=false] .btnDeleteResize').remove();
    $('div[resize=false] .ui-resizable-handle').hide();
    $('div[resize=false] .btnmenuWidget').remove();
    $('div[resize=false] .btnmenuWidgetLayout').remove();
    $('div[resize=false]').removeAttr('contenteditable');
   




     // disabled element resizelayout yang tidak terpilih       ( untuk type layout )
     $('div[element=layout]').attr('resizelayout','false');
    
     $('div[resizelayout=false]').css(
                    {'border':'none',
                     'cursor':'default',
                    });
                    
                    
    disabledResizeElement('.body div[resizelayout=false]');
    $('div[resizelayout=false] .btnDeleteResizeLayout').css({'display':'none'});
    $('div[resizelayout=false] .ui-resizable-handle').css({'display':'none'});
    $('div[resizelayout=false] .btnmenuWidgetLayout').css({'display':'none'});
    $('div[resizelayout=false] .btnmenuWidget').css({'display':'none'});
    

                  





     // set element resize yang terpilih
     
     
     var inizial = 'div[init='+init+']';
     $('div[init='+init+']').attr('resize','true');

   
   
        if($('div[init='+init+'] .ui-resizable-handle').length){

            $('div[resize=true] .ui-resizable-handle').css({'display':'block'});
            $('div[init='+init+']').append('<img style="cursor:pointer" class="btnDeleteResize" param="'+init+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
            $('div[init='+init+']').append('<img style="cursor:pointer" class="btnmenuWidget" param="'+init+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
            
        } else {
            
        $('div[init='+init+']').append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');
        $('div[init='+init+']').append('<img style="cursor:pointer" class="btnDeleteResize" param="'+init+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
        $('div[init='+init+']').append('<img style="cursor:pointer" class="btnmenuWidget" param="'+init+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
        
        }
     
         
            $('div[init='+init+']').css(
                    {'border':'1px solid red',
                     'cursor':'move',
                   
                    });      
               $('div[init='+init+'] .ui-resizable-handle').css(
                    {
                    'border':'1px solid red'
                    });

               $('div[init='+init+'] #segrip').css(
                    {'right':'-5px',
                     'bottom':'-5px'
                    });
             resizeElement(inizial);
             enabledResizeElement('div[init='+init+']');
         }else {
            
         }   
    });
    

    //click menu resize elemen sub menu
    $('div').on('click','.btnmenuWidget', function() {
        if($('.submenuWidget').length) {   
        }else {
            var elementType = $('div[resize=true] ').attr('type');

            // show sub menu element button
            if(elementType == "button" ) {  
                var init = $(this).attr('param');
                $('div[init='+init+']').append('<span class="submenuWidget"><section  class="head">Button<img src="'+base_url+'assets/pic/tools/sidebar/closemenuwidget.png" id="closemenuwidget" style="width:14px;margin-right:15px;cursor:pointer;float:right;margin-top:2px;" /></section><ul><li id="LinkTo">Link To</li><li id="settingButton">Settings</li></ul><div class="bring-forward"></div><div class="send-backward"></div></span>');    
            
            // show submenu element menu    
            } else if(elementType == "menu" ) {  
                var init = $(this).attr('param');
                $('div[init='+init+']').append('<span class="submenuWidget"><section  class="head">Menu<img src="'+base_url+'assets/pic/tools/sidebar/closemenuwidget.png" id="closemenuwidget" style="width:14px;margin-right:15px;cursor:pointer;float:right;margin-top:2px;" /></section><ul><li id="LinkTo">Link To</li><li id="settingMenu">Settings Menu</li></ul><div class="bring-forward"></div><div class="send-backward"></div></span>');    
            

                // show submenu element im    
            } else if(elementType == "images" ) {  
                var init = $(this).attr('param');
                var url = $('div[init='+init+'] img').attr('src');
                $('div[init='+init+']').append('<span class="submenuWidget"><section  class="head">Gambar<img src="'+base_url+'assets/pic/tools/sidebar/closemenuwidget.png" id="closemenuwidget" style="width:14px;margin-right:15px;cursor:pointer;float:right;margin-top:2px;" /></section><ul><li href="#imageManager" data-toggle="modal" id="Ubahgambar">Ubah Gambar</li><li id="editgambar">Edit Gambar</li><li  id="settingGambar">Setting Gambar</li></ul><div class="bring-forward"></div><div class="send-backward"></div></span>');    
                $('#editgambar').attr("onclick","return launchEditor('"+init+"','"+url+"');");

            // show submenu element title and paragraph    
            } else  {
                var init = $(this).attr('param');
                $('div[init='+init+']').append('<span class="submenuWidget"><section  class="head">Text<img src="'+base_url+'assets/pic/tools/sidebar/closemenuwidget.png" id="closemenuwidget" style="width:14px;margin-right:15px;cursor:pointer;float:right;margin-top:2px;" /></section><ul><li id="LinkTo">Link To</li><li id="editTextMn">Edit Text</li><li id="settingText">Settings</li></ul><div class="bring-forward"></div><div class="send-backward"></div></span>');
            }
        }
   });
   
   
   //edit text menu click
   $('.body').on('click','#editTextMn', function() {
    $('.submenuWidget').remove();
       
    var restval = 'true';    
    var par = $('div[resize='+restval+']').attr('init');
    $('div[init='+par+']').attr('contenteditable','true');
   
    $('div[init='+par+']').css({'cursor':'text'});
    $('div[init='+par+']').draggable({ disabled: true });
    $('div[init='+par+']').popline();
   }); 
    
    
     // close submenu widget
     $('.body').on('click','#closemenuwidget', function() {
        $('.submenuWidget').remove();
     });
     
     
     // proses  delete element
     $('div').on('click','.btnDeleteResize', function() {
        var restval = $(this).attr('param');    
        var par = $('div[init='+restval+']').attr('init');
        $('div[init='+par+']').remove();
     });

     
     
     
 
}); 
  
  
  
  
