<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Report_Model extends CI_Model {



public function getreport($fdate,$tdate){
$this->db->select('*');
$this->db->from('visitor');
$this->db->where('Date', $fdate);
$this->db->or_where('Date', $tdate);
$this->db->or_where("Date between '$fdate' and '$tdate'");
$query=$this->db->get();
                 
return $query->result();  
}



}
