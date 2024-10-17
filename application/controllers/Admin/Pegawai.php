<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller 
{
    function __construct(){
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('Login', 'refresh');
        }
        $this->load->model('Pegawai_Model', 'PM');
    }

    public function index(){
        $data = array(
            'title' => 'Pegawai',
            'pegawai' => $this->PM->get_all_data(),
            'departemen' => $this->db->get('departemen')->result_array(),
        );
        $this->load->view('Templates/Admin_Header', $data);
        $this->load->view('Templates/Admin_Sidebar');
        $this->load->view('Admin/pegawai', $data);
        $this->load->view('Templates/Admin_Footer');
    }

    public function tambahP(){
        $full_name = $this->input->post('full_name');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $jabatan = $this->input->post('jabatan');
        $departemen_id = $this->input->post('departemen_id');
        $data = [
            'full_name' => $full_name,
            'email' => $email,
            'telp' => $telp,
            'jabatan' => $jabatan,
            'departemen_id' => $departemen_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pic' => $this->session->userdata('nama')
        ];

        $insert = $this->PM->add_data($data);
        if($insert){
            $this->session->set_flashdata('message', 'Data Pegawai berhasil ditambahkan!');
        }else{
            $this->session->set_flashdata('message', 'Data Pegawai gagal ditambahkan!');
        }
        redirect('Pegawai','refresh');
    }

    public function editP($id){
        $full_name = $this->input->post('full_name');
        $email = $this->input->post('email');
        $telp = $this->input->post('telp');
        $jabatan = $this->input->post('jabatan');
        $departemen_id = $this->input->post('departemen_id');
        $data = [
            'full_name' => $full_name,
            'email' => $email,
            'telp' => $telp,
            'jabatan' => $jabatan,
            'departemen_id' => $departemen_id,
            'updated_at' => date('Y-m-d H:i:s'),
            'pic' => $this->session->userdata('nama')
        ];

        $update = $this->PM->updateData($id, $data);
        if ($update) {
            $this->session->set_flashdata('message', 'Data berhasil diubah');
        } else {
            $this->session->set_flashdata('message', 'Data gagal diubah');
        }
        redirect('Pegawai','refresh');
    }

    public function hapusP($id){
        $delete = $this->PM->deleteData($id);
        if ($delete) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
        } else {
            $this->session->set_flashdata('message', 'Data gagal dihapus');
        }
        redirect('Pegawai','refresh');
    }
}

?>