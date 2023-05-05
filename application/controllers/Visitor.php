<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Visitor extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model( 'Visitor_Model' );
    }
    public function index(){
        $data['data']=$this->Visitor_Model->get_records();
        $this->load->view("visitors-list",$data);
    }
    public function add(){
        $this->load->view("visitors-form");
    }
    function show_visitors()
   {
      $data = $this->Visitor_Model->get_records();
      foreach ($data as $row) {
         echo " <tr>";
         echo "<td>". $row->id ."</td>";
         echo "<td>". $row->VisitorName."</td>";
         echo "<td>".$row->MobileNumber."</td>";
         echo "<td>". $row->Address."</td>";
         echo "<td>". $row->Apartment."</td>";
         $timestamp = strtotime($row->Date); 
         $date = date('Y-m-d', $timestamp); 
         echo "<td>". $date."</td>";
        $time = date('H:i', strtotime($row->EntryTime));
         echo "<td>".$time ."</td>";
         echo "<td>". $row->WhomtoMeet."</td>";
         echo "<td>". $row->ReasontoMeet."</td>";
         echo "<td><a href=visitor/edit/$row->id>Edit</a></td>";
         echo "<td><a href='visitor/delete/$row->id'>Delete</a></td>";
         echo "<td><a href=visitor/editexittime/$row->id>Update exit time</a></td>";
         echo "</tr>";
      }
    }
    public function insert(){
       
        $data = array(
            "VisitorName"=>$this->input->post('visname'),
        "MobileNumber"=>$this->input->post('mobilenumber'),
        "Address"=>$this->input->post('address'),
        "Apartment"=>$this->input->post('apartment'),
        "Date"=>$this->input->post('date'),
        "EntryTime"=>$this->input->post('entime'),
        "WhomtoMeet"=>$this->input->post('whomtomeet'),
        "ReasontoMeet"=>$this->input->post('reasontomeet')
         );
        $this->Visitor_Model->insert($data);
        redirect(base_url('index.php/visitor'));
        //$this->load->view("visitors-form");
       
        } 
        public function edit($id)
   {
      $data['data'] = $this->Visitor_Model->find_record_by_id($id);
      $this->load->view('visitors-edit', $data);
   }
   public function update($id)
   {
    $data1 = array(
        "VisitorName"=>$this->input->post('visname'),
    "MobileNumber"=>$this->input->post('mobilenumber'),
    "Address"=>$this->input->post('address'),
    "Apartment"=>$this->input->post('apartment'),
    "Date"=>$this->input->post('date'),
    "EntryTime"=>$this->input->post('entime'),
    "WhomtoMeet"=>$this->input->post('whomtomeet'),
    "ReasontoMeet"=>$this->input->post('reasontomeet')
     );
      $this->Visitor_Model->update($data1, $id);

      redirect(base_url('index.php/visitor'));
   }

   public function Details($vid)
{
$vdetail=$this->Visitor_Model->getvisitordetails($vid);
$this->load->view('visitors-list',['vd'=>$vdetail]);
}
public function editexittime($id){
    $data['data'] = $this->Visitor_Model->find_record_by_id($id);
    $this->load->view('updateexittime', $data);
}
public function updateexittime($id)
{
 $data1 = array(
     "VisitorName"=>$this->input->post('visname'),
 "MobileNumber"=>$this->input->post('mobilenumber'),
 "Address"=>$this->input->post('address'),
 "Apartment"=>$this->input->post('apartment'),
 "Date"=>$this->input->post('date'),
 "EntryTime"=>$this->input->post('entime'),
 "ExitTime"=>$this->input->post('extime'),
 "WhomtoMeet"=>$this->input->post('whomtomeet'),
 "ReasontoMeet"=>$this->input->post('reasontomeet')
  );
   $this->Visitor_Model->update($data1, $id);

   redirect(base_url('index.php/visitor'));
}
public function list(){
    $data['data']=$this->Visitor_Model->get_records();
    $this->load->view("list",$data);
}
function show_list()
{
   $data = $this->Visitor_Model->get_records();
   foreach ($data as $row) {
      echo " <tr>";
      echo "<td>". $row->id ."</td>";
      echo "<td>". $row->VisitorName."</td>";
      echo "<td>".$row->MobileNumber."</td>";
      echo "<td>". $row->Address."</td>";
      echo "<td>". $row->Apartment."</td>";
      $timestamp = strtotime($row->Date); 
      $date = date('Y-m-d', $timestamp); 
      echo "<td>". $date."</td>";
     $time = date('H:i', strtotime($row->EntryTime));
      echo "<td>".$time ."</td>";
      $time = date('H:i', strtotime($row->ExitTime));
      echo "<td>".$time ."</td>";
      echo "<td>". $row->WhomtoMeet."</td>";
      echo "<td>". $row->ReasontoMeet."</td>";
      echo "<td><a href=visitor/edit/$row->id>Edit</a></td>";
      echo "<td><a href='visitor/delete/$row->id'>Delete</a></td>";
      echo "</tr>";
   }
 }
   public function delete($id)
   {
      $this->Visitor_Model->delete($id);

      redirect(base_url('index.php/visitor'));
   }
}
?>