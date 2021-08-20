<?php
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('Auth/Login');
  }

  public function _Login()
  {
    $data = array(
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password', TRUE))
    );
  }

  public function regis()
  {
    $this->load->view('Auth/Regist');
  }
}
