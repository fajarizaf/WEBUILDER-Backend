<?php ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

class Media_model extends CI_Model {


    function  __construct() {
        parent::__construct();
        $this->load->helper('form');
    }
    
    function UploadImage($param) {
        $catimages = $this->input->post('categoryimgmanageractive');
        $query1 = $this->db->query('select * from imagecategory where IdCategory="'.$catimages.'"');
        
        foreach ($query1->result() as $row ) {
        $data = array(
            "path" => $param,
            "ImageCategory_IdCategory" => $catimages,
        ); 
        }
        
        $query = $this->db->insert('imageupload',$data);
        if($query) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
        
    }
    
    function filterShowImages() {
         $category = $this->input->post('category');
            
            $this->db->where('ImageCategory_IdCategory',$category);
            $query = $this->db->select('imageupload');
    }
    
    function getImages() {
        $query = $this->db->query('select * from imageupload order by no desc');
        
        foreach ($query->result() as $row ) {
            $data[]  = array (
            'path' => $row->path,
            'categoryImage' => $row->ImageCategory_IdCategory
            );
        }
        echo json_encode($data);
    }
    
    
    function getImagesWhere($param) {
        $query = $this->db->query('select * from imageupload where ImageCategory_IdCategory="'.$param.'" order by no desc');
        
        foreach ($query->result() as $row ) {
            $data[]  = array (
            'path' => $row->path,
            'categoryImage' => $row->ImageCategory_IdCategory
            );
        }
        echo json_encode($data);
    }
    
    
     function getImages2() {
        $idImages = $this->input->post('category');
        
        $query = $this->db->query('select * from imageupload where ImageCategory_IdCategory="'.$idImages.'"');
        $query1 = $this->db->query('select * from imagecategory where IdCategory="'.$idImages.'"');
        
        if($query->num_rows() != 0 ) {
        foreach ($query->result() as $row ) {
            $data[]  = array (
            'path' => $row->path,
            'categoryImage' => $row->ImageCategory_IdCategory
            );
        }
        echo json_encode($data);
        }else{
            
            foreach ($query1->result() as $rew) {
            $data[]  = array (
            'idCategory' => $rew->category_name,
            'categoryImage' => $idImages,    
            'rows' => $query->num_rows()
            );
            }
            echo json_encode($data);
            
        }
    }
    
    
    
    function getIdCategory() {
            $q = $this->db->query("select MAX(RIGHT(IdCategory,5)) as kd_max from imagecategory ");
            foreach ( $q->result() as $row) :
            $tmp1 = $row->kd_max +1;
            $tmp = '0000' .$tmp1;  
            endforeach;
            return "img". $tmp;
    }
    
    function addfolderImge() {
        $category = $this->input->post('category');
        $data = array(
            "IdCategory" => $this->getIdCategory(),
            "category_name" => $category,
        );
        
        $query = $this->db->insert('imagecategory',$data);
        if($query) {
            echo "berhasil";
        } else {
            echo "gagal";
        }
        
        
    }
    
    
    function getCatImages() {
        $query = $this->db->query('select * from imagecategory');
        
        foreach ($query->result() as $row ) {
            $data[]  = array (
            'IdCategory' => $row->IdCategory,
            'category_name' => $row->category_name
            );
        }
        echo json_encode($data);
    }
    
    

}

?>