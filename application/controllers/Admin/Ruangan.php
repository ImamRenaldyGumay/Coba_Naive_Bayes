<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        // Pengecekan sesi, apakah user sudah login atau belum
        if (!$this->session->userdata('logged_in')) {
            // Jika user belum login, redirect ke halaman login
            redirect('Login', 'refresh');
        }
        $this->load->model('Ruangan_Model', 'RM');
    }

    public function index() {
        $data = [
            'title' => 'Ruangan Page'
        ];
        $this->load->view('Templates/Admin/Admin_Header', $data);
        $this->load->view('templates/Admin/Admin_Sidebar');
        $this->load->view('admin/ruangan');
        $this->load->view('templates/Admin/Admin_Footer');
    }
}


?>