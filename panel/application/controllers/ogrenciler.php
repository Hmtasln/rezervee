<?php 

class ogrenciler extends CI_Controller{

public function index(){

    
    $this->load->model("listeleme");
    $ogrenciler=$this->listeleme->ogrenciler();
    $data['ogrenciler']=$ogrenciler;
    
    
     $this->load->view('ogrenciler',$data);

}


}



 ?>