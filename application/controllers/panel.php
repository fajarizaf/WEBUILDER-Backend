<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('app_model');
        $this->load->model('panel_model');
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
                $data['menu'] = $this->app_model->get_data('pages_layout');
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


        
        
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */