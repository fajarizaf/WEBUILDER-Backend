<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('app_model');
        $this->load->model('media_model');
        }
    
    
        
        
        
	public function index() {
        if($this->session->userdata('username')) {
           $username = $this->session->userdata('username'); 

                // Request Data User dari app server dengan mengirimkan session username              
                $getUser = 'http://localhost/project/themesintersweb/member/getUser/'.$this->session->userdata('username').'/';

                                 $ch = curl_init( $getUser );
                                 $options = array(
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
                                 );
                                 curl_setopt_array( $ch, $options ); // Setting curl options
                                 $result =  curl_exec($ch); // Getting jSON result string
                                 $decode = json_decode($result, true);
                                 $themesActive = $decode['themes_dipilih'];
                                 $data['dataUser'] = $decode['username'];
                                 $data['themesDipilih'] = $decode['themes_dipilih'];
                                 $user = $decode['idusers'];
                           
                                $session_datas = array (
                                    'themesActive' => $themesActive,
                                    'user' => $user
                                    );              
                                $this->session->set_userdata($session_datas);
                
        
                                $this->load->view('themesLayer');
                                if($this->session->userdata('mode') == 'edit') {
                                   $this->load->view('admin/tools/loadReizeElement');
                                }
                                $this->load->view('temporary/'.$user.'/header');
                                $this->load->view('temporary/'.$user.'/head', $data);
                                $this->load->view('temporary/'.$user.'/home');
                                $this->load->view('temporary/'.$user.'/foot');
                                $this->load->view('footerlayer');
                            

            } else {
                redirect('http://localhost/project/themesintersweb/');
        }    
	}
        
        


        public function panelTop() {
                $this->load->view('admin/tools/panelTop');
                $data['categoryimages'] = $this->app_model->get_data('imagecategory');
                $path['ImageCategory_IdCategory'] = 'img000020';
                $data['databg'] = $this->app_model->getSelectedData('imageupload',$path); 
                $this->load->view('admin/tools/modal/imageManager',$data); 
        }




        public function panelLeft() {
                $this->load->view('admin/panel');
        }

        public function rullerguideActive() {     
                $this->load->view('admin/tools/footerloadReizeElement');
        }

        public function loadReizeElement() {
                $this->load->view('admin/tools/loadReizeElement');
        }


        

        public function pages(){
                $name_pages = $this->uri->segment(3);
                $themeActive = $this->session->userdata('themesActive');
                $users = $this->session->userdata('user');    
                $getPages = $this->app_model->getPages($name_pages,$themeActive,$users);

                
                    $where['id_users'] = $this->session->userdata('user');
                    $data['menu'] = $this->app_model->getSelectedData('pages', $where);
                            
                    if($getPages) {
                            if($this->session->userdata('mode') == 'edit') {
                                $this->load->view('admin/tools/loadReizeElement');
                            }
                        foreach ($getPages as $row ) { 
                            $this->load->view('temporary/'.$users.'/head', $data);
                            $this->load->view('temporary/'.$users.'/'.$row->template_name.'');
                            $this->load->view('temporary/'.$users.'/foot');
                        }
                    } else {
                            if($this->session->userdata('mode') == 'edit') {
                                $this->load->view('admin/tools/loadReizeElement');
                            }
                        $this->load->view('temporary/'.$users.'/head', $data);
                        $this->load->view('templates/'.$themeActive.'/home');
                        $this->load->view('temporary/'.$users.'/foot');
                    }

              
        }
        
        
        


        public function showscreenshoot() {
                        $name_themes = $this->uri->segment(3);
                         echo "<img src='".base_url()."templates/".$name_themes."/screenshot.png' width='300' />";
                   
        }   
        
        
        
       
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */