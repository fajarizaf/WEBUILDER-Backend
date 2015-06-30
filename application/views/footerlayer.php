<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/fakeloader/fakeLoader.min.js'></script>
        
        <script>
            $(document).ready(function(){
                $(".body").fakeLoader({
                    timeToHide:1200,
                    bgColor:"#2ecc71",
                    spinner:"spinner1"
                });
            });
        </script>