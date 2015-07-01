		<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.7.2.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/globalURL.js" type="text/javascript"></script>
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url();?>assets/js/bootstrap.js" type="text/javascript"></script>           
        <script src="<?php echo base_url(); ?>assets/js/jquery.hashchange.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.easytabs.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/sticky-jquery/sticky.full.js" type="text/javascript"></script>
        <link href="<?php echo base_url();?>assets/js/sticky-jquery/sticky.full.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/js/slimscroll/prettify.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/common.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dragable/lists.css"/>
        <script src="<?php echo base_url(); ?>assets/js/shortable/jquery.sortable.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/prettify.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.js"></script>                
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/minify-modal/default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/minify-modal/component.css" />
        <script src="<?php echo base_url(); ?>assets/js/minify-modal/modernizr.custom.js"></script> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/panelTop-style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/toggle-switch.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popline/jquery.popline.min.js"></script>


		<!-- /script load aviari ediot -->

        <script type="text/javascript" src="http://feather.aviary.com/js/feather.js"></script>    
        <script type="text/javascript">
          var featherEditor = new Aviary.Feather({
                apiKey: '3505fc68b41bb166',
                apiVersion: 3,
                displayImageSize: true,
                maxSize: 800,
                theme: 'minimum',
                tools: ['crop', 'orientation','enhance','effects','frames','brightness','contrast','saturation','warmth','focus','sharpness','draw','redeye','whiten','blemish','stickers','text'],
                onSave: function(imageID, newURL) {
                    var img = document.getElementById(imageID);
                    img.src = newURL;
                },
                onLoad: function(){
                    launchEditor(id, src, featherEditor);
                },  
                postUrl: 'http://example.com/featherposturl'
            });

            function launchEditor(id, src, editor) {
                featherEditor.launch({
                    image: id,
                    url: src
                });
                return false;
            }
        </script>


		
			<script type="text/javascript">
				$(document).ready(function() {
                        $('.menu ul li[initials=home]').attr('class','activeMenu');
					<?php if($this->session->userdata('mode') == 'edit') {  ?>	

						$('.paneltops').load(''+base_url+'layout/panelTop/');
						$('.panelleft').load(''+base_url+'layout/panelLeft/');

					<?php } else { ?>

						$('.paneltops').load(''+base_url+'layout/panelTop/');

					<?php } ?>

                    // even delete subsidebar        
    
                    $('.sub-sidebar').on('click','.drop-sidebar', function() {
                    $('.sub-sidebar').fadeOut('fast');
                    });
                    
                    $('.subsub-sidebar').on('click','.dropsub-sidebar', function() {
                    $('.subsub-sidebar').fadeOut('fast');
                    });

				});
			</script>

            <style type="text/css">
                .rg-overlay {
                    display: none;
                    height: 1px;
                }
            </style>


<div class="paneltops"></div>
<div class="panelleft"></div>

    
