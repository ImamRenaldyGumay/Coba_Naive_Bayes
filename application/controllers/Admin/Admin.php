<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->model('Admin_model');
        // Pengecekan sesi, apakah user sudah login atau belum
        if (!$this->session->userdata('logged_in')) {
            // Jika user belum login, redirect ke halaman login
            redirect('Login', 'refresh');
        }
        $this->load->helper('url');
    }

    public function index() {
        $data = [
            'title' => 'Admin Dashboard'
        ];
        $this->load->view('Templates/Admin_Header', $data);
        $this->load->view('Templates/Admin_Sidebar');
        $this->load->view('admin/index');
        $this->load->view('Templates/Admin_Footer');
    }
}

?>