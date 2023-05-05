<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Time extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('Time_Model');
}

public function index(){
$this->load->view('time');
}
public function Result(){
$ftime=$this->input->post('fromtime');
$ttime=$this->input->post('totime');

$rdata=$this->Time_Model->getreport($ftime,$ttime);
$this->load->view('time_report',['reportdata'=>$rdata]);
}



}