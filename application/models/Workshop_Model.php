<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Workshop_Model extends CI_Model 
{
    public function get_all_data(){
        $this->db->select('workshop.*, instruktur.nama, ruangan.nama');
        $this->db->from('workshop');
        $this->db->join('instruktur', 'workshop.instruktur_id = instruktur.id');
        $this->db->join('ruangan', 'workshop.ruangan_id = ruangan.id');
        return $this->db->get()->result_array();
    }

    public function add_data($data){
        return $this->db->insert('workshop', $data);
    }
}


?>