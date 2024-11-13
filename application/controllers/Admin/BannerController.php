<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BannerController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BannerModel');
    }

    public function index() {
        try {
            $banners = $this->BannerModel->get_all_banners();
            
            // Set header status 200
            $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode([
                    'status' => '200',
                    'data' => $banners
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES))
                ->_display();
            exit;
            
        } catch (Exception $e) {
            // Handle error with status 500
            $this->output
                ->set_status_header(500)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode([
                    'status' => '500',
                    'message' => 'Failed to retrieve data: ' . $e->getMessage()
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES))
                ->_display();
            exit;
        }
    }
}
?>
