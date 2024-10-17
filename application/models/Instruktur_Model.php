<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Instruktur_Model extends CI_Model 
{
    public function get_all_data(){
        $this->db->select('instruktur.*');
        $this->db->from('instruktur');
        return $this->db->get()->result_array();
    }

    public function add_data($data){
        return $this->db->insert('instruktur', $data);
    }

    public function update_data($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('instruktur', $data);
    }

    public function delete_data($id){
        $this->db->where('id', $id);
        return $this->db->delete('instruktur');
    }
}


?>