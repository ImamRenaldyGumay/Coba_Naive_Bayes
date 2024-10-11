<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_Api extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Ruangan_Model', 'RM');
        $this->load->helper('url');
    }

    public function index() {
        $data = $this->RM->get_all_ruangan();
        if(!empty($data)){
            foreach ($data as $db_result) {
                $id = $db_result['id'];
                $nama_ruangan = $db_result['nama_ruangan'];
                $kapasitas = $db_result['kapasitas'];
                $fasilitas = $db_result['fasilitas'];
                $lokasi = $db_result['lokasi'];
                $pic = $db_result['pic'];

                $data[] = [
                    'id' => $id,
                    'nama_ruangan' => $nama_ruangan,
                    'kapasitas' => $kapasitas,
                    'fasilitas' => $fasilitas,
                    'lokasi' => $lokasi,
                    'pic' => $pic,
                    // 'created_at' => $db_result['created_at'],
                    // 'updated_at' => $db_result['updated_at']
                ];
            }
            echo json_encode($data);
        }else{
            $data = [];
        }
        
        $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_endcode(array(
            "status" => 1,
            "message" => "Data Ruangan",
            "data" => $data
        )));
    }
}


?>