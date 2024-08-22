<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
  }

  public function Login()
  {
    $this->form_validation->set_rules('Username','username', 'required');
    $this->form_validation->set_rules('Password','password', 'required');
    if ($this->form_validation->run() == FALSE){
      $data = [
        "title" => "Login Page",
      ];
      $this->load->view('Templates/Auth/Header', $data);
      $this->load->view('Auth/Login');
      $this->load->view('Templates/Auth/Footer');
    }else{
      $this->ProcessLogin();
    }
  }

  public function ProcessLogin()
  {
    $data = array(
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password', TRUE))
    );

    $admin = $this->Auth_model->getUserUcl($email, $password);

    if($admin->num_rows() > 0){
      
    }
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

  public function logout(){
    $this->session->sess_destroy();
    redirect('Login');
  }
}
