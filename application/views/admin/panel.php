
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/sidebar-style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/themes/base/jquery-ui.css" />
       
     
            
        <script type="text/javascript">
            $(function(){
                    $(".main-sidebar").load("<?php echo base_url(); ?>panel/sidebar");
                    $(".toolbar").load("<?php echo base_url(); ?>panel/toolbar");
		    
            });
            
            function loadSubsidebar(param) {
                $(".sub-sidebar").load("<?php echo base_url(); ?>panel/"+param+"");
            } 
            
            function loadSubsubsidebar(param) {
                $(".subsub-sidebar").load("<?php echo base_url(); ?>panel/"+param+"");
            } 
            
            
            
        </script>

    <div id="parentloading">
            <div class="font3" id="loading" style="font-weight: bold;">Loading...</div>
    </div>    
        
                <div class="toolbar"></div>
                <section class="main-sidebar"></section>
		        <div class="sub-sidebar"></div>
                <div class="subsub-sidebar"></div>
		



