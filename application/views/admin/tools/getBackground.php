<?php foreach ($databackground as $row ) { ?>
<div values="<?php echo $row->path ?>" class="imagesThumbsBackground"><div style="width:65px;height:65px;background:url(<?php echo base_url() ?>upload/<?php echo $row->path ?>);"></div></div>
<?php } ?>