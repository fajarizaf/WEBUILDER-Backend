
<script type="text/javascript">
 $(document).ready(function() {
     
      $('.toolbar').on('click','.toolbar-pages', function() {
          $(".main-sidebar").fadeIn('fast');
          $(".main-sidebar").load("<?php echo base_url(); ?>panel/sidebarPages");
          $(this).css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-pages-hover.png")'});
          $('.toolbar-setting').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-setting.png")'});
          $('.toolbar-add').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-add.png")'});
          $('.toolbar-appearences').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-appearence.png")'});
      });
  
 
      $('.toolbar').on('click','.toolbar-add', function() {
          $(".main-sidebar").fadeIn('fast');
          $(".main-sidebar").load("<?php echo base_url(); ?>panel/sidebarAdd");
          $('.toolbar-add').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-add-hover.png")'});
          $('.toolbar-pages').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-pages.png")'});
          $('.toolbar-setting').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-setting.png")'});
          $('.toolbar-appearences').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-appearence.png")'});
      });


      $('.toolbar').on('click','.toolbar-appearences', function() {
      $(".main-sidebar").fadeIn('fast');
      $(".main-sidebar").load("<?php echo base_url(); ?>panel/sidebarBackground");
      
      $(this).css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-appearence-hover.png")'});
      $('.toolbar-pages').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-pages.png")'});
      $('.toolbar-setting').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-setting.png")'});
      $('.toolbar-add').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-add.png")'});

                              var counter=0;
                                var countdown = setInterval(function(){
                                if (counter == 0) {
                                clearInterval(countdown);
                                
                                         $.ajax({
                                         type : "POST",
                                         url: "<?php echo base_url(); ?>panel/getBackground",
                                         success  : function(response){
                                                            
                                                 $('#listBackgroundsTemplates').html(response);     

                                         }
                                         });
                                         return false;
                                
                                }
                                counter--;
                                }, 500);    


  });
  
  
  
  
  
  
  $('.toolbar').on('click','.toolbar-setting', function() {
      $(".main-sidebar").fadeIn('fast');
      $(".main-sidebar").load("<?php echo base_url(); ?>panel/sidebarSetting");
      
      $(this).css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-setting-hover.png")'});
      $('.toolbar-pages').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-pages.png")'});
      $('.toolbar-add').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-add.png")'});
      $('.toolbar-appearences').css({'background':'url("<?php echo base_url(); ?>assets/pic/tools/sidebar/toolbar-appearence.png")'});
  });
  
  
  
  
 });
    
</script>    

<div class="toolbar-x"></div>
<div  class="toolbar-pages"></div>
<div  class="toolbar-appearences"></div>
<div class="toolbar-add"></div>
<div class="toolbar-setting"></div>