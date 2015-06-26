     <div id="imageManager" class="modal hide fade in" style="display: none; ">
         <div class="modal-header" style="border-bottom: 1px solid #ccc;" >
             <a class="close" id="close" data-dismiss="modal">×</a>
              <h4>Add Images</h4>
            </div>
         <div class="modal-body" style="background: #efefef;padding:0px;" >
             
          
            
           
          <style>
              .activecatGallery {
                  color:orangered;
              }
          </style>
          
             <script type="text/javascript">
             $(document).ready(function() {
                 
             var siteUrl = 'http://localhost/project/intersweb/';

                
                // event ketika category list image manager di click
                
                function ambilDataGallery(param) {
                
                var dataString = 'category=' + param ;
             
                            $.ajax({
                            type	: "POST",
                            url: ""+siteUrl+"setting/getImages2",
                            data: dataString,
                            dataType: "json",
                            success	: function(data){
                                
                                var i = 1;
                        $('.box-modalAddImages').html('');
                               
                                 $.each( data, function( key, val ) {
                                    var idCategory = val.idCategory;
                                    var rows = val.rows;
                                    
                                  if( rows == 0 ) {
                                     
                                   $('.box-modalAddImages').html('<div style="width:400px;height:200px;margin:0px auto;margin-top:60px;"><img src="'+siteUrl+'assets/pic/tools/sidebar/sdf.png" width="141" style="margin-left:90px;" /><h3>Tidak Ada Gambar Di folder <span style="color:orange;font-size:20px;">"'+val.idCategory+'"</span></h3><p>Tambah Gambar baru dengan mengklik tombol upload images</p></div>');
                                   $('#categoryImages').val(idCategory);
                                   } else {
                                       
                                     
                                        $('.box-modalAddImages').append('<div data-box="'+i+'" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;"><div class="imagesThumbsFileMedia"><img src="'+siteUrl+'upload/'+val.path+'" style="width:100%;" /></div></div>');    
                                   }
                                  i++;   
                                 }); 
                                    
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
                     $('.panelImge[data-box='+data+'] .imagesThumbsFileMedia').css({'background':'#4c93ff','border-color':'#005f9a'});
                     $('.panelImge[data-box='+data+'] .imagesThumbsFileMedia img').css({'border-color':'#005f9a'});
                     $('.panelImge[data-box='+data+']').prepend('<div class="checkedtrue"></div>');
                     $('.panelImge[data-box='+data+'] .imagesThumbsFileMedia').attr('cheked','true');
 
                return false;   
                 }
                 
                 function setUnChecked(data) {
                     $('.panelImge .imagesThumbsFileMedia').css({'background':'#efefef','border-color':'#ccc'});
                     $('.panelImge .imagesThumbsFileMedia img').css({'border-top':'none','border-bottom':'none'});
                     $('.panelImge .checkedtrue').remove();
          
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
                    $('.panelImge .imagesThumbsFileMedia[cheked=true]').attr('cheked','false');
                    setUnChecked(data);
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
                
                
                 
                 function addImageElement(Url,init) {
                    var inizial = '.scrat div[init='+init+']';
                    $('.scrat').append('<div type="images" element="content" style="border: medium none; cursor: default; padding: 0px; left: 193px; top: 115px; position: absolute;" mode="edit" resize="true" type="images"  init="'+init+'"></div>');       
                    $(inizial).append('<img id="'+init+'" src="'+Url+'" />');
                    $(inizial).append('<div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div><div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div><div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div><div class="ui-resizable-handle ui-resizable-se" id="segrip"></div>');
                    $(inizial).append('<img style="cursor:pointer" class="btnDeleteResize" param="'+init+'" src="'+siteUrl+'assets/pic/tools/sidebar/iconDelElement.png" width="23" height="22" ></img>');
                    $(inizial).append('<img style="cursor:pointer" class="btnmenuWidget" param="'+init+'" src="'+siteUrl+'assets/pic/tools/sidebar/pan.png" width="47" height="24" ></img>');
                    $(inizial).css({'z-index':init});
                    resizeElement(inizial);
                    setCssResizeElement(inizial);
                    $(inizial).css({'width': getSizeImageWidth(init) ,'height' : getSizeImageHeight(init)});
                   }


                 function changeImageElement(Url,init) {
                    var inizial = 'div[resize=true] #'+init+'';
                    $(inizial).attr('src',Url);
                   }  
                   
                   
                   
                  
                  function addbacgroundElementLayout(Url) {
                    $('div[resizelayout=true]').css({'background':'url('+Url+') no-repeat'});
                    $('div[resizelayout=true]').css({'background-position':'50% 50%'});
                    $('div[resizelayout=true]').css({'background-size':'cover'});
                    $('.imagesThumbs img').attr('src',Url);
                    
                   }


                function disableResizeElement() {
                    $('div[resize=true]').attr('resize','false');
                
                    $('div[resize=false]').css(
                                {'border':'none',
                                 'cursor':'default',
                                });
                 
                                
                    $('.content div[resize=false]').draggable({ disabled: true });
                    $('div[resize=false] .btnDeleteResize').hide('fast');
                    $('div[resize=false] .ui-resizable-handle').remove();
                    $('div[resize=false] .btnmenuWidget').fadeOut('fast');
                    $('div[resize=false] .btnmenuWidgetLayout').fadeOut('fast');
                    $('div[resize=false]').removeAttr('contenteditable');
                }   
                   
                   
                 
                 
                 $('#modalImgManager').click(function() {
                     
                     var Url = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('src');
                     if(Url) {
                        $('.modal-footer .loadingUpdate').html('<img src="'+siteUrl+'assets/pic/tools/sidebar/loadings.gif" width="30" />').delay(6000);
                        
                        
                         var counter=3;
                                var countdown = setInterval(function(){
                                $("#countersec").html(counter);
                                if (counter == 0) {
                                clearInterval(countdown);
                                
                                var activeElementType = $('div[resizelayout=true]').attr('element');
                                
                                    // inisialisasi element yang aktif apabila element tersebut type layout maka setting background
                                    if(activeElementType == 'layout') {
                                        var Url = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('src');
                                        addbacgroundElementLayout(Url);
                                        $('.loadingUpdate').html('').delay(6000);
                                        $('.close').click();
                                        setUnCheckedTrue();  
                                    } else {
                                        var activeElement = $('div[resize=true]').attr('type');
                                        // apabilaada element image yang aktif mak hanya merubah gambar
                                        if (activeElement == 'images') {
                                           var Url = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('src');
                                           var init = $('div[resize=true]').attr('init');
                                               changeImageElement(Url,init);
                                               $('.loadingUpdate').html('').delay(6000);
                                               $('#close').click();
                                               setUnCheckedTrue();
                                        } else {
                                            disableResizeElement();
                                            // inisialisasi element yang aktif apabila element tersebut type image maka add image baru    
                                            var Url = $('.panelImge .imagesThumbsFileMedia[cheked=true] img').attr('src');
                                               addImageElement(Url,getInit());
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
                            url: ""+siteUrl+"setting/addfolderImge",
                            data: dataString,
                            success	: function(response){
                                getListFolder();
                                ambilDataGallery(category);
                            }
                    });
                    return false;   
                    });
                    
                    
                    
                    
                    $('.list-modalAddImages ul').on('click','.list-modalfolderImg', function() {
                    var list =  $(this).attr('data-link');
                    ambilDataGallery(list);
                    $('.list-modalfolderImg').removeClass('activecatGallery'); 
                    $('li[data-link='+list+']').addClass('activecatGallery');
                    $('.categoryimgmanageractive').val(list);
                    });
                    
                    
                    
                    $('#addfolder').click(function() {
                        $('.list-modalAddImages ul').append('<div style="margin-top:7px;width:100%;padding:6px;background:#efefef;margin-left:-5px;"><input style="width:90px;margin-left:5px;" type="text" id="textfolder" name="addfolder" /><div id="prosesAddFolder" style="width:30px;padding:5px;margin-top:-1px;margin-right:25px;" class="btn">Add</div></div>');
                    });
                    
                    
                    
                    
                    // event ketika image di hover
                    
                    $('.box-modalAddImages').on('mouseover','.panelImge', function() {
                         var data = $(this).attr('data-box');
                        showdeleteImage(data);
                    });
                    
                    // event ketika image di hover
                    
                    $('.box-modalAddImages').on('mouseout','.panelImge', function() {
                         $('.deleteImageMedia').remove();
                    });
                    
                    
    
    
             });
             
             </script>
             
             <style>
                 
                 
                 
                 .imagesThumbsFileMedia {
                     -moz-border-radius:4px 4px 4px;
                     -webkit-border-radius:4px 4px 4px;
                     border-radius:4px 4px 4px;
                 }
                 
                 .imagesThumbsFileMedia:hover {
                        background: #aed6ff;
                        border-color:#4c93ff;
                  }
                  
                  .checkedtrue {
                      width:24px;
                      height:24px;
                      position:absolute;
                      background:url(<?php echo base_url() ?>assets/pic/tools/sidebar/imgchecked.png);
                      margin-top:-10px;
                      float:right;
                      margin-left:137px;
                      z-index:12;
                      display: none;
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
             <input  type="hidden" id="categoryImages" name="categoryImages" value="default" />
             <input type="hidden" name="categoryimgmanageractive" class="categoryimgmanageractive"  />
             <?php echo form_close(); ?>
             
                <div id="tab-container" class='tab-container' style="margin-top:10px;margin-right:25px;width:100%;">
                     
                     <ul class='etabs' style="width:98%;border-bottom: 1px solid #ccc;margin-left:0px;margin-top:-17px;">
                         <li style="border-left:0px;padding:12px;border-top:0px;" class='tab'><a class="font2" style="float:left;" href="#TOP">Upload Files</a></li>
                         <li style="padding:12px;border-top:0px;"  class='tab'><a class="font2" style="float:left;" href="#TWO">Vector Images</a></li>
                     </ul>
          
          
          
                     <div class='panel-container'>
   
                        <div id="TOP">
                            <div class="list-modalAddImages" style="float: left;">
                                <ul style="overflow:none;margin-left:10px;">
                                    <?php foreach ($categoryimages as $row ) { ?>
                                    <li class="list-modalfolderImg" data-link="<?php echo $row->IdCategory ?>"><?php echo $row->category_name ?></li>
                                    <?php } ?>
                                </ul>
                                
                                <div id="addfolder" class="btn1" style="width:140px;margin-top:0px;"> <img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/addfolder.png" style="width:20px;" />
                                  Add Folder</div>
                            </div>
                            <div class="box-modalAddImages">
                               
                                <div data-box="1" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/mbookair_photo1.jpg" style="width:100%;" />
                                </div>  
                                </div>
                                
                                <div data-box="2" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/motox_photo1.jpg" style="width:100%;" />
                                </div>  
                                </div>
                                
                                <div data-box="3" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/gear2_photo14.jpg" style="width:100%;" />
                                </div>  
                                </div>
                                
                                <div data-box="4" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/gear2_photo7.jpg" style="width:100%;" />
                                </div>  
                                </div>
                                
                                <div data-box="5" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/gear2_photo12.jpg" style="width:100%;" />
                                </div>  
                                </div> 
                            </div>
                        </div>




                        <div id="TWO">
                            <div class="list-modalAddImages" style="float: left;">
                                <ul style="overflow:none;margin-left:10px;">
                                    
                                    <?php foreach ($categoryimages as $row ) { ?>
                                    <li class="list-modalfolderImg" data-link="<?php echo $row->IdCategory ?>"><?php echo $row->category_name ?></li>
                                    <?php } ?>
                                </ul>
                                
                                <div id="addfolder" class="btn1" style="width:140px;margin-top:0px;"> <img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/addfolder.png" style="width:20px;" />
                                  Add Folder</div>
                            </div>
                            <div class="box-modalAddImages">
                               
                                <div data-box="1" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/mbookair_photo1.jpg" style="width:100%;" />
                                </div>  
                                </div>
                                
                                <div data-box="2" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/motox_photo1.jpg" style="width:100%;" />
                                </div>  
                                </div>
                                
                                <div data-box="3" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/gear2_photo14.jpg" style="width:100%;" />
                                </div>  
                                </div>
                                
                                <div data-box="4" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/gear2_photo7.jpg" style="width:100%;" />
                                </div>  
                                </div>
                                
                                <div data-box="5" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                                <div class="imagesThumbsFileMedia">
                                    <img src="<?php echo base_url(); ?>assets/pic/gallery/gear2_photo12.jpg" style="width:100%;" />
                                </div>  
                                </div> 
                            </div>
                        </div>



      
                        
                         
                     </div>       
                 </div>
                
                
                
                
            </div>
            <div class="modal-footer">
                <input type="submit" id="modalImgManager" class="btn btn-success" value="Proses" /> 
                <div class="loadingUpdate" style="margin-top: 6px;margin-right: 10px;"></div>
              <?php echo form_close(); ?>
            </div>
          </div>  

