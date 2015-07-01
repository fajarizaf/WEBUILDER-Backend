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