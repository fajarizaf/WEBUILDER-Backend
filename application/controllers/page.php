<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('page_model');
        $this->load->model('app_model');
        }


        public function show(){
            
                $name_pages = $this->uri->segment(3);
                $themeActive = $this->session->userdata('themesActive');
                $users = $this->session->userdata('user');
                
                $checkSetupThemes = $this->app_model->checkSetupThemes($name_pages,$themeActive,$users);
                
                if($checkSetupThemes == 1 ) {

                    $this->load->view('templates/'.$themeActive.'/header');
                    $this->load->view('temporary/'.$users.'-'.$name_pages.'');

                } else {
                 
                    $this->load->view('admin/tools/loadReizeElement');
                    $this->load->view('templates/'.$themeActive.'/header');
                    $this->load->view('templates/'.$themeActive.'/home');
                    
                }
        }
    
        
        public function savePageEdit() {
            $this->page_model->savePageEdit();
        }

        public function addPage() {
        	$this->page_model->addPage();
        }
         
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */