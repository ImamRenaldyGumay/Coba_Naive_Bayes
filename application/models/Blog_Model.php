<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Fungsi untuk mengambil semua blog
    public function get_all_blogs() {
        $this->db->select('id, author, image_base64, tags, title, topics');
        $this->db->from('images'); // Ganti 'images' dengan 'blog' jika nama tabel diubah
        $query = $this->db->get();
        return $query->result_array();
    }

    // Fungsi untuk mengambil blog berdasarkan ID
    public function get_blog_by_id($id) {
        $this->db->select('id, author, image_base64, tags, title, topics');
        $this->db->from('images'); // Ganti 'images' dengan 'blog' jika nama tabel diubah
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Fungsi untuk menambahkan blog baru
    public function insert_blog($data) {
        return $this->db->insert('images', $data); // Ganti 'images' dengan 'blog' jika nama tabel diubah
    }

    // Fungsi untuk memperbarui blog
    public function update_blog($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('images', $data); // Ganti 'images' dengan 'blog' jika nama tabel diubah
    }

    // Fungsi untuk menghapus blog berdasarkan ID
    public function delete_blog($id) {
        $this->db->where('id', $id);
        return $this->db->delete('images'); // Ganti 'images' dengan 'blog' jika nama tabel diubah
    }
}
