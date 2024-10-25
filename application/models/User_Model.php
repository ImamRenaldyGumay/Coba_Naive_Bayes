<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_all_data(){
        return $this->db->get('admin')->result_array();
    }

    public function add_data($data){
        return $this->db->insert('admin', $data);
    }

    public function update_data($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('admin', $data);
    }

    public function delete_data($id){
        $this->db->where('id', $id);
        return $this->db->delete('admin');
    }
}
?>   