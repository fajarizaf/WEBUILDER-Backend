$(document).ready(function(){

   function disabledResize(inizial) {
         $(inizial).removeClass('ui-resizable');
         $(inizial).removeClass('ui-draggable');
         
     } 
   
   // mendisable seluruh element mode edit
   function disableResizeElements() {
                // disabled element resize yang tidak terpilih
              $('.content div[resize=true]').attr('resize','false');

              $('.content div[resize=false]').css(
                             {'border':'none',
                              'cursor':'default',
                              'padding':'0px'
                             });


             disabledResize('.content div[resize=false]');
             $('.content div[resize=false] .btnDeleteResize').hide('fast');
             $('.content div[resize=false] .ui-resizable-handle').remove();
             $('.content div[resize=false] .btnmenuWidget').fadeOut('fast');

             $('.content div[resize=false]').removeAttr('contenteditable');
             $('.content div[resize=false]').draggable({ disabled: false });
   }



   // efek menambahkan efect menu saat di visit
   jQuery(document).on('click','#listpage li', function() { 
      $('#listpage li').removeAttr('class'); 
      $(this).addClass('visitedmenus');
   });
   
   
   // event menu link panel di click 
        jQuery(document).on('click','#listpage li', function() {
           var titlemenu = $(this).attr('data-href');
           $('.body').load(''+base_url+'layout/pages/'+titlemenu+'').hide().fadeIn('slow');

           var counter=0;
                var countdown = setInterval(function(){
                $("#countersec").html(counter);
                if (counter == 0) {
                  clearInterval(countdown);

                  $('.menu ul .activeMenu').removeClass('activeMenu');
                  $('.menu ul li[initials='+titlemenu+']').addClass('activeMenu');

                  }
                counter--;
                }, 500);

	      });
});
