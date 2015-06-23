
<script src="<?php echo base_url(); ?>assets/js/layout.js" type="text/javascript"></script>        
		<script src="<?php echo base_url(); ?>assets/js/shortable/jquery.sortable.js"></script>
		
			<script>
				$(function() {
					$('.sortable').sortable();
					$('.handles').sortable({
						handle: 'span'
					});
				});
			</script>
<?php $i = 1; ?>
<li data-href="home" listmenu="<?php echo $i ?>"><span><div class="icon-handler"></div></span>home<img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/list-addmenu.png" width="19px" height="19px" style="float: right;margin-right:7px" ></img></li> 
<?php foreach ($menu as $row ) { ?>   
    <li data-href="<?php echo $row->template_name; ?>" listmenu="<?php echo $i ?>"><span><div class="icon-handler"></div></span><?php echo $row->name_pages; ?><img src="<?php echo base_url(); ?>assets/pic/tools/sidebar/list-addmenu.png" width="19px" height="19px" style="float: right;margin-right:7px" ></img></li>
<?php $i++; ?>
<?php } ?>
