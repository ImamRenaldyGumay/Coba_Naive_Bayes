<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->model('User_model', 'UM');
        // Pengecekan sesi, apakah user sudah login atau belum
        if (!$this->session->userdata('logged_in')) {
            // Jika user belum login, redirect ke halaman login
            redirect('Login', 'refresh');
        }
    }

    public function index() {
        $data = [
            'title' => 'User Page'
        ];
        $this->load->view('Templates/Admin/Admin_Header', $data);
        $this->load->view('Templates/Admin/Admin_Sidebar');
        $this->load->view('admin/user');
        $this->load->view('Templates/Admin/Admin_Footer');
    }
}
?>