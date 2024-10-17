<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_Model extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    public function get_all_data(){
        $this->db->select('pegawai.*, departemen.nama_departemen');
        $this->db->from('pegawai');
        $this->db->join('departemen', 'pegawai.departemen_id = departemen.id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_data($data){
        return $this->db->insert('pegawai', $data);
    }

    function updateData($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('pegawai', $data);
    }

    public function deleteData($id){
        $this->db->where('id', $id);
        return $this->db->delete('pegawai');
    }
}


?>