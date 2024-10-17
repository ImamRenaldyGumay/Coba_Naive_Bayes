<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Instruktur extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('message', 'ANDA BELOM LOGIN!');
            redirect('Login', 'refresh');
        }
        $this->load->model('Instruktur_Model', 'IM');
    }

    public function index() {
        $data['title'] = 'Instruktur';
        $data['instruktur'] = $this->IM->get_all_data();
        $this->load->view('Templates/Admin_Header', $data);
        $this->load->view('Templates/Admin_Sidebar');
        $this->load->view('Admin/instruktur', $data);
        $this->load->view('Templates/Admin_Footer');
    }

    public function tambahI(){
        $nama           = $this->input->post('nama');
        $email          = $this->input->post('email');
        $password       = md5('123');
        $keterangan     = $this->input->post('keterangan');

        $data = [
            'nama'          => $nama,
            'email'         => $email,
            'password'      => $password,
            'keterangan'    => $keterangan,
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s'),
            'pic'           => $this->session->userdata('nama')
        ];

        $insert = $this->IM->add_data($data);
        if($insert){
            $this->session->set_flashdata('message', 'Data Instruktur berhasil ditambahkan!');
        }else{
            $this->session->set_flashdata('message', 'Data Instruktur gagal ditambahkan!');
        }
        redirect('Instruktur','refresh');
    }

    public function editI($id){
        $nama           = $this->input->post('nama');
        $email          = $this->input->post('email');
        $keterangan     = $this->input->post('keterangan');

        $data = [
            'nama'          => $nama,
            'email'         => $email,
            'keterangan'    => $keterangan,
            'updated_at'    => date('Y-m-d H:i:s')
        ];

        $update = $this->IM->update_data($id, $data);
        if($update){
            $this->session->set_flashdata('message', 'Data Instruktur berhasil diubah!');
        } else{
            $this->session->set_flashdata('message', 'Data Instruktur gagal diubah!');
        }
        redirect('Instruktur','refresh');
    }

    public function hapusI($id){
        $delete = $this->IM->delete_data($id);
        if ($delete) {
            $this->session->set_flashdata('message', 'Data Instruktur berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Data Instruktur gagal dihapus');
        }
        redirect('Instruktur');
    }

}

?>