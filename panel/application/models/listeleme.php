<?php

class listeleme extends CI_MODEL {

public function ogretmenler ($where=array()){

return $this->db
->join('dersler','dersler.ID=Ders_No')
->where( $where)
->get('ogretmenler')
->result();



}
public function ogrenciler ($where=array()){

    return $this->db
    ->join('dersler','dersler.ID=DersID')
    ->where( $where)
    ->get('ogrenciler')
    ->result();
    
    
    
    }


}
?>