<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BannerController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Banner_Model', 'BannerModel');
        $this->load->helper('url');
        header('Access-Control-Allow-Origin: *'); // atau set ke domain spesifik
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
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

    public function data() {
        // Data JSON yang ingin ditampilkan
        $response = [
            "Status" => 200,
            "data" => [
                "id" => "1",
                "title" => "Headline",
                "content" => "<h2><strong>Apa Itu SaaS dan Mengapa Perusahaan Membutuhkannya?</strong></h2>
                              <p>IDstar – SaaS (Software as a Service) kini telah menjadi bagian penting dalam transformasi digital banyak bisnis. Kita mungkin tidak selalu menyadari, tetapi SaaS diam-diam mengubah cara kita bekerja setiap hari—mulai dari manajemen data hingga komunikasi tim dan bahkan layanan pelanggan.</p>
                              <p>Tidak perlu lagi membeli perangkat lunak mahal dan rumit yang butuh instalasi panjang. Dengan SaaS, semuanya bisa diakses kapan saja dan di mana saja melalui internet.</p>
                              <p>Dalam artikel ini, kita akan menjelajahi beberapa contoh nyata tentang penerapan SaaS di dunia bisnis dan bagaimana solusi ini mengubah cara perusahaan menjalankan operasionalnya.</p>",
                "author" => "Maspren",
                "image" => "assets/png/banner/banner_career.png",
                "tags" => "Big Data, SaaS, Teknologi",
                "date" => "2024-11-20",
                "related_content" => [
                    [
                        "id" => 2,
                        "title" => "Related Headline 1",
                        "image" => "assets/png/banner/banner_related_1.png",
                        "tags" => "Big Data",
                        "sinopsis" => "Sinopsis untuk artikel terkait pertama",
                        "links" => "https://example.com/1"
                    ],
                    [
                        "id" => 3,
                        "title" => "Related Headline 2",
                        "image" => "assets/png/banner/banner_related_2.png",
                        "tags" => "Machine Learning",
                        "sinopsis" => "Sinopsis untuk artikel terkait kedua",
                        "links" => "https://example.com/2"
                    ],
                    [
                        "id" => 4,
                        "title" => "Related Headline 3",
                        "image" => "assets/png/banner/banner_related_3.png",
                        "tags" => "AI",
                        "sinopsis" => "Sinopsis untuk artikel terkait ketiga",
                        "links" => "https://example.com/3"
                    ]
                ]
            ]
        ];

        // Mengembalikan data sebagai JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
}
?>
