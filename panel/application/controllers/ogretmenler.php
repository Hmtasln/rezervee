<?php 

class ogretmenler extends CI_Controller{

public function index(){

    
    $this->load->model("listeleme");
    $ogretmenler=$this->listeleme->ogretmenler();
    
    $data['ogretmenler']=$ogretmenler;

    
    $this->load->view('ogretmenler',$data);


}


}



 ?>