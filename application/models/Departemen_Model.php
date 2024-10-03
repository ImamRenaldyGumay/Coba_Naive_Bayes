<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen_Model extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    function getAll(){
        $query = $this->db->get('departemen');
        return $query->result();
    }
}

?>