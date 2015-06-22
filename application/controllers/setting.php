<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('form','url','html');
        $this->load->helper('file');
        $this->load->model('app_model');
         $this->load->model('media_model');
         $this->load->library('Cpanel_Api');
        }
    
    
	public function viewMode()
	{
		$data = array (
                  'mode' => 'view'  
                );
                $this->session->set_userdata($data);
                redirect('layout');
	}



    public function publishSite() {
      $subdomain = $this->input->post('domainname');
      $cpanelusr = 'k4083239';
      $cpanelpass = 'dlanet2013';
      $xmlapi = new xmlapi('127.0.0.1');
      $xmlapi->set_port( 2083 );
      $xmlapi->password_auth($cpanelusr,$cpanelpass);
      $xmlapi->set_debug(1); //output actions in the error log 1 for true and 0 false 
      $result = $xmlapi->api1_query($cpanelusr, 'SubDomain', 'addsubdomain', array($subdomain,'demo-af.webdev.dlanet.com',0,0, '/public_html'.'/'.$subdomain));

      $ftp_server = "demo-af.webdev.dlanet.com";
      $ftp_user_name="k4083239";
      $ftp_user_pass="dlanet2013";
      $file = "./coba/";//tobe uploaded
      $remote_file = "./www/".$subdomain."/";

        // set up basic connection
        $conn_id = ftp_connect($ftp_server);
        // login with username and password
        $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
        // proses move temporary template ke subdomain
        $this->ftp_putAll($conn_id, $file, $remote_file);
        // close the connection
        ftp_close($conn_id);
    }


      function ftp_putAll($conn_id, $src_dir, $dst_dir) {
      $d = dir($src_dir);
      while($file = $d->read()) { // do this for each file in the directory
          if ($file != "." && $file != "..") { // to prevent an infinite loop
              if (is_dir($src_dir."/".$file)) { // do the following if it is a directory
                  if (!@ftp_chdir($conn_id, $dst_dir."/".$file)) {
                      ftp_mkdir($conn_id, $dst_dir."/".$file); // create directories that do not yet exist
                  }
                  $this->ftp_putAll($conn_id, $src_dir."/".$file, $dst_dir."/".$file); // recursive part
              } else {
                  $upload = ftp_put($conn_id, $dst_dir."/".$file, $src_dir."/".$file, FTP_BINARY); // put the files
              }
          }
      }
      $d->close();
      }

        
        public function editMode() {
                $data = array (
                  'mode' => 'edit'  
                );
                $this->session->set_userdata($data);
        }
        
        
        public function UploadImage() {
            if(!empty($_FILES['btnAddImages']['name']))
		{
                $nama_file = $_FILES['btnAddImages']['name'];
                $upload = move_uploaded_file($_FILES['btnAddImages']['tmp_name'], 'upload/'.$nama_file);
                
                $this->media_model->UploadImage($nama_file);
                
                }
        }
        
        public function getImages() {
            $this->media_model->getImages();
        }
        
        public function getImagesWhere() {
            $param = $this->uri->segment(3);
            $this->media_model->getImagesWhere($param);
        }
        
        public function getImages2() {
            $this->media_model->getImages2();
        }
        
        public function getCatImages() {
            $this->media_model->getCatImages();
        }
        
        
        public function addfolderImge() {
            $this->media_model->addfolderImge();
        }


        public function filterShowImages() {
           $this->media_model->filterShowImages();
            
        }
        
        
       
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */