<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Time_Model extends CI_Model {



public function getreport($ftime,$ttime){
$this->db->select('*');
$this->db->from('visitor');
$this->db->where('Entrytime', $ftime);
$this->db->or_where('Entrytime', $ttime);
$this->db->or_where("Entrytime between '$ftime' and '$ttime'");
$query=$this->db->get();
                 
return $query->result();  
}


}
