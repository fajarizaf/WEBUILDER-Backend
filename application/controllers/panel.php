<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('app_model');
        $this->load->model('panel_model');
        $this->load->helper('directory');
        $this->load->helper("file");
        }
    
    
        
  public function sidebarPages()
	{
    $where['id_users'] = $this->session->userdata('user');
    $data['menu'] = $this->app_model->getSelectedData('pages', $where);
		$this->load->view('admin/tools/sidebarPages',$data);
	}
        
        public function sidebarAdd()
	{
		$this->load->view('admin/tools/sidebarAdd');
	}

        public function sidebarBackground()
  {
    $this->load->view('admin/tools/sidebarBackground');
  }
        
         public function sidebarSetting()
	{
		$this->load->view('admin/tools/sidebarSetting');
	}

        public function toolbar()
	{
		$this->load->view('admin/tools/toolbar');
	}
        
        public function addPage()
	{
		$this->load->view('admin/tools/subsidebar/addPage');
	}
        
        public function settingText()
	{
		$this->load->view('admin/tools/subsidebar/settingText');
	}
        
      //load panel subsubsidebar
        
        public function LinkTo()
	{
		$this->load->view('admin/tools/subsubsidebar/LinkTo');
	}
        
        public function ChangeStyleButton()
	{
		$this->load->view('admin/tools/subsubsidebar/ChangeStyleButton');
	}
        
        public function ChangeStyleMenu()
	{
		$this->load->view('admin/tools/subsubsidebar/ChangeStyleMenu');
	}
        
        
        
            public function SavesettingText()
            {
                    $this->panel_model->SavesettingText();
            }
            
            public function AddsettingText()
            {
                    $this->panel_model->AddsettingText();
            }
            
            
            
            public function editsettingText()
            {
                  $query =  $this->panel_model->editsettingText();
                  
              if($query) {
                  foreach ( $query as $key ) {
                      $settingValue = explode(',', $key->settingValue );
  
                      
                      $data = array (
                        "fontFamily" => $settingValue[0],
                        "fontColor" => $settingValue[1],
                        "fontSize" => $settingValue[2],
                      );
                  
                   echo json_encode($data);
                  
              }
                  
            
            } else {
              echo "null";  
            }
           }
           
           
           
           public function editsettingButton()
            {
                  $query =  $this->panel_model->editsettingButton();
                  
              if($query) {
                  foreach ( $query as $key ) {
                      $settingValue = explode(',', $key->settingValue );
              
                      $data = array (
                        "fontFamily" => $settingValue[0],
                        "fontColor" => $settingValue[1],
                        "fontSize" => $settingValue[2],
                      );
                  
                   echo json_encode($data);
                  
              }
                  
            
            } else {
              echo "null";  
            }
           }



           public function getBackground() {
              $where['ImageCategory_IdCategory'] = 'img000020';
              $data['databackground'] = $this->app_model->getSelectedData('imageupload',$where);

              $this->load->view('admin/tools/getBackground',$data);
           }
           
           
           
        public function settingButton()
	{
		$this->load->view('admin/tools/subsidebar/settingButton');
	}
        
        public function settingMenu()
	{
		$this->load->view('admin/tools/subsidebar/settingMenu');
	}
        
        public function SavesettingButton()
            {
                    $this->panel_model->SavesettingButton();
            }
            
        public function listDragMenu()
	{
                $data['menu'] = $this->app_model->get_data('pages_layout');
		$this->load->view('admin/tools/listDragMenu',$data);
	}
        
        public function selectListMenu()
	{
    $where['id_users'] = $this->session->userdata('user');  
    $data['menu'] = $this->app_model->getSelectedData('pages',$where);
		$this->load->view('admin/tools/selectListMenu',$data);
	}
        
        
        public function settingLayout()
	{
		$this->load->view('admin/tools/subsidebar/settingLayout');
	}

        public function settingGambar()
  {
    $this->load->view('admin/tools/subsidebar/settingGambar');
  }


  public function getAlbum()
  {
      $dirupload = directory_map('upload/myupload/'.$this->session->userdata('user'));

        // menampilkan folder apabila ada folder
          $i = 1;
          foreach ($dirupload as $dir => $file) { ?>
            <?php if(!is_numeric($dir)) {  ?>
              <li data="<?php echo $i; ?>" class="list-modalfolderImg" style="font-size:13px;" data-link="<?php echo $dir ?>"><?php echo $dir ?></li>
            <?php } ?> 
          <?php 
          $i++;
          }   
  }


  public function getFileImages()
  {
      $dirupload = directory_map('upload/myupload/'.$this->session->userdata('user'));

        //menampilkan file apabila ada file
          $i = 1;
          foreach ($dirupload as $dir => $file) { ?>
            <?php if(is_numeric($dir)) {  ?>
              <div  data-box="TOP<?php echo $i; ?>" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                <div album="" class="imagesThumbsFileMedia" cheked="false">
                  <img class="<?php echo $file; ?>" src="<?php echo base_url(); ?>upload/myupload/<?php echo $this->session->userdata('user'); ?>/<?php echo $file; ?>"  />
                  <div class="hoverefect">
                    <div class="deleteImageMedia"></div>
                    <div class="titlelabelmedia"><?php echo $file; ?></div>
                  </div>
                </div>  
              </div>
            <?php $i++; ?>  
            <?php } ?>      
            <?php 
        }   
  }


  public function getImagesbyAlbum() {
      $album = $this->input->post('category');
      $dirupload = directory_map('upload/myupload/'.$this->session->userdata('user').'/'.$album.'/');

        //menampilkan file apabila ada file
          $i = 1;
          foreach ($dirupload as $dir => $file) { ?>
            <?php if(is_numeric($dir)) {  ?>
              <div  data-box="TOP<?php echo $i; ?>" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                <div album="<?php echo $album;  ?>" class="imagesThumbsFileMedia" cheked="false">
                  <img class="<?php echo $file; ?>" src="<?php echo base_url(); ?>upload/myupload/<?php echo $this->session->userdata('user'); ?>/<?php echo $album ?>/<?php echo $file; ?>"  />
                  <div class="hoverefect">
                    <div class="deleteImageMedia"></div>
                    <div class="titlelabelmedia"><?php echo $file; ?></div>
                  </div>
                </div>  
              </div>
            <?php $i++; ?>  
            <?php } ?>      
            <?php 
        } 
  }










  public function getAlbumstock()
  {
      $dirupload = directory_map('upload/stock/');

        // menampilkan folder apabila ada folder
          $i = 1;
          foreach ($dirupload as $dir => $file) { ?>
            <?php if(!is_numeric($dir)) {  ?>
              <li data="<?php echo $i; ?>" class="list-modalfolderImg" style="font-size:13px;" data-link="<?php echo $dir ?>"><?php echo $dir ?></li>
            <?php } ?> 
          <?php
          $i++;
          }   
  }


  public function getFileImagesstock()
  {
      $dirupload = directory_map('upload/stock/'.$this->uri->segment(3));
      $defaultalbum = $this->uri->segment(3);
        //menampilkan file apabila ada file
          $i = 1;
          foreach ($dirupload as $dir => $file) { ?>
            <?php if(is_numeric($dir)) {  ?>
              <div  data-box="TWO<?php echo $i; ?>" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                <div album="<?php echo $defaultalbum;  ?>" class="imagesThumbsFileMedia" cheked="false">
                  <img class="<?php echo $file; ?>" src="<?php echo base_url(); ?>upload/stock/<?php echo $defaultalbum; ?>/<?php echo $file; ?>"  />
                  <div class="hoverefect">
                    <div class="deleteImageMedia"></div>
                    <div class="titlelabelmedia"><?php echo $file; ?></div>
                  </div>
                </div>  
              </div>
            <?php $i++; ?>  
            <?php } ?>      
            <?php 
        }   
  }


  public function getImagesbyAlbumstock() {
      $album = $this->input->post('category');
      $dirupload = directory_map('upload/stock/'.$album.'/');

        //menampilkan file apabila ada file
          $i = 1;
          foreach ($dirupload as $dir => $file) { ?>
            <?php if(is_numeric($dir)) {  ?>
              <div  data-box="TWO<?php echo $i; ?>" class="panelImge" style="float:left;margin-left:10px;margin-right:10px;margin-bottom: 10px;margin-top: 10px;">
                <div album="<?php echo $album;  ?>" class="imagesThumbsFileMedia" cheked="false">
                  <img class="<?php echo $file; ?>" src="<?php echo base_url(); ?>upload/stock/<?php echo $album ?>/<?php echo $file; ?>"  />
                  <div class="hoverefect">
                    <div class="deleteImageMedia"></div>
                    <div class="titlelabelmedia"><?php echo $file; ?></div>
                  </div>
                </div>  
              </div>
            <?php $i++; ?>  
            <?php } ?>      
            <?php 
        } 
  }


        
        
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */