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
        $data['title'] = 'Departemen';
        $data['departemen'] = $this->DM->getAll();
        $this->load->view('Templates/Admin_Header', $data);
        $this->load->view('Templates/Admin_Sidebar');
        $this->load->view('Admin/departemen', $data);
        $this->load->view('Templates/Admin_Footer');
    }

    public function tambahD(){
        $nama_departemen    = $this->input->post('nama_departemen');
        $lokasi_departemen  = $this->input->post('lokasi_departemen');
        $pic                = $this->session->userdata('nama');

        $data = [
            'nama_departemen'       => $nama_departemen,
            'lokasi_departemen'     => $lokasi_departemen,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),
            'pic'                   => $pic
        ];

        $insert = $this->DM->addData($data);
        if($insert){
            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
        }else{
            $this->session->set_flashdata('message', 'Data gagal ditambahkan');
        }
        redirect('Departemen');
    }

    public function editD(){
        $id                 = $this->input->post('id');
        $nama_departemen    = $this->input->post('nama_departemen');
        $lokasi_departemen  = $this->input->post('lokasi_departemen');
        
        $data = [
            'nama_departemen'       => $nama_departemen,
            'lokasi_departemen'     => $lokasi_departemen,
            'updated_at'            => date('Y-m-d H:i:s')
        ];

        $update = $this->DM->updateData($id, $data);
        if($update){
            $this->session->set_flashdata('message', 'Data berhasil diubah');
        } else{
            $this->session->set_flashdata('message', 'Data gagal diubah');
        }
        redirect('Departemen');
    }

    public function hapusD($id){
        $delete = $this->DM->deleteData($id);
        if ($delete) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Data gagal dihapus');
        }
        redirect('Departemen');
    }
}
?>