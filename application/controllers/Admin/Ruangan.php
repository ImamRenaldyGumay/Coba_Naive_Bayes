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
        $data['title'] = 'Ruangan Page';
        $data['ruangan'] = $this->RM->getAll();
        $this->load->view('Templates/Admin_Header', $data);
        $this->load->view('templates/Admin_Sidebar');
        $this->load->view('Admin/ruangan', $data);
        $this->load->view('templates/Admin_Footer');
    }

    public function TambahRuangan(){
        $nama_ruangan = $this->input->post('nama_ruangan');
        $kapasitas = $this->input->post('kapasitas');
        $fasilitas = $this->input->post('fasilitas');
        $lokasi = $this->input->post('lokasi');

        $data = [
            'nama_ruangan' => $nama_ruangan,
            'kapasitas' => $kapasitas,
            'fasilitas' => $fasilitas,
            'lokasi' => $lokasi,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pic' => 'root'
        ];

        $insert = $this->RM->addData($data);
        if ($insert) {
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('message', 'Data gagal ditambahkan');
        }
        redirect('Ruangan');
    }

    public function getRuanganById($id) {
        $data = $this->Ruangan_model->get_ruangan_by_id($id);
        echo json_encode($data); // Kirim data dalam format JSON
    }

    public function EditRuangan($id){
        $nama_ruangan = $this->input->post('nama_ruangan');
        $kapasitas = $this->input->post('kapasitas');
        $fasilitas = $this->input->post('fasilitas');
        $lokasi = $this->input->post('lokasi');

        $data = [
            'nama_ruangan' => $nama_ruangan,
            'kapasitas' => $kapasitas,
            'fasilitas' => $fasilitas,
            'lokasi' => $lokasi,
            'updated_at' => date('Y-m-d H:i:s'),
            'pic' => 'root'
        ];

        $update = $this->RM->updateData($id, $data);
        if ($update) {
            $this->session->set_flashdata('message', 'Data berhasil diubah');
        } else {
            $this->session->set_flashdata('message', 'Data gagal diubah');
        }
        redirect('Ruangan');
    }

    public function DeleteRuangan($id){
        $delete = $this->RM->delete($id);
        if ($delete) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Data gagal dihapus');
        }
        redirect('ruangan');
    }
}


?>