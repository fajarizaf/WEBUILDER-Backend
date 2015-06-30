<!DOCTYPE html>
<html>
    <head>
        <title>Site Builder</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/tabs.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar-style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/progress-bar.css" />
        <script src="<?php echo base_url(); ?>assets/proses_ajax/general.js" type="text/javascript"></script>
             
         <script type="text/javascript">
         $(document).ready(function(){
         $('#imageManager').css({'width':'80%','margin-left':'-40%'});         

                            $('.sidebar-scroll').slimScroll({
                                height: '200px',
                                width: '240px'
                            }); 

                            $('.list-modalAddImages ul').slimScroll({
                                height: '290px',
                                width: '180px',
                                float: 'left'
                            });
                            
                             $('.box-modalAddImages').slimScroll({
                                height: '325px',
                                width: '81%',
                                float: 'left'
                            });

          $('#viewmode').click(function() {
            $('.loadingUpdate').html('<img src="'+base_url+'/assets/pic/tools/sidebar/loadings.gif" width="25" />').delay(6000);
              $.ajax({
			         type	: "POST",
                        url: ""+base_url+"setting/viewMode",				  
			                  success	: function(response){
                        var counter=3;
                          var countdown = setInterval(function(){
                          $("#countersec").html(counter);
                            if (counter == 0) {
                            clearInterval(countdown); 
                                window.location.href = base_url+'layout/';
                            }
                          counter--;
                        }, 500);     
			         }
		        });
          });
         


         $('#editmode').click(function() {
          $('.loadingUpdate').html('<img src="'+base_url+'/assets/pic/tools/sidebar/loadings.gif" width="25" />').delay(6000);
            $.ajax({
        			type	: "POST",
              url: ""+base_url+"setting/editMode",				  
        			success	: function(response){
                          
                                        var counter=3;
                                        var countdown = setInterval(function(){
                                        $("#countersec").html(counter);
                                        if (counter == 0) {
                                        clearInterval(countdown);
                                        $('.loadingUpdate').html('').delay(6000);
                                                $('.body').load(''+base_url+'layout/pages/home').hide().fadeIn('slow');
                                                $('.panelleft').load(''+base_url+'layout/panelLeft/');
                                                
                                            
                                        }
                                        counter--;
                                        }, 500);                  
        			}
        		});
         });



        $('.btnRequestnoDomain').click(function() {
         $('.loadingUpdate').html('<img src="'+servicesUrl+'/assets/pic/tools/sidebar/loadings.gif" width="25" />').delay(6000);

          var idpengguna = $('.idpengguna').val();
          var themesdipilih = $('.themesdipilih').val();
          var namadomain = $('.namadomain').val();

          var dataString = 'idpengguna=' + idpengguna +'&themesdipilih='+ themesdipilih +'&namadomain=' + namadomain;
         
                  $.ajax({
              type  : "POST",
                  url: ""+parentUrl+"member/request_publish",
                  data: dataString,         
                  success : function(response){


                    var counter=3;
                    var countdown = setInterval(function(){
                    $("#countersec").html(counter);
                    if (counter == 0) {
                    clearInterval(countdown);
                    $('.loadingUpdate').html('');
                        if(response == 'berhasil') {

                            $('.subnonamedomain').fadeOut('slow');
                            $('.notifBerhasilterpublish').fadeIn('slow');
                
                        } else {
                            $('.subnonamedomain').fadeOut('slow');
                            $('.notifgagalterpublish').fadeIn('slow');
                        }
                    }
                    counter--;
                    }, 500);     
                                         
              }
            });

        });


         
         
          <?php if ($this->session->userdata('mode') == 'edit') { ?>
                $('#edit').attr('checked','checked');
                $('#view').attr('checked','');
          <?php } else { ?>
                $('#edit').attr('checked','');
                $('#view').attr('checked','checked');
          <?php } ?>    
         
         
         $('#btnThemes').click(function() {
            $('#btnThemes div').attr('id','themesActive');
            $('.boxThemesManager').toggle();
         });

         $('.pansg').click(function(){
            $('.listDropdown').fadeIn('fast');
            $('.pansg').attr('class','pansb');
         });

         $('.titleuser').click(function(){
            $('.listDropdown').fadeOut('fast');
            $('.pansb').attr('class','pansg');
         });

         $('.listDropdown').click(function(){
              $(this).fadeOut();
         });


             $('.nonamedomain').click(function(){
                  $('.nonamedomain').fadeOut('fast');
                  $('.namedomain').fadeOut('fast');
                  $('.subnonamedomain').fadeIn('slow');
             });

             $('.namedomain').click(function(){
                  $('.nonamedomain').fadeOut('fast');
                  $('.namedomain').fadeOut('fast');
                  $('.subnamedomain').fadeIn('slow');
             });


             

         
         });      
         </script>    
                

    
        
        
                
    </head>

       
