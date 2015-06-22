$("document").ready(function() {

        // Event Clik Subsidebar
        
	$('.add-page').click(function() {
		$('.sub-sidebar').fadeIn('fast');
                loadSubsidebar('addPage');
	});
       
        
	//close panel sidebar
        
        $('.sub-sidebar').on('click','.drop-sidebar', function() {
		$('.sub-sidebar').fadeOut('fast');
	});
        
        $('.subsub-sidebar').on('click','.dropsub-sidebar', function() {
		$('.subsub-sidebar').fadeOut('fast');
	});
        


        
        function getInit() {  
                var numbers = $(".body div[element=content]").map(function(){
                return parseFloat(this.getAttribute('init')) || 1;
                }).toArray(); 
                
                var maxInit = Math.max.apply(Math, numbers);

                if(maxInit == '-Infinity') {
                    var newInit = 1;
                    return newInit;
                } else {
                    var newInit = maxInit + 1;
                    return newInit;
                }
        }
        
        
        
        function getInitMint() {
            // mencari nilai tertinggi dari attribut init dari  element content
                var numbers = $(".body div[element=content]").map(function(){
                return parseFloat(this.getAttribute('init')) || 1;
                }).toArray(); 
                
                var maxInit = Math.max.apply(Math, numbers);
                if(maxInit == '-Infinity') {
                    var newInit = 1;
                    return newInit;
                } else {
                    var newInit = maxInit;
                    return newInit;
                }
        }


        function getInitLayout() {
            // mencari nilai tertinggi dari attribut init dari  element content
                var numbers = $(".body div[element=layout]").map(function(){
                return parseFloat(this.getAttribute('initlayout')) || 1;
                }).toArray();

                var maxInit = Math.max.apply(Math, numbers);
                if(maxInit == '-Infinity') {
                    var newInit = 1;
                    return newInit;
                } else {
                    var newInit = maxInit + 1;
                    return newInit;
                }
        }



        function getInitMintLayout() {
            // mencari nilai tertinggi dari attribut init dari  element content
                var numbers = $(".body div[element=layout").map(function(){
                return parseFloat(this.getAttribute('initlayout')) || 1;
                }).toArray();

                var maxInit = Math.max.apply(Math, numbers);
                if(maxInit == '-Infinity') {
                    var newInit = 1;
                    return newInit;
                } else {
                    var newInit = maxInit;
                    return newInit;
                }
        }
        
       
        
        
        function disableResizeElement() {
            $('div[resize=true]').attr('resize','false');
        
            $('div[resize=false]').css(
                        {'border':'none',
                         'cursor':'default',
                        });
                   
            $('.scrat div[resize=false]').draggable({ disabled: true });
            $('div[resize=false] .btnDeleteResize').remove();
            $('div[resize=false] .ui-resizable-handle').hide();
            $('div[resize=false] .btnmenuWidget').remove();
            $('div[resize=false] .btnmenuWidgetLayout').remove();
            $('div[resize=false]').removeAttr('contenteditable');

             $('div[resizelayout=true]').attr('resizelayout','false');
    
             $('div[resizelayout=false]').css(
                            {'border':'none',
                             'cursor':'default',
                            });


            $('div[resizelayout=false] .btnDeleteResizeLayout').hide('fast');
            $('div[resizelayout=false] .ui-resizable-handle').hide('fast');
            $('div[resizelayout=false] .btnmenuWidgetLayout').fadeOut('fast');
            $('div[resizelayout=false] .btnmenuWidget').fadeOut('fast');
            $('div[resizelayout=false]').removeAttr('contenteditable');   
        }

        
        
        function resizeElement(inizial) {
            $(inizial).resizable({
              
                handles: {
                    'ne': '#negrip',
                    'se': '#segrip',
                    'sw': '#swgrip',
                    'nw': '#nwgrip'
                }
            })
            .draggable();             
        };
        
        
        
        function setCssResizeElement(inizial) {
          $(inizial).css(
                    {'border':'1px solid red',
                     'cursor':'move',
                     'padding':'5px'
                    });
                    
            $(inizial).css(
                    {'right':'-5px',
                     'bottom':'-5px'
                    }); 
                    
            $(''+inizial+' .ui-resizable-handle').css(
                    {
                     'border':'1px solid red'
                    });  
        }
        
        
        
        // Add Text
        
            $('#titlePanel').click(function() {
                disableResizeElement();
                var inizial = '.scrat div[init='+getInit()+']';
                $('.scrat').append('<div type="title" element="content" style="cursor: move; left: 564px; top: 390px; position: absolute; width: 193px; height: 60px; z-index: 5; padding: 5px; right: -5px; bottom: -5px; background: none 0% 0% repeat scroll transparent;z-index:'+getInit()+'" mode="edit" class="columnFull" resize="true" init="'+getInit()+'"><h2 style="font-size:28px;line-height:90%;">Ini Adalah Sebuah Title</h2></div>');
                $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');
                $(inizial).append('<img style="cursor:pointer" class="btnDeleteResize" param="'+getInitMint()+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
                $(inizial).append('<img style="cursor:pointer" class="btnmenuWidget" param="'+getInitMint()+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
                resizeElement(inizial);
                setCssResizeElement(inizial); 
            });
      
        
         // Add Paragraph
        
        $('#paragraphPanel').click(function() {
            disableResizeElement();
            var inizial = '.scrat div[init='+getInit()+']';
            $('.scrat').append('<div type="text" element="content" style="cursor: move; left: 373px; top: 236px; position: absolute; width: 230px; height: 87px; padding: 5px; right: -5px; bottom: -5px; background: none 0% 0% repeat scroll transparent;z-index:'+getInitLayout()+'" mode="edit" class="columnFull" resize="true" init="'+getInit()+'">Im a paragraph. Click here to add your own text and edit me. Im a great place for you to tell a story and let your users know a little more about you.</div>');
            $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');
            $(inizial).append('<img style="cursor:pointer" class="btnDeleteResize" param="'+getInitMint()+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
            $(inizial).append('<img style="cursor:pointer" class="btnmenuWidget" param="'+getInitMint()+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
            resizeElement(inizial);
            setCssResizeElement(inizial);
        });
        
        
        // Add ButtonText
        
        $('#btnPanels').click(function() {
            disableResizeElement();
            var inizial = '.scrat div[init='+getInit()+']';
            $('.scrat').append('<div type="button" element="content" style="border: medium none; cursor: default;left: 723px; top: 115px; position: absolute; width: 122px; height: 53px;z-index:'+getInitLayout()+'" mode="edit" class="columnFull" resize="true" init="'+getInit()+'"> <a href="#"><div type="btnStyle" class="button default"><p>Buttons</p></div></a></div>');
            $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');
            $(inizial).append('<img style="cursor:pointer" class="btnDeleteResize" param="'+getInitMint()+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
            $(inizial).append('<img style="cursor:pointer" class="btnmenuWidget" param="'+getInitMint()+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
            resizeElement(inizial);
            setCssResizeElement(inizial);
            
        });
        
        
        // Add Horizontal Menu
        
        $('#btnHorizontalMenu').click(function() {
            disableResizeElement();
            var inizial = 'div[type=centerBox] div[init='+getInit()+']';
            var menuList = $('.nav-atas').html();
            $('div[type=centerBox]').append('<div class="nav-atas" element="content" style=" left: 323px; top: 315px; position: absolute;z-index:'+getInitLayout()+'" mode="edit" class="columnFull" resize="true" init="'+getInit()+'">'+menuList+'</div>');
            $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');
            $(inizial).append('<img style="cursor:pointer" class="btnDeleteResize" param="'+getInitMint()+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
            $(inizial).append('<img style="cursor:pointer" class="btnmenuWidget" param="'+getInitMint()+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
            resizeElement(inizial);
            setCssResizeElement(inizial);
            
        });
























        // Add stripBox

        $('#btnstripBox').click(function() {
            disableResizeElement();
            var inizial = '.design-templates div[initlayout='+getInitLayout()+']';
            var menuList = $('.nav-atas').html();
            $('.design-templates').append('<div type="stripBox" element="layout" style="top: 515px; position: absolute;" mode="edit"  resizelayout="true" initLayout="'+getInitLayout()+'"></div>');
            $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');
            $(inizial).append('<div class="moveLayout"></div>');
            $(inizial).append('<img style="cursor:pointer" class="btnDeleteResize" param="'+getInitMintLayout()+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
            $(inizial).append('<img style="cursor:pointer" class="btnmenuWidgetLayout" param="'+getInitMintLayout()+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
            resizeElement(inizial);
            setCssResizeElement(inizial);

        });
        
        
        // Add centerBox

        $('#btncenterBox').click(function() {
            disableResizeElement();
            var inizial = 'div[type=centerBox] div[initlayout='+getInitLayout()+']';
            var menuList = $('.nav-atas').html();
            $('div[type=centerBox]').append('<div type="centerBox" element="layout" style="top: 515px;z-index:'+getInitLayout()+'" mode="edit"  resizelayout="true" initLayout="'+getInitLayout()+'"></div>');
            $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');
            $(inizial).append('<div class="moveLayout"></div>');
            $(inizial).append('<img style="cursor:pointer" class="btnDeleteResizeLayout" param="'+getInitMintLayout()+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
            $(inizial).append('<img style="cursor:pointer" class="btnmenuWidgetLayout" param="'+getInitMintLayout()+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
            resizeElement(inizial);
            setCssResizeElement(inizial);

        });
        
        // Add leftBox

        $('#btnleftBox').click(function() {
            disableResizeElement();
            $('.scrat').animate({ height : 'auto' }, 1000);
            var inizial = '.scrat div[initlayout='+getInitLayout()+']';
            var menuList = $('.nav-atas').html();
            $('.scrat').append('<div type="leftBox" element="layout" style="top: 515px;z-index:'+getInitLayout()+'" mode="edit"  resizelayout="true" initLayout="'+getInitLayout()+'"></div>');
            $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div><div class="ui-resizable-handle ui-resizable-n" id="ngrip"></div><div class="ui-resizable-handle ui-resizable-s" id="sgrip"></div><div class="ui-resizable-handle ui-resizable-e" id="egrip"></div><div class="ui-resizable-handle ui-resizable-w" id="wgrip"></div>');
            $(inizial).append('<div class="moveLayout"></div>');
            $(inizial).append('<img style="cursor:pointer" class="btnDeleteResizeLayout" param="'+getInitMintLayout()+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
            $(inizial).append('<img style="cursor:pointer" class="btnmenuWidgetLayout" param="'+getInitMintLayout()+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
            resizeElement(inizial);
            setCssResizeElement(inizial);

        });
        
        
        
        
        
        
        
     
        
     
	
});
