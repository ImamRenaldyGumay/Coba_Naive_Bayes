<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller 
{
    function __construct(){
        parent::__construct();
        $this->load->model('Departemen_Model', 'DM');

        if (!$this->session->userdata('logged_in')) {
            redirect('Login', 'refresh');
        }
        $this->load->helper('url');
    }

    public function index() {
        $data['title'] = 'Halaman Departemen';
        $data['departemen'] = $this->DM->getAll();
        $this->load->view('Templates/Admin_Header', $data);
        $this->load->view('Templates/Admin_Sidebar');
        $this->load->view('Admin/departemen', $data);
        $this->load->view('Templates/Admin_Footer');
    }
}


?>