<div class="sticky"></div>
    <div id="sticky"></div>
                
        <section class="panelTop">
            <div style="float: right;width:100%;padding-top: 0px;height:30px;">
                
                <div class="switch-toggle candy blue" style="width:100px;float:right;margin-right:10px;margin-left:10px;margin-top:2px;">
                    <input id="edit" name="mode" type="radio" checked="">
                    <label id="editmode" for="edit" >Edit</label>

                    <input id="view" name="mode" type="radio">	
                    <label id="viewmode" for="view">View</label>

                    <a></a>
                  </div>
                
                
                <ul class="btn-panelTop" style="width:205px;">
                    <li style="font-weight:bold;" data-modal="modal-18" class="md-trigger">PUBLISH</li>
                    <?php $attributes = array('class' => 'saveEditMode', 'id' => 'saveEditMode'); ?>
                    <?php echo form_open('page/savePageEdit/',$attributes);  ?>

                     <input type="hidden" name="idpengguna" value="<?php echo $this->session->userdata('user'); ?>" />
                     <input type="hidden" name="name_themes" value="<?php echo $this->session->userdata('themesActive'); ?>" />
                     <input type="hidden" class="name_pages" name="name_pages" />
                     <textarea  style="display: none;" class="content_themes" name="content_themes"></textarea>
                     <textarea  style="display: none;" class="content_head" name="head"></textarea>
                     <textarea  style="display: none;" class="content_foot" name="foot"></textarea>
                     <input type="submit" class="font3" style="font-size:11px;"   value="SAVE"  id="saveEditMode" />
                    
                    <?php echo form_close(); ?>
                </ul>

                


                 <div style="float:left;width:40px;margin-left:10px;margin-top:3px;">
                   <div style="float: left;margin-right: 14px;width:30px;height:30px;-webkit-border-radius: 50%; /* pemberian nilai radius bulat */-moz-border-radius: 50%;  border-radius: 50%;overflow: hidden;background: #333;" ><?php if($this->session->userdata('images1')=='') {  ?><img  src="<?php echo base_url();  ?>assets/pic/default.jpg" style="width:150px"  /><?php } ?><img  src="<?php echo $this->session->userdata('images1');  ?>" style="width:150px"  /></div>
                 </div>
                 <div class="titleuser" style="padding:5px;float:left;color:#fff;margin-top:3px;">Hi,<?php echo $this->session->userdata('username');  ?></div>
                 <div class="pansg"></div>
                 <div class="listDropdown">
                 <ul style="list-style:none;">
                   <li style="padding:3px" ><a href="http://localhost/project/themesintersweb/">Edit Profile</a></li>
                   <li style="padding:3px" ><a href="http://localhost/project/themesintersweb/">Themes</a></li>
                   <li style="padding:2px" ><a href="http://localhost/project/themesintersweb/">Logout</a></li>
                 </ul>
                 </div>

                <div class="icongrid"></div>
             
            </div>
        </section>
    
    
    
    <!-- /modal box Login -->
        <div class="md-modal md-effect-18" id="modal-18">
            <div class="md-content">
                <h3 style="padding:15px;">Tentukan Nama Domain</h3>
                <div class="container-form">
                <?php $attributest = array('class' => 'publishSite', 'id' => 'publishSite'); ?>
                <?php echo form_open('setting/publishSite/',$attributest); ?>
                  <table>
                    <tr>
                      <td><input type="text" name="domainname" id="domainname" placeholder="masukan nama websitenya"></td>
                      <td style="padding-left:7px;padding-right:7px;color:#666;">.intersweb.com</td>
                      <td><input type="submit" value="Proses" class="btn btn-success"></td>
                    </tr>
                  </table>
                <?php echo form_close(); ?>
                </div>
                
            </div>
        </div>
  

<div class="md-overlay"></div><!-- the overlay element -->    
    
   


        <script src="<?php echo base_url(); ?>assets/js/minify-modal/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/minify-modal/modalEffects.js"></script>
        <script>
            // this is important for IEs
            var polyfilter_scriptpath = '/assets/js/minify-modal/';
        </script>
        <script src="<?php echo base_url(); ?>assets/js/minify-modal/cssParser.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/minify-modal/css-filters-polyfill.js"></script>

        <script type="text/javascript">
            
            function DropDown(el) {
                this.dd = el;
                this.placeholder = this.dd.children('span');
                this.opts = this.dd.find('ul.dropdown > li');
                this.val = '';
                this.index = -1;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.dd.on('click', function(event){
                        $(this).toggleClass('active');
                       
                    });

                    
                },
                getValue : function() {
                    return this.val;
                },
                getIndex : function() {
                    return this.index;
                }
            }

            $(function() {

                var dd = new DropDown( $('#dd') );

                $(document).click(function() {
                    // all dropdowns
                    $('.wrapper-dropdown-1').removeClass('active');
                });

            });
            
        </script>   

</html>