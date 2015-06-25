<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/themes/base/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/resize.css" />
<script src="<?php echo base_url(); ?>assets/js/dynamic_content.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/rullerguide/index.css" />

<?php if ($this->session->userdata('mode') == 'edit') { ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/js/popline/default.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/js/popline/font-awesome.min.css">
<?php } ?> 
        

                <script type="text/javascript">
                 $(document).ready(function() {
            
   
                   
                 <?php if ($this->session->userdata('mode') == 'edit') { ?>
                    //set layout mode grid edit
                    $('div').attr('mode','edit'); 
                        //set activeMenu Hover pada navigasi menu
                        if($('div[element=layout] .moveLayout').length) {
                        } else {
                            $('div[element=layout]').append('<div class="moveLayout"></div>');
                        }
                     //event ketika cursor mouse di arahkan ke element type layout
                        jQuery(document).on('mouseenter','div[element=layout]', function() {
                            if($(this).attr('resizelayout') == 'false') {
        
                             $(this).find( ".moveLayout" ).fadeIn('fast');
                            }
                        });
                        
                        $('div[element=layout]').mouseleave(function() {
                             if($(this).attr('resizelayout') != 'true') {
                                $(this).css({'border':'none'});
                             }
                             $(this).find( ".moveLayout" ).fadeOut('fast');
                        });
                        //event element layout sembarang di klik maka subsidebar terhide
                        jQuery('.body').on('click','div[resize=false]', function() {
                            $('.sub-sidebar').fadeOut('fast');
                        });
                 <?php } ?> 

                 });
              </script>



              <?php if ($this->session->userdata('mode') == 'edit') { ?>
                    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/resizeLayout.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/resizeElement.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/resizeSection.js"></script>
              <?php } ?>



              <style>
                  .popline li span {
                        width:30px;
                        margin-right:0px;
                        margin-top:0px;
                        background:none;
                        box-shadow: none;
                    }
                    
                    div[resize=false] {
                        padding:10px;
                    }

                    div[contenteditable=true] {
                        outline: none;
                    }
                    
                    div[resize=true] {
                        padding:10px;
                        -webkit-box-shadow:inset 0px 0px 0px 1px #ffffff !important;
                        box-shadow: inset 0px 0px 0px 1px #ffffff !important;
                    }

                    div[resizelayout=true] {
                        -webkit-box-shadow:inset 0px 0px 0px 1px #ffffff !important;
                        box-shadow: inset 0px 0px 0px 1px #ffffff !important;
                    }

                    section[resizelayout=true] {
                        -webkit-box-shadow:inset 0px 0px 0px 1px #ffffff !important;
                        box-shadow: inset 0px 0px 0px 1px #ffffff !important;
                    }

                    .bg {
                        position: fixed;
                    }

                    .bg .img {
                        width:1280px; 
                        min-height: 100vh;
                    }


                    .head {
                        border-bottom: 1px dashed #efefef;
                    }

                    .scrat {
                        border-left: 1px dashed #efefef;
                        border-right: 1px dashed #efefef;
                    }

                    .rg-overlay {
                        display:block;
                    }

                    .modal-backdrop, .modal-backdrop.fade.in {
                      opacity: 0.6;
                      z-index: 9999;
                    }
              </style>    
               