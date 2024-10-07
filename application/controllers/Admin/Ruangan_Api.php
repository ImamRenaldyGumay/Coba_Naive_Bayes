<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_Api extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Ruangan_Model', 'RM');
        $this->load->helper('url');
    }

    public function index() {
        $data = $this->RM->get_all_ruangan();
        echo json_encode($data);
    }
}


?>