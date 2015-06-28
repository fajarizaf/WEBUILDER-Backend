   <script src="<?php echo base_url(); ?>assets/js/uploadnoreload/jquery.iframe-post-form.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/uploadnoreload/mgupload.js"></script>

     <div id="imageManager" class="modal hide fade in" style="display: none; ">
         <div class="modal-header" style="border-bottom: 1px solid #ccc;" >
             <a class="close" id="close" data-dismiss="modal">×</a>
              <h3>Choose Images</h3>
            </div>
         <div class="modal-body" style="background: #fff;padding:0px;" >
             
 
          <style>
              .activecatGallery {
                  color:orangered;
              }
          </style>
          
             <script type="text/javascript">
             $(document).ready(function() {
             $('.imagesThumbsFileMedia .hoverefect').css({'display':'none'});
             $('.box-modalAddImages').css({'width':'100%'});   
             
             // get album images
             $.get( "panel/getAlbum", function( data ) {
                $( "#TOP .categoryimages" ).html( data );
             });

             // get file images
             $.get( "panel/getFileImages", function( data ) {
                $( "#TOP .box-modalAddImages" ).html( data );
             });


             // stock images di klick
             $('#stockimages').click(function() {
                // get album images
                 $.get( "panel/getAlbumstock", function( data ) {
                    $( "#TWO .categoryimages" ).html( data );
                 });

                 // get file images
                 $.get( "panel/getFileImagesstock/travel/", function( data ) {
                    $( "#TWO .box-modalAddImages" ).html( data );
                 });

                 $('#TOP').css({'display':'none'});    
                 $('#TWO').css({'display':'block'});
                 $('#myimages').css({'background':'none','top':'0'});
                 $('#stockimages').css({'background':'#fff','top':'1'});
                 $('.btnAddImages').css({'display':'none'});
             });


             // stock images di klick
             $('#myimages').click(function() {
                 $('#TOP').css({'display':'block'});    
                 $('#TWO').css({'display':'none'});
                 $('#stockimages').css({'background':'none','top':'0'});
                 $('#myimages').css({'background':'#fff','top':'1'});
                 $('.btnAddImages').css({'display':'block'});
             });

                
                // event ketika category list image manager di click
                function ambilDataGallery(param) {
                $('.loadingloadimagefilemanager').css({'display':'block'});
                $('.box-modalAddImages').css({'opacity':'0.4'});
                var dataString = 'category=' + param ;
             
                            $.ajax({
                            type	: "POST",
                            url: ""+base_url+"panel/getImagesbyAlbum",
                            data: dataString,
                            success	: function(data){
                        
                                $('.box-modalAddImages').html('');
                                  $('.loadingloadimagefilemanager').css({'display':'none'});
                                  $('.box-modalAddImages').css({'opacity':'1'});   
                                  if(data) {
                                        $('.box-modalAddImages').html(data);
                                   } else {
                                        $('.box-modalAddImages').append('<div style="width:400px;height:200px;margin:0px auto;margin-top:60px;"><img src="'+base_url+'assets/pic/tools/sidebar/sdf.png" width="141" style="margin-left:90px;" /><h3>Tidak Ada Gambar Di folder <span style="color:orange;font-size:20px;">"'+param+'"</span></h3><p>Tambah Gambar baru dengan mengklik tombol upload images</p></div>');    
                                   }                        
                                 }
                            
                    });
                    return false;   
                }



                function ambilDataGallerystock(param) {
                $('.loadingloadimagefilemanager').css({'display':'block'});
                $('.box-modalAddImages').css({'opacity':'0.4'});
                var dataString = 'category=' + param ;
             
                            $.ajax({
                            type    : "POST",
                            url: ""+base_url+"panel/getImagesbyAlbumstock",
                            data: dataString,
                            success : function(data){
                        
                                $('#TWO .box-modalAddImages').html('');
                                  $('.loadingloadimagefilemanager').css({'display':'none'});
                                  $('.box-modalAddImages').css({'opacity':'1'});   
                                  if(data) {
                                        $('#TWO .box-modalAddImages').html(data);
                                   } else {
                                        $('#TWO .box-modalAddImages').append('<div style="width:400px;height:200px;margin:0px auto;margin-top:60px;"><img src="'+base_url+'assets/pic/tools/sidebar/sdf.png" width="141" style="margin-left:90px;" /><h3>Tidak Ada Gambar Di folder <span style="color:orange;font-size:20px;">"'+param+'"</span></h3><p>Tambah Gambar baru dengan mengklik tombol upload images</p></div>');    
                                   }                        
                                 }
                            
                    });
                    return false;   
                }
                
                
                
                
                
             
                 
                function getInit() {
                    // mencari nilai tertinggi dari attribut init dari  element content
                    var numbers = $(".body div").map(function(){
                    return parseFloat(this.getAttribute('init')) || -Infinity;
                    }).toArray(); 

                    var maxInit = Math.max.apply(Math, numbers);
                    var newInit = maxInit + 1;
                    return newInit;
                }
                
                
                $('.btnAddImages').click(function() {
                document.getElementById("btnAddImages").click();
                });
                
        
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
                             'padding':'5px',
                            });

                    $(inizial).css(
                            {'right':'-5px',
                             'bottom':'-5px'
                            }); 

                    $(''+inizial+' div').css(
                            {
                             'border':'1px solid red'
                            });  
                }
                 
                 
                 $('.panelImge .imagesThumbsFileMedia').attr('cheked','false'); 
                 function setChecked(data) {
                     $('.panelImge[data-box='+data+'] .imagesThumbsFileMedia .hoverefect').css({'display':'block'});
                     $('.panelImge[data-box='+data+'] .imagesThumbsFileMedia').attr('cheked','true');
 
                return false;   
                 }
                 
                 function setUnChecked(data) {
                     $('.panelImge .imagesThumbsFileMedia').css({'background':'#efefef','border-color':'#ccc'});
                     $('.panelImge .imagesThumbsFileMedia img').css({'border-top':'none','border-bottom':'none'});
          
                 return false;   
                 }
                 
                 function setUnCheckedTrue() {
                     $('.panelImge .imagesThumbsFileMedia').css({'background':'#efefef','border-color':'#ccc'});
                     $('.panelImge .imagesThumbsFileMedia img').css({'border-top':'none','border-bottom':'none'});
                     $('.panelImge .imagesThumbsFileMedia[cheked=true] .checkedtrue').remove();
          
                 return false;   
                 }
                 
                 
                 function showdeleteImage(data) {
                     $('.panelImge[data-box='+data+'] .imagesThumbsFileMedia').prepend('<div class="deleteImageMedia"></div>');

                return false;   
                 }
                 
                 
                 $('.box-modalAddImages').on('click', '.panelImge', function() {
                    $('.imagesThumbsFileMedia .hoverefect ').css({'display':'none'});
                    $('.panelImge .imagesThumbsFileMedia[cheked=true]').attr('cheked','false');
                    var data = $(this).attr('data-box');
                    setChecked(data);
                    
                 });
                                  
                 
                 function closeModal() {
                     alert('asdasdasd');
                 }
                 
                 
                 function getInit() {
                    // mencari nilai tertinggi dari attribut init dari  element content
                    var numbers = $(".body div").map(function(){
                    return parseFloat(this.getAttribute('init')) || -Infinity;
                    }).toArray(); 

                    var maxInit = Math.max.apply(Math, numbers);
                    var newInit = maxInit + 1;
                    return newInit;
                }

                function Init() {
                    // mencari nilai tertinggi dari attribut init dari  element content
                    var numbers = $(".body div").map(function(){
                    return parseFloat(this.getAttribute('init')) || -Infinity;
                    }).toArray(); 

                    var maxInit = Math.max.apply(Math, numbers);
                    return maxInit;
                }



                function getSizeImageWidth(param) {
                    var img = document.getElementById(param); 
                    //or however you get a handle to the IMG
                    var width = img.clientWidth;
                    return width;
         
                }

                function getSizeImageHeight(param) {
                    var img = document.getElementById(param); 
                    //or however you get a handle to the IMG
                    var height = img.clientHeight;
                    return height;
                }
                
                
                 
                 function addImageElement(Url,init,album,nameImage) {
                    var inizial = '.scrat div[init='+init+']';
                    $('.scrat').append('<div type="images" element="content" style="border: medium none; cursor: default; padding: 0px; left: 193px; top: 115px; position: absolute;" mode="edit" resize="true" type="images"  init="'+init+'"></div>');       
                    $(inizial).append('<img id="'+init+'" src="'+Url+'" />');
                    $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div>');
                    $(inizial).append('<img style="cursor:pointer" class="btnDeleteResize" param="'+init+'" src="'+base_url+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
                    $(inizial).append('<img style="cursor:pointer" class="btnmenuWidget" param="'+init+'" src="'+base_url+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
                    $(inizial).css({'z-index':init});
                    resizeElement(inizial);
                    setCssResizeElement(inizial);
                    $(inizial).css({'width': getSizeImageWidth(init) ,'height' : getSizeImageHeight(init)});

                    // proses move file image ke dir temporary template user
                    var dataString = 'name=' + nameImage + '&album=' + album ;
             
                            $.ajax({
                            type    : "POST",
                            url: ""+base_url+"setting/moveImage",
                            data: dataString,
                            success : function(data){

                            }
                    });
                    return false; 

                   }


                 function changeImageElement(Url,init,album,nameImage) {
                    var inizial = 'div[resize=true] #'+init+'';
                    $(inizial).attr('src',Url);
                    // proses move file image ke dir temporary template user
                    var dataString = 'name=' + nameImage + '&album=' + album ;
             
                            $.ajax({
                            type    : "POST",
                            url: ""+base_url+"setting/moveImage",
                            data: dataString,
                            success : function(data){

                            }
                    });
                    return false; 
                   
                   }  
                   
                   
                   
                  
                  function addbacgroundElementLayout(Url,album,nameImage) {
                    $('div[resizelayout=true]').css({'background':'url('+Url+') no-repeat'});
                    $('div[resizelayout=true]').css({'background-position':'50% 50%'});
                    $('div[resizelayout=true]').css({'background-size':'cover'});
                    $('.imagesThumbs img').attr('src',Url);

                    // proses move file image ke dir temporary template user
                    var dataString = 'name=' + nameImage + '&album=' + album ;
             
                            $.ajax({
                            type    : "POST",
                            url: ""+base_url+"setting/moveImage",
                            data: dataString,
                            success : function(data){

                            }
                    });
                    return false;
                    
                   }


                function disableResizeElement() {
                    $('div[resize=true]').attr('resize','false');
                
                    $('div[resize=false]').css(
                                {'border':'none',
                                 'cursor':'default',
                                });
                 
                                
                    $('.body div[resize=false]').draggable({ disabled: true });
                    $('div[resize=false] .btnDeleteResize').hide('fast');
                    $('div[resize=false] .ui-resizable-handle').remove();
                    $('div[resize=false] .btnmenuWidget').fadeOut('fast');
                    $('div[resize=false] .btnmenuWidgetLayout').fadeOut('fast');
                    $('div[resize=false]').removeAttr('contenteditable');
                }   
                   
                   
                 
                 
                 $('#modalImgManager').click(function() {
                     
                     var Url = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('src');
                     if(Url) {
                        $('.modal-footer .loadingUpdate').html('<img src="'+base_url+'assets/pic/tools/sidebar/loadings.gif" width="20" />').delay(6000);
                        
                        
                         var counter=3;
                                var countdown = setInterval(function(){
                                $("#countersec").html(counter);
                                if (counter == 0) {
                                clearInterval(countdown);
                                
                                var activeElementType = $('div[resizelayout=true]').attr('element');
                                
                                    // inisialisasi element yang aktif apabila element tersebut type layout maka setting background
                                    if(activeElementType == 'layout') {
                                        var Url = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('src');
                                        var nameImage = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('class');
                                        var album = $('.panelImge .imagesThumbsFileMedia[cheked=true]').attr('album');
                                        addbacgroundElementLayout(Url,album,nameImage);
                                        $('.loadingUpdate').html('').delay(6000);
                                        $('.close').click();
                                        setUnCheckedTrue();  
                                    } else {
                                        var activeElement = $('div[resize=true]').attr('type');
                                        // apabilaada element image yang aktif mak hanya merubah gambar
                                        if (activeElement == 'images') {
                                           var Url = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('src');
                                           var nameImage = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('class');
                                           var album = $('.panelImge .imagesThumbsFileMedia[cheked=true]').attr('album');
                                           var init = $('div[resize=true]').attr('init');
                                               changeImageElement(Url,init,album,nameImage);
                                               $('.loadingUpdate').html('').delay(6000);
                                               $('#close').click();
                                               setUnCheckedTrue();
                                        } else {
                                            disableResizeElement();
                                            // inisialisasi element yang aktif apabila element tersebut type image maka add image baru    
                                            var Url = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('src');
                                            var nameImage = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('class');
                                            var album = $('.panelImge .imagesThumbsFileMedia[cheked=true]').attr('album');
                                               addImageElement(Url,getInit(),album,nameImage);
                                               $('.loadingUpdate').html('').delay(6000);
                                               $('#close').click();
                                               setUnCheckedTrue();
                                            }
                                        }

                                    
                               
                                }
                                counter--;
                                }, 500);
                            }else {
                                alert('Gambar harus di pilih')
                                }
                        
                        
                    });
                    
                   
                    
                    function getListFolder() {
                        $.getJSON( "setting/getCatImages", function( data ) {
                            var items = [];
                            var i = 1;
                            $('.list-modalAddImages ul').html('');
                                   $.each( data, function( key, val ) {
                                      $('.list-modalAddImages ul').append('<li class="list-modalfolderImg" data-link="'+val.category_name+'">'+val.category_name+'</li>');
                                   i++;
                                   });
                        });
                    }   
                    
                    

                    $('.list-modalAddImages ul').on('click','#prosesAddFolder', function() {    
                        var category = $('#textfolder').val();
                        var dataString = 'category=' + category ;
             
                            $.ajax({
                            type	: "POST",
                            url: ""+base_url+"setting/addfolderImge",
                            data: dataString,
                            success	: function(response){
                                getListFolder();
                                ambilDataGallery(category);
                            }
                    });
                    return false;   
                    });
                    
                    
                    
                    
                    $('.list-modalAddImages ul').on('click','#TOP .list-modalfolderImg', function() {
                        var list =  $(this).attr('data-link');
                        var data =  $(this).attr('data');
                        ambilDataGallery(list);
                        $('.list-modalfolderImg').removeClass('activecatGallery'); 
                        $('li[data='+data+']').addClass('activecatGallery');
                        $('.categoryimgmanageractive').val(list);
                        $('.list-modalfolderImg').removeAttr('style');
                        $(this).css({'background':'#3798eb','color':'#fff'});
                        $('#categoryImages').val(list);
                    });


                    $('.list-modalAddImages ul').on('click','#TWO .list-modalfolderImg', function() {
                        var list =  $(this).attr('data-link');
                        var data =  $(this).attr('data');
                        ambilDataGallerystock(list);
                        $('.list-modalfolderImg').removeClass('activecatGallery'); 
                        $('li[data='+data+']').addClass('activecatGallery');
                        $('.categoryimgmanageractive').val(list);
                        $('.list-modalfolderImg').removeAttr('style');
                        $(this).css({'background':'#3798eb','color':'#fff'});
                        $('.categoryImages').val(list);
                    });
                    
                    
                    
                    $('#addfolder').click(function() {
                        $('.list-modalAddImages ul').append('<div style="margin-top:7px;width:100%;height:30px;padding:6px;background:#efefef;margin-left:-5px;"><input style="width:120px;height:30px;margin-left:5px;" type="text" id="textfolder" name="addfolder" /><div id="prosesAddFolder" style="width:30px;padding:5px;margin-top:-1px;margin-right:5px;" class="btn">Add</div></div>');
                    });
                    
                    
                    
                    
                    // event ketika image di hover
                    
                    $('.box-modalAddImages').on('mouseover','.panelImge', function() {
                         var data = $(this).attr('data-box');
                         $('div[data-box='+data+'] .hoverefect').css({'display':'block'});
                    });
                    
                    // event ketika image di hover
                    
                    $('.box-modalAddImages').on('mouseout','.panelImge', function() {
                         $('.imagesThumbsFileMedia[cheked=false] .hoverefect ').css({'display':'none'});
                    });
                    
                    
    
    
             });
             
             </script>
             
             <style>
                 
                 
                 
                 .imagesThumbsFileMedia:hover {
                        background: #aed6ff;
                        border-color:#4c93ff;
                  }
                  
                  .checkedtrue {
                      width:24px;
                      height:24px;
                      position:absolute;
                      background:url(<?php echo base_url() ?>assets/pic/tools/sidebar/imgchecked.png);
                      margin-top:5px;
                      float:right;
                      margin-left:107px;
                      z-index:9999;
                  }
                  
                  .deleteImageMedia {
                      width:26px;
                      height:26px;
                      background:url(<?php echo base_url() ?>assets/pic/tools/sidebar/deleteimageMedia.png);
                      position:absolute;
                      float:left;
                      margin-right:2px;
                  }
                  
                  #TOP .slimScrollDiv {
                      float:left;
                  }
                  
                 
             </style>
             
             
             
             <div onClick="browse()" style="cursor:pointer;" class="btnAddImages"></div>
             <div class="loadingUpdate1" style="margin-top: 6px;margin-right: 10px;"></div>
             
             <?php $attributes = array('class' => 'form-UploadImages', 'id' => 'form-UploadImages'); ?>
             <?php echo form_open_multipart('setting/UploadImage/',$attributes);  ?>
             <input  type="file" name="btnAddImages"  id="btnAddImages" />
             <input  type="hidden" id="categoryImages" name="categoryImages" value="" />
             <input type="hidden" name="categoryimgmanageractive" class="categoryimgmanageractive"  />
             <?php echo form_close(); ?>
             

                <div id="tab-container" class='tab-container' style="margin-top:10px;margin-right:25px;width:100%;">
                     
                     <ul class='etabs' style="width:100%;border-bottom: 1px solid #ccc;margin-left:0px;margin-top:-18px;background:#f0f3f5;">
                         <li id="myimages" style="background:#fff;border-left:0px;padding:12px;border-top:0px;font-size:13px;" class='tab'><a class="font2" style="float:left;">My Images</a></li>
                         <li id="stockimages"  style="padding:12px;border-top:0px;font-size:13px;"  class='tab'><a class="font2" style="float:left;">Stock Images</a></li>
                     </ul>
          
          
          
                     <div class='panel-container' style="height:342px;">
   
                        <div id="TOP">
                            <div class="mainbarimagemanager"><h4 style="color:#7a92a5;margin-bottom:7px;">Silahkan upload image anda dalam format JPEG,PNG atau GIF,dan maksimal upload file size 15MB</h4></div>
                            <div class="list-modalAddImages" style="float: left;">
                                <ul class="categoryimages" style="overflow:none;margin-left:0px;">
                                    
                                </ul>
                                
                                <div id="addfolder" class="btn1" style="width:140px;margin-top:0px;"> <img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/addfolder.png" style="width:20px;" />
                                  Add Folder</div>
                            </div>
                            <div class="box-modalAddImages" style="width:100%"></div>
                            <img class="loadingloadimagefilemanager" src="<?php echo base_url(); ?>assets/pic/tools/sidebar/load1.gif">
                        </div>




                        <div id="TWO" style="display:none;">
                            <div class="mainbarimagemanager"><h4 style="color:#7a92a5;margin-bottom:7px;">Stok Images yang disediakan mungkin membatu anda dalam perancangan website</h4></div>
                            <div class="list-modalAddImages" style="float: left;">
                                <ul class="categoryimages" style="overflow:none;margin-left:0px;">
                                    
                                </ul>
                            </div>
                            <div class="box-modalAddImages" style="width:100%"></div>
                            <img class="loadingloadimagefilemanager" src="<?php echo base_url(); ?>assets/pic/tools/sidebar/load1.gif">
                        </div>



      
                        
                         
                     </div>       
                 </div>
                
                
                
                
            </div>
            <div class="modal-footer">
                <input type="submit" id="modalImgManager" style="margin-top:2px;" class="btn btn-success" value="Proses" /> 
                <div class="loadingUpdate" style="margin-top: 8px;margin-right: 25px;width:15px;height:15px;"></div>
              <?php echo form_close(); ?>
            </div>
          </div>  

