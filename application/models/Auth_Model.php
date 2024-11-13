<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model 
{
    public function __construct(){
        parent::__construct();
    }

    public function getUserUcl($email, $password){
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('acl');
        return $query->row_array();
    }

    public function cek_admin($email, $password){
        $this->db->where('email', $email);
        $query = $this->db->get('admin');
        $admin = $query->row();

        if ($admin && password_verify(md5($passwords), $admin->password)) {
            return $admin;
        }
        return false;
    }

    public function cek_pegawai($email, $password){
        $this->db->where('email', $email);
        $query = $this->db->get('pegawai');
        $pegawai = $query->row();

        if ($pegawai && password_verify($password, $pegawai->Password)){
            return $pegawai;
        }
        return false;
    }

    public function cek_instruktur($email, $password){
        $this->db->where('email', $email);
        $query = $this->db->get('instruktur');
        $instruktur = $query->row();
        
        if ($instruktur && password_verify($password, $instruktur->Password)){
            return $instruktur;
        }
        return false;
    }
}

?>