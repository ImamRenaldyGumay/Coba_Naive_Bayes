<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Workshop extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('message', 'ANDA BELOM LOGIN!');
            redirect('Login', 'refresh');
        }
        $this->load->model('Workshop_Model', 'WM');
    }

    public function index() {
        $data['title'] = 'Workshop';
        $data['workshop'] = $this->WM->get_all_data();
        $data['instruktur'] =  $this->db->get('instruktur')->result_array();
        $data['ruangan'] =  $this->db->get('ruangan')->result_array();
        $this->load->view('Templates/Admin_Header', $data);
        $this->load->view('Templates/Admin_Sidebar');
        $this->load->view('Admin/workshop', $data);
        $this->load->view('Templates/Admin_Footer');
    }

    public function tambahW(){
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $instruktur_id = $this->input->post('instruktur_id');
        $ruangan_id = $this->input->post('ruangan_id');

        if ($end_date > $start_date) {
            $data = [
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'instruktur_id' => $instruktur_id,
                'ruangan_id' => $ruangan_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'pic' => $this->session->userdata('nama')
            ];
        }else{
            $this->session->set_flashdata('error_message', 'Tanggal akhir harus lebih besar dibanding tanggal awal');
            redirect('Workshop');
        }

        $insert = $this->WM->add_data($data);
        if ($insert) {
            $this->session->set_flashdata('success_message', 'Data berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('error_message', 'Data gagal ditambahkan');
        }
        redirect('Workshop');
    }
}


?>