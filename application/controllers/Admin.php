<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // $this->load->model('Admin_model');
        $this->load->helper('url');
    }

    public function index() {
        $data = [
            'title' => 'Admin Dashboard',
            'heading' => 'Welcome to the Admin Dashboard',
            'user_name' => 'John Doe' // Replace with actual user name
        ];
        $this->load->view('Templates/Admin/Admin_Header', $data);
        $this->load->view('Templates/Admin/Admin_Sidebar');
        $this->load->view('admin/index');
        $this->load->view('Templates/Admin/Admin_Footer');
    }

    // public function
}

?>