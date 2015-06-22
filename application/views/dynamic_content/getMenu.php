                            <li initials="home"><a href="<?php echo base_url() ?>page/show/home">Home</a></li>
                            <?php foreach ($menu as $row) { ?>   
                              <li <?php if($this->uri->segment(3) == $row->name_pages ) { echo 'class="activeMenu"'; } ?> initials="<?php echo $row->name_pages ?>"><a href="<?php echo base_url() ?>page/show/<?php echo $row->name_pages ?> ?>"><?php echo $row->name_pages; ?></a></li>
                            <?php  }  ?> 