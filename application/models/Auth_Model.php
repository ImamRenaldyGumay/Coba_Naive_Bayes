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
}

?>