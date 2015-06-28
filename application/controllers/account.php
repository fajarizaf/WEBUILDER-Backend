<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('form','url','html');
        $this->load->model('app_model');
         $this->load->model('media_model');
         $this->load->library('encrypt');
         $this->load->helper('file');
         $this->load->helper('directory');
        }
    
    
	

    public function setSessionRegister() {
        $username = $this->uri->segment(3);
        $idpengguna = $this->uri->segment(4);
        $name_themes = $this->uri->segment(5);

            $session_data = array (
            'username' => $username,
            );
                      
        $this->session->set_userdata($session_data);
        $dir = './application/views/temporary/'.$idpengguna.'/';

        //jika temporary template belum tercreate maka create baru
        if(!is_dir($dir)) {
        //membaca isi file themes untuk di create baru di folder temporary
                $header = read_file('./application/views/templates/'.$name_themes.'/header.php');
                $head = read_file('./application/views/templates/'.$name_themes.'/head.php');
                $home = read_file('./application/views/templates/'.$name_themes.'/home.php');
                $pages = read_file('./application/views/templates/'.$name_themes.'/page.php');
                $foot = read_file('./application/views/templates/'.$name_themes.'/foot.php');

                $rootheader = './application/views/temporary/'.$idpengguna.'/header.php';
                $roothead = './application/views/temporary/'.$idpengguna.'/head.php';
                $roothome = './application/views/temporary/'.$idpengguna.'/home.php';
                $rootpage = './application/views/temporary/'.$idpengguna.'/page.php';
                $rootfoot = './application/views/temporary/'.$idpengguna.'/foot.php';

                //create directory themes baru di folder temporary bila belum ada
                if (!is_dir('application/views/temporary/'.$idpengguna)) {
                    mkdir('./application/views/temporary/'.$idpengguna, 0775, true);
                }

                // menulis file di directory themes baru di folder temporary
                write_file($rootheader, $header, 'wb');
                write_file($roothead, $head, 'wb');
                write_file($roothome, $home, 'wb');
                write_file($rootpage, $pages, 'wb');      
                write_file($rootfoot, $foot, 'wb');


            mkdir('./application/views/temporary/'.$idpengguna.'/css', 0775, true);
            mkdir('./application/views/temporary/'.$idpengguna.'/pic', 0775, true);
            $this->copyr('./templates/motocross/css/', './application/views/temporary/'.$idpengguna.'/css');
            $this->copyr('./templates/motocross/pic/', './application/views/temporary/'.$idpengguna.'/pic');

            // create directory temporary upload    
            $this->copyr('./upload/folder/', './upload/myupload/');
            rename('./upload/myupload/folder/','./upload/myupload/'.$idpengguna.'/');

         }   

        redirect('layout');

    }


    public function setSessionLogin() {
        $username = $this->uri->segment(3);
        $decrypted_username = $this->encrypt->decode($username);

            $session_data = array (
            'username' => $username,
            );             
             
        $this->session->set_userdata($session_data);
        redirect('http://localhost/project/themesintersweb/');
    }
    
    
    public function copyr($source, $dest)
    {
        // recursive function to copy
        // all subdirectories and contents:
        if(is_dir($source)) {
            $dir_handle=opendir($source);
            $sourcefolder = basename($source);
            mkdir($dest."/".$sourcefolder);
            while($file=readdir($dir_handle)){
                if($file!="." && $file!=".."){
                    if(is_dir($source."/".$file)){
                        self::copyr($source."/".$file, $dest."/".$sourcefolder);
                    } else {
                        copy($source."/".$file, $dest."/".$file);
                    }
                }
            }
            closedir($dir_handle);
        } else {
            // can also handle simple copy commands
            copy($source, $dest);
        }
    }


    
        
       
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */