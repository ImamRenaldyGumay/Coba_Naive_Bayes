<?php
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = [
      "title" => "Login Page",
    ];
    $this->load->view('Templates/Auth/Header', $data);
    $this->load->view('Auth/Login');
    $this->load->view('Templates/Auth/Footer');
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
    $data = [
      "title" => "Regis Page",
    ];

    $this->load->view('Templates/Auth/Header', $data);
    $this->load->view('Auth/Regist');
    $this->load->view('Templates/Auth/Footer');
  }
}
