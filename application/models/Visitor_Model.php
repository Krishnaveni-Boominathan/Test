<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Visitor_Model extends CI_Model{


    public function insert( $data ) {
        $result = $this->db->insert( 'visitor', $data );
        return $result;
    }

    public function update( $data1, $id ) {
        $result = $this->db->update( 'visitor', $data1, array( 'id' => $id ) );
        //$result = $this->db->where( 'id', $id )->update( 'employee', $data );
        return $result;
    }

    public function delete( $id ) {
        $result = $this->db->delete( 'visitor', [ 'id' => $id ] );
        return $result;
    }

    public function get_records() {
        $result = $this->db->get('visitor');
        return $result->result();
    }

    public function find_record_by_id( $id ) {
        $result = $this->db->get_where( 'visitor', [ 'id' => $id ] )->row();
        return $result;
    }
    public function getvisitordetails($vid){
        $ret=$this->db->select('*')
                         ->where('ID',$vid)
                          ->get('visitor');
                            return $ret->row();
        }
       
}
?>