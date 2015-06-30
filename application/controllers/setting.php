<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('form','url','html');
        $this->load->helper('file');
        $this->load->model('app_model');
         $this->load->model('media_model');
         $this->load->library('Cpanel_Api');
         $this->load->helper('directory');
        }
    
    
	public function viewMode()
	{
		$data = array (
                  'mode' => 'view'  
                );
                $this->session->set_userdata($data);
                redirect('layout');
	}

    function strReplaceAssoc(array $replace, $subject) {
        return str_replace(array_keys($replace), array_values($replace), $subject);   
    } 


    function generatedTemporarytemplates($user) {
      $themes = $this->session->userdata('themesActive');
      $dirupload = directory_map('application/views/temporary/'.$user.'/');
        //menampilkan file apabila ada file
          $i = 1;
          foreach ($dirupload as $dir => $file) { ?>
            <?php if(is_numeric($dir)) { 
            
              $replace = array(
              "http://editor.intersweb.com/templates/".$themes."/" => "",
              "http://editor.intersweb.com/upload/stock/" => "pic/",
              "http://editor.intersweb.com/upload/myupload/".$user."/" => "pic/",
              ); 

              $head = read_file('./application/views/temporary/'.$user.'/'.$file);
              $new_var = $this->strReplaceAssoc($replace,$head);

                if (!is_dir('./application/views/generatedtemplate/'.$user.'/')) {
                    mkdir('./application/views/generatedtemplate/'.$user.'/');         
                }

              $roothead = './application/views/generatedtemplate/'.$user.'/'.$file;
              write_file($roothead, $new_var, 'wb');


             $i++; ?>  
            <?php } ?>      
            <?php 
        }

    }


    public function publishSite() {
      $user = $this->session->userdata('user');
      $subdomain = $this->input->post('domainname');
      $cpanelusr = 'k4675598';
      $cpanelpass = '5nTQ347nbd';
      $xmlapi = new xmlapi('127.0.0.1');
      $xmlapi->set_port( 2083 );
      $xmlapi->password_auth($cpanelusr,$cpanelpass);
      $xmlapi->set_debug(1); //output actions in the error log 1 for true and 0 false 
      $result = $xmlapi->api1_query($cpanelusr, 'SubDomain', 'addsubdomain', array($subdomain,'intersweb.com',0,0, '/public_html'.'/'.$subdomain));

      $this->generatedTemporarytemplates($user);

      $ftp_server = "intersweb.com";
      $ftp_user_name="k4675598";
      $ftp_user_pass="5nTQ347nbd";
      $file = "./application/views/temporary/".$user."/";//tobe uploaded
      $remote_file = "./www/".$subdomain."/";

      $upload = "./upload/myupload/".$user."/";//tobe uploaded
      $remote_upload = "./www/".$subdomain."/pic";

      $generated = "./application/views/generatedtemplate/".$user."/";//tobe uploaded
      $remote_generated = "./www/".$subdomain."/";

        // set up basic connection
        $conn_id = ftp_connect($ftp_server);
        // login with username and password
        $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
        // proses move temporary template ke subdomain
        $this->ftp_putAll($conn_id, $file, $remote_file);
        // proses move temporary upload ke subdomain
        $this->ftp_putAll($conn_id, $upload, $remote_upload);
        // proses move temporary template ke subdomain
        $this->ftp_putAll($conn_id, $generated, $remote_generated);
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
          $category = $this->input->post('categoryImages');
          $user = $this->session->userdata('user');
            if(!empty($_FILES['btnAddImages']['name']))
		    {
                $nama_file = $_FILES['btnAddImages']['name'];
                $upload = move_uploaded_file($_FILES['btnAddImages']['tmp_name'], 'upload/myupload/'.$user.'/'.$category.'/'.$nama_file);
                $destFile = base_url().'/upload/myupload/'.$user.'/'.$category.'/'.$nama_file;
                chmod($destFile . $nama_file, 777);
                }
        }


        public function moveImage() {
          $category = $this->input->post('categoryImages');
          $user = $this->session->userdata('user');
          $album = $this->input->post('album');
          $name = $this->input->post('name');

                //proses move berkas file pdf
                mkdir("./upload/myupload/".$user."/".$album."/");
                copy("./upload/stock/".$album."/".$name."","./upload/myupload/".$user."/".$album."/".$name."");
        }
        
        public function getImages() {
            $this->media_model->getImages();
        }
        
        public function getImagesWhere() {
            $param = $this->uri->segment(3);
            $this->media_model->getImagesWhere($param);
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