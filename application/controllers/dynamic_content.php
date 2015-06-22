<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dynamic_content extends CI_Controller {

        public function  __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('page_model');
        $this->load->model('app_model');
        }


        public function getMenu()
        {
        $where['id_users'] = $this->session->userdata('user');
        $data['menu'] = $this->app_model->getSelectedData('pages', $where);
            $this->load->view('Dynamic_content/getMenu',$data);
        }
         
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */