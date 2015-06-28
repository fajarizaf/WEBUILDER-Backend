<?php ob_start(); ?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php

class Panel_model extends CI_Model {


    function  __construct() {
        parent::__construct();
        $this->load->helper('form');
    }
    
    
    
    function SavesettingText() {
        $fontfamily = $this->input->post('fontfamily');
        $fontcolor = $this->input->post('fontColor');
        $fontsize = $this->input->post('fontSize');
        $elementId = $this->input->post('elementId');
        $pages = $this->input->post('pages');
        $elementInit = $pages.'-'.$elementId;
        
        $settingValue = $fontfamily.','.$fontcolor.','.$fontsize;
        
        
        //Pengecekan Elment Id sudah terset di database apa belum
        $query = $this->db->query("select * from attributelementset where elementId='".$elementInit."'");
        
        
        
        if($query->num_rows() == 1) {
            $data = array (
                'settingValue' => $settingValue,
                'typeElement'  => 'text',
            );
            
                 $this->db->where('elementId',$elementInit);
            $q = $this->db->update('attributelementset',$data);
            
            
        } else {
            
            $data = array (
                'settingValue' => $settingValue,
                'typeElement'  => 'text',
                'elementId' => $elementInit,
            );
            
            $q = $this->db->insert('attributelementset',$data);
        }
        
        
    }
    
    
    
    
    function SavesettingButton() {
        
        $fontColor = $this->input->post('fontColor');
        $fontSize = $this->input->post('fontSize');
        $background = $this->input->post('background');
        $textColor = $this->input->post('textColor');
        $borderColor = $this->input->post('borderColor');
        $borderSize = $this->input->post('borderSize');
        $TopColor = $this->input->post('TopColor');
        $BottomColor = $this->input->post('BottomColor');
        $TypeLink = $this->input->post('TypeLink');
        $elementId = $this->input->post('init');
        $pages = $this->input->post('pages');
        $elementInit = $pages.'-'.$elementId;
        
        $settingValue = $fontColor.','.$background.','.$textColor.','.$borderColor.','.$borderSize.','.$TopColor.','.$BottomColor.','.$fontSize;
        
        
        //Pengecekan Elment Id sudah terset di database apa belum
        $query = $this->db->query("select * from attributelementset where elementId='".$elementInit."'");
        
        
        
        if($query->num_rows() == 1) {
            $data = array (
                'settingValue' => $settingValue,
                'typeElement'  => 'text',
                'TypeLink'     => $TypeLink
            );
            
                 $this->db->where('elementId',$elementInit);
            $q = $this->db->update('attributelementset',$data);
            
            
        } else {
            
            $data = array (
                'settingValue' => $settingValue,
                'typeElement'  => 'text',
                'elementId' => $elementInit,
                'TypeLink'     => $TypeLink
            );
            
            $q = $this->db->insert('attributelementset',$data);
        }
        
        
    }
    
    
    
    
    function editsettingText() {
        $elementId = $this->input->post('elementId');
        $query = $this->db->query("select * from attributelementset where elementId='".$elementId."'");
        return $query->result();
    }
    
    function editsettingButton() {
        $elementId = $this->input->post('elementId');
        $query = $this->db->query("select * from attributelementset where elementId='".$elementId."'");
        return $query->result();
    }

   
    
    
    

}

?>