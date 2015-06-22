$(document).ready(function() {

 
 $('.droppable').droppable({ drop: function(event, ui) {
 $(ui.draggable).clone().css('position','relative').appendTo('.droppable');
}});
 
    function resizeElement(inizial,type) {
            
            
            // apabila element layout bertipe leftBox
        
            $( "section[element=section]" ).draggable({
                axis: "y"
                });
                $(inizial).resizable({  
                        handles: {
                            'n': '#ngrip',
                            's': '#sgrip',
                        },

 start: function(event, ui) {        
        $(inizial).css({
            position: "relative",
            top: "0 !important",
            left: "0 !important"
        });
    },
    stop: function(event, ui) {
        $(inizial).css({
            position: "relative",
            top: "",
            left: ""
        });
    }

                    });
                
                
                
            // apabila element layout bertipe centerBox
          
            $(inizial).draggable();    
        }; 
        
     function disabledResizeElement(inizial) {
        $(inizial).draggable({ disabled: true });
     } 
     
     function enabledResizeElement(inizial) {
        $(inizial).draggable('enable');
     }
 


// element pada content div di click
 $('body').on('click','.moveSection', function() {
    var init = $(this).parents().attr('initSection');
    var type = $(this).parents().attr('type');
    $(this).hide();
    

    var contentEditable = $('section[initSection='+init+']').attr('contenteditable');
    if(contentEditable != 'true') { 
     
     // disabled element resize yang tidak terpilih
     
     $('section[resizelayout=true]').attr('resizelayout','false');
    
     $('section[resizelayout=false]').css(
                    {'border':'none',
                     'cursor':'default',
 
                    });
                    
                    
    disabledResizeElement('section[resize=false]');
    $('section[resize=false] .btnDeleteResize').hide('fast');
    $('section[resize=false] .ui-resizable-handle').hide('fast');
    $('section[resize=false] .btnmenuWidgetLayout').fadeOut('fast');
    $('section[resize=false] .btnmenuWidget').fadeOut('fast');
    
    $('section[resize=false]').removeAttr('contenteditable');
                
                    
    
     // disabled element resize yang tidak terpilih     ( untuk type element )
     $('section[resize=true]').attr('resize','false');
    
     $('section[resize=false]').css(
                    {'border':'none',
                     'cursor':'default',
                    });    
                    
 
                    
    disabledResizeElement('section[resizelayout=false]');
    $('section[resizelayout=false] .btnDeleteResize').hide('fast');
    $('section[resizelayout=false] .ui-resizable-handle').hide('fast');
    $('section[resizelayout=false] .btnmenuWidgetLayout').fadeOut('fast');
    $('section[resizelayout=false] .btnmenuWidget').fadeOut('fast');
    
    $('section[resizelayout=false]').removeAttr('contenteditable');
 
   





     // set element resize yang terpilih
     var inizial = 'section[initSection='+init+']';
     $('section[initSection='+init+']').attr('resizelayout','true');
   
        if($('section[initSection='+init+'] div[class=ui-resizable-handle]').length){
            
            $('section[resizeSection=true] .btnDeleteResize').show('fast');
            $('section[resizeSection=true] .ui-resizable-handle').show('fast');
            $('section[resizeSection=true] .btnmenuWidgetLayout').fadeIn('fast');  
           
        } 
     
         $('section[initSection='+init+']').append('<div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div>');
         
            $('section[initSection='+init+']').css(
                    {'border':'1px solid red',
                     'cursor':'move',
                    });
            
           
                    
                    

               $('section[initSection='+init+'] .ui-resizable-handle').css(
                    {
                    'border':'1px solid red'
                    });

               $('section[initSection='+init+'] #segrip').css(
                    {'right':'-5px',
                     'bottom':'-5px'
                    });
             resizeElement(inizial,type);
             enabledResizeElement('section[initSection='+init+']');
         } else {
            
         }   
    });
    
    
    
     //click menu reisze elemen sub menu
    $('section').on('click','.btnmenuWidgetLayout', function() {
        if($('.submenuWidget').length) {   
        } else {
                var init = $(this).attr('param');
                $('div[initSection='+init+']').append('<span style="z-index:999" class="submenuWidget"><section  class="head">Menu<img src="'+base_url+'assets/pic/tools/sidebar/closemenuwidget.png" id="closemenuwidget" style="width:14px;margin-right:15px;cursor:pointer;float:right;margin-top:2px;" /></section><ul><li id="BackgroundLayout">Backgorund</li><li id="settingLayout">Settings</li><li id="changeMn">Change Style</li><li id="addAnimationMn">Add Animation</li></ul><div class="bring-forward"></div><div class="send-backward"></div></span>');    
           
        }
   });
    
    
   
     
}); 
  
  
  
  
