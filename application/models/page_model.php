<?php ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

class Page_model extends CI_Model {


    function  __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('directory');
        $this->load->helper('file');
        $this->load->library('textflow');
    }
    
    private $table_name = 'page_layout';
    
    
    
    public function getThemeActive($database) {
                $data1 =  $this->db->query('select * from '.$database.' where status="active"  ');              
                foreach ($data1->result() as $cont ) {
                $id_theme = $cont->id_theme;
                }
                return $id_theme;
        }
    
    
    public function savePageEdit() {
        $idpengguna = $this->session->userdata('user');
        $name_themes = $this->input->post('name_themes');
        $content_themes = $this->input->post('content_themes');
        $head = $this->input->post('head');
        $foot = $this->input->post('foot');
        $name_pages = $this->input->post('name_pages');

         // templating name
        $data2 = explode (' ' , $this->textflow->dellAllChar($name_pages) );
        $template_names = implode ('-', $data2);

        $cekfiles = $this->db->query('select * from pages where id_users="'.$idpengguna.'" and name_pages="'.$name_pages.'"');
        if($cekfiles->num_rows() == 1) {
            $cekfiles = $this->db->query('update pages set name_pages="'.$name_pages.'", template_name="'.$template_names.'" where id_users="'.$idpengguna.'" ');
        } else {
            $datainsert = array(
                'theme' => $this->session->userdata('themesActive'),
                'name_pages' => $name_pages,
                'id_users' => $idpengguna,
                'template_name' => $template_names,
                );

            $query = $this->db->insert('pages',$datainsert);
        }   

        $roothead = './application/views/temporary/'.$idpengguna.'/head.php';
        $rootfile = './application/views/temporary/'.$idpengguna.'/'.$name_pages.'.php';
        $rootfoot = './application/views/temporary/'.$idpengguna.'/foot.php';

        unlink($roothead);
        unlink($rootfile);
        unlink($rootfoot);    

        write_file($roothead, $head, 'wb');
        write_file($rootfile, $content_themes, 'wb');
        write_file($rootfoot, $foot, 'wb');

        echo "Berhasil";
        
    }


    public function addPage() {
        $themesActive = $this->session->userdata('themesActive');
        $idusers = $this->session->userdata('user');
        $name_pages = $this->input->post('templatespageslay');
        $title_pages = $this->input->post('name_pages');

        // templating name
        $data2 = explode (' ' , $this->textflow->dellAllChar($title_pages) );
        $template_names = implode ('-', $data2);

                //membaca isi file themes untuk di create baru di folder temporary
                $head = read_file('./application/views/templates/'.$themesActive.'/head.php');
                $pages = read_file('./application/views/templates/'.$themesActive.'/page.php');
                $foot = read_file('./application/views/templates/'.$themesActive.'/foot.php');


                //cek apakah pages denga sudah tercreate sebelumnya apa belum ( mencegah duplikasi )
                $cekpages = $this->db->query('select * from pages where id_users="'.$idusers.'" and name_pages="'.$title_pages.'"');                
                $roothead = './application/views/temporary/'.$idusers.'/head.php';
                $rootfile = './application/views/temporary/'.$idusers.'/'.$template_names.'.php';
                $rootfoot = './application/views/temporary/'.$idusers.'/foot.php';


                if ($cekpages->result()) {             

                            $result = array(
                            'status' => 'gagal'
                            );
                            echo '{"result":'.json_encode($result).'}';

                } else {
                            

                            $data = array(
                                'theme' => $themesActive,
                                'name_pages' => $title_pages,
                                'id_users' => $idusers,
                                'template_name' => $template_names,
                            );
                               
                            $this->db->insert('pages', $data); 
                            $query =  $this->db->query('select * from templatepageslayout where name_pages="'.$name_pages.'"  ');

                            // menulis file di directory themes baru di folder temporary
                            write_file($roothead, $head, 'wb');
                            write_file($rootfile, $pages, 'wb');      
                            write_file($rootfoot, $foot, 'wb');    


                            if($query) {
                                foreach ($query->result() as $row) {
                                    $content_pages = $row->content_pages;
                                    $result = array(
                                    'content_pages' => $content_pages,
                                    'template_pages' => $template_names,
                                    'status' => 'success'
                                    );
                                    echo '{"result":'.json_encode($result).'}';
                                }
                            }


                }

                        
                    

             

                

    }


    

}

?>