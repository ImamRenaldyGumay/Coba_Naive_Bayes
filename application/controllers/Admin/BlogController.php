<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Blog_Model', 'Blog_model');
        $this->load->helper('url');
        header('Access-Control-Allow-Origin: *'); // atau set ke domain spesifik
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, X-Requested-With');
    }

    // API untuk mendapatkan semua blog
    public function get_blogs() {
        $data = $this->Blog_model->get_all_blogs();
        echo json_encode($data);
    }

    // API untuk mendapatkan blog berdasarkan ID
    public function get_blog($id) {
        $data = $this->Blog_model->get_blog_by_id($id);
        if ($data) {
            echo json_encode($data);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Blog not found']);
        }
    }

    // API untuk menambahkan blog baru
    public function add_blog() {
        $data = json_decode(file_get_contents('php://input'), true);

        // Validasi input
        if (isset($data['author'], $data['image_base64'], $data['tags'], $data['title'], $data['topics'])) {
            $insert_data = [
                'author' => $data['author'],
                'image_base64' => $data['image_base64'],
                'tags' => $data['tags'],
                'title' => $data['title'],
                'topics' => $data['topics']
            ];
            $insert = $this->Blog_model->insert_blog($insert_data);
            if ($insert) {
                echo json_encode(['status' => 'success', 'message' => 'Blog added successfully']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to add blog']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
        }
    }

    // API untuk memperbarui blog berdasarkan ID
    public function update_blog($id) {
        $data = json_decode(file_get_contents('php://input'), true);

        // Validasi input
        if (isset($data['author'], $data['image_base64'], $data['tags'], $data['title'], $data['topics'])) {
            $update_data = [
                'author' => $data['author'],
                'image_base64' => $data['image_base64'],
                'tags' => $data['tags'],
                'title' => $data['title'],
                'topics' => $data['topics']
            ];
            $update = $this->Blog_model->update_blog($id, $update_data);
            if ($update) {
                echo json_encode(['status' => 'success', 'message' => 'Blog updated successfully']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to update blog']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
        }
    }

    // API untuk menghapus blog berdasarkan ID
    public function delete_blog($id) {
        $delete = $this->Blog_model->delete_blog($id);
        if ($delete) {
            echo json_encode(['status' => 'success', 'message' => 'Blog deleted successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete blog']);
        }
    }
}
