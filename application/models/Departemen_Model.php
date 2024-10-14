<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen_Model extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function getAll(){
        $query = $this->db->get('departemen');
        return $query->result_array();
    }

    function addData($data){
        return $this->db->insert('departemen', $data);
    }

    function updateData($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('departemen', $data);
    }

    function deleteData($id){
        $this->db->where('id', $id);
        return $this->db->delete('departemen');
    }
}

?>