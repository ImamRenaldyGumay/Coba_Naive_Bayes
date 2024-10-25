<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model', 'UM');
        // Pengecekan sesi, apakah user sudah login atau belum
        if (!$this->session->userdata('logged_in')) {
            // Jika user belum login, redirect ke halaman login
            redirect('Login', 'refresh');
        }
    }

    public function index() {
        $data = [
            'title' => 'User',
            'user' => $this->UM->get_all_data()
        ];
        $this->load->view('Templates/Admin_Header', $data);
        $this->load->view('Templates/Admin_Sidebar');
        $this->load->view('Admin/user', $data);
        $this->load->view('Templates/Admin_Footer');
    }

    public function tambahU(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = md5('123');
        $nomor_telpon = $this->input->post('nomor_telpon');

        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'nomor_telpon' => $nomor_telpon,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $insert = $this->UM->add_data($data);
        if ($insert) {
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
            redirect('User','refresh');
        } else {
            $this->session->set_flashdata('message', 'Data gagal ditambahkan');
            redirect('User','refresh');
        }
    }

    public function editU($id){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $nomor_telpon = $this->input->post('nomor_telpon');
        $data = [
            'name' => $name,
            'email' => $email,
            'nomor_telpon' => $nomor_telpon,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $update = $this->UM->update_data($id, $data);
        if ($update) {
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect('User','refresh');
        } else {
            $this->session->set_flashdata('message', 'Data gagal diubah');
            redirect('User','refresh');
        }
    }

    public function hapusU($id){
        $delete = $this->UM->delete_data($id);
        if ($delete) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Data gagal dihapus');
        }
        redirect('User','refresh');
    }
}
?>