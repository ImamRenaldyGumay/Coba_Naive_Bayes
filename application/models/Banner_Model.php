<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BannerModel extends CI_Model {

    public function get_all_banners() {
        $query = $this->db->get('banners');
        return $query->result_array();
    }
}
?>
