$(document).ready(function() {

    function resizeElement(inizial,type) {
            
            
            // apabila element layout bertipe leftBox
            if(type == 'stripBox') {
            $( "div[type=stripBox]" ).draggable({
                axis: "y"
                });
                $(inizial).resizable({  
                        handles: {
                            'n': '#ngrip',
                            's': '#sgrip',
                        }
                    });
                
                
                
            // apabila element layout bertipe centerBox
            } else if(type == 'centerBox') {
            $( "div[type=centerBox]" ).draggable({
                axis: "y"
                });
                $(inizial).resizable({  
                        handles: {
                            'n': '#ngrip',
                            's': '#sgrip',
                        }
                    });
                
                
                
            // apabila element layout bertipe leftBox
            } else if (type == 'leftBox') {
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
            
            
            
            }
            $(inizial).draggable();    
        }; 
        
     function disabledResizeElement(inizial) {
        $(inizial).draggable({ disabled: true });
     } 
     
     function enabledResizeElement(inizial) {
        $(inizial).draggable('enable');
     }
 


// element pada content div di click
 $('body').on('click','.moveLayout', function() {
    var init = $(this).parents().attr('initlayout');
    var type = $(this).parents().attr('type');
    $(this).hide();
    

    var contentEditable = $('div[initlayout='+init+']').attr('contenteditable');
    if(contentEditable != 'true') { 
     
     // disabled element resize yang tidak terpilih
     
     $('div[resize=true]').attr('resize','false');
     $('div[resize=false]').css(
                    {'border':'none',
                     'cursor':'default',
                    });
                    
                    
    disabledResizeElement('div[resize=false]');
    $('div[resize=false] .btnDeleteResize').hide('fast');
    $('div[resize=false] .ui-resizable-handle').hide('fast');
    $('div[resize=false] .btnmenuWidget').fadeOut('fast');
    $('div[resize=false]').removeAttr('contenteditable');
                
                    
    
     // disabled element resize yang tidak terpilih     ( untuk type element )
     $('div[resizelayout=true]').attr('resizelayout','false');
    
     $('div[resizelayout=false]').css(
                    {'border':'none',
                     'cursor':'default',
                    });    
                    
 
                    
    disabledResizeElement('div[resizelayout=false]');
    $('div[resizelayout=false] .btnDeleteResizeLayout').hide('fast');
    $('div[resizelayout=false] .ui-resizable-handle').hide('fast');
    $('div[resizelayout=false] .btnmenuWidgetLayout').fadeOut('fast');
    $('div[resizelayout=false] .btnmenuWidget').fadeOut('fast');
    $('div[resizelayout=false]').removeAttr('contenteditable');


     // set element resize yang terpilih
     var inizial = 'div[initlayout='+init+']';
     $('div[initlayout='+init+']').attr('resizelayout','true');
   
        if($('div[initlayout='+init+'] .ui-resizable-handle').length){
            $('div[resizelayout=true] .ui-resizable-handle').css({'display':'block'});
            $('div[resizelayout=true] .btnDeleteResizeLayout').css({'display':'block'});
            $('div[resizelayout=true] .btnmenuWidgetLayout').css({'display':'block'}); 
        } else {
        
             
        if(type == 'stripBox') {     
        $('div[initlayout='+init+']').append('<div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div>');
        } else if(type == 'centerBox') {
        $('div[initlayout='+init+']').append('<div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div>');    
        } else if( type == 'leftBox') {
        $('div[initlayout='+init+']').append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');      
        }
        
        
        $('div[initlayout='+init+']').append('<img style="cursor:pointer" class="btnDeleteResizeLayout" param="'+init+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
        $('div[initlayout='+init+']').append('<img style="cursor:pointer" class="btnmenuWidgetLayout" param="'+init+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
  
        }
     
         
            $('div[initlayout='+init+']').css(
                    {'border':'1px solid red',
                     'cursor':'move',
                    });
            
           
                    
                    

               $('div[initlayout='+init+'] .ui-resizable-handle').css(
                    {
                    'border':'1px solid red'
                    });

               $('div[initlayout='+init+'] #segrip').css(
                    {'right':'-5px',
                     'bottom':'-5px'
                    });
             resizeElement(inizial,type);
             enabledResizeElement('div[initlayout='+init+']');
         } else {
            
         }   
    });
    
    
    
     //click menu reisze elemen sub menu
    $('div').on('click','.btnmenuWidgetLayout', function() {
        if($('.submenuWidget').length) {   
        } else {
                var init = $(this).attr('param');
                $('div[initlayout='+init+']').append('<span style="z-index:999" class="submenuWidget"><section  class="head">Menu<img src="'+base_url+'assets/pic/tools/sidebar/closemenuwidget.png" id="closemenuwidget" style="width:14px;margin-right:15px;cursor:pointer;float:right;margin-top:2px;" /></section><ul><li id="BackgroundLayout">Backgorund</li><li id="settingLayout">Settings</li><li id="changeMn">Change Style</li><li id="addAnimationMn">Add Animation</li></ul><div class="bring-forward"></div><div class="send-backward"></div></span>');    
           
        }
   });
    
    
   
     
     
     // proses  delete element
     
     $('.body').on('click','.btnDeleteResizeLayout', function() {
        var restval = $(this).attr('param');    
        var par = $('div[initlayout='+restval+']').attr('initLayout');
        $('div[initlayout='+par+']').remove();
     });
     
     // close submenu widget
     $('.body').on('click','#closemenuwidget', function() {
        $('.submenuWidget').remove();
     });
     
     
     
     // proses bring forward
     $(document).on('click','.bring-forward', function() {
     var myZindex = $('div[resizelayout=true] ').css('z-index');
        var maxZindex = parseInt(myZindex, 10) + 1;
     var setZindex = $('div[resizelayout=true] ').css('z-index',maxZindex);
     alert(maxZindex);
     });
     
 
}); 
  
  
  
  
