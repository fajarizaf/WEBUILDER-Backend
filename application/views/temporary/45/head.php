<body>
<div class="body">
    <section class="head" element="section" initSection="1" resizelayout="false">  
        <div type="images" element="content" aria-disabled="false" style="cursor: move; position: absolute; top: 63px; left: 149px; width: 226px; background: none repeat scroll 0% 0% transparent; height: 68px;" mode="view" init="15" resize="false" class="column2">
            <img src="<?php echo base_url() ?>templates/motocross/pic/logo.png" width="100%">
        </div>
        <div type="menu" element="content"  class="menu" style="cursor: move; position: absolute; left: 443px; top: 69px; width: 633px; height: 53px;" mode="view" resize="false"  init="1">
            <ul class="default">                     
                <li initials="home" class="activemenu"><a href="<?php echo base_url() ?>page/show/home">Home</a></li>
                <?php foreach ($menu as $row) { ?>   
                <li initials="<?php if($row->template_name) { echo $row->template_name; } else { echo 'home'; } ?>"><a href="<?php echo base_url() ?>page/show/<?php echo $row->template_name ?> ?>"><?php echo $row->name_pages; ?></a></li>
                <?php  }  ?>    
            </ul>
        </div> 
      <div class="moveSection"></div>                      
</section>