<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Textflow  {

    
    function  __construct() {
        $CI =& get_instance();
	      $this->instan = $CI;
    }
    
    
function delchart($parameter) {
      
   $nama= str_replace("-"," ", $parameter);
   return $nama;

}

function addchart($parameter) {
      
   $nama= str_replace(" ","-", $parameter);
   
   return $nama;

}


function kirim() {
    $this->email->from('anonym@dimensiprima.com', 'dimensiprima');
                                $this->email->to('fajarizaf@gmail.com'); 
                                $this->email->cc('fajarizaf@yahoo.com'); 
                                $this->email->bcc('fajarizaf@yahoo.com');
                                $this->email->subject('Test Emailasdasd111111');
                                $this->email->message('Mari Belajar Pintar PHPasdasd11111.');  
                                $this->email->send();
}


function dellAllChar($string) {
    $getArray = array('-','.',',','/','?','(',')','@','&','%','^','!');
    $repelace = str_replace($getArray,'',$string);
    return $repelace;
}

function dellstriptag($string) {
    $repelace = str_replace('-',' ', $string);
    return $repelace;
}





















}
?>