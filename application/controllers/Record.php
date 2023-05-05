<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Record extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('Report_Model');
}

public function index(){
$this->load->view('records');
}

public function Result(){
$fdate=$this->input->post('fromdate');
$tdate=$this->input->post('todate');

$rdata=$this->Report_Model->getreport($fdate,$tdate);
$this->load->view('reports',['reportdata'=>$rdata]);
}



}