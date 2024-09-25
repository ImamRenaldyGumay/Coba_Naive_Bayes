<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_Model extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    function getAll(){
       $query = $this->db->get('ruangan');
       return $query->result();
    }

    function addData($data){
        return $this->db->insert('ruangan', $data);
    }

    public function get_ruangan_by_id($id) {
        return $this->db->get_where('ruangan', ['id' => $id])->row();
    }

    function updateData($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('ruangan', $data);
    }

    function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete('ruangan');
    }
}

?>