<body>
<div class="body">
<section class="head" element="section" initSection="1" resizelayout="false">  
                        <div type="menu" element="content"  class="menu" style="cursor: move; position: absolute; left: 348px; top: 57px; width: 738px; height: 59px; z-index: 9;" mode="edit" resize="false"  init="14">
                            <ul class="default">                     
                                <li class="activeMenu" initials="home"><a href="<?php echo base_url() ?>page/show/home">Home</a></li>
                                <?php foreach ($menu as $row) { ?>   
                                <li initials="<?php echo $row->template_name; ?>"><a href="<?php echo base_url() ?>page/show/<?php echo $row->template_name ?> ?>"><?php echo $row->name_pages; ?></a></li>
                                <?php  }  ?>    
                            </ul>
                        </div>
</section>