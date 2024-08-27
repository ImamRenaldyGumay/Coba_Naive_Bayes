<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
  }

  public function index()
  {
    $this->form_validation->set_rules('email','Email', 'required');
    $this->form_validation->set_rules('password','Password', 'required');
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
    // $data = array(
    //   'email'     => $this->input->post('email'),
    //   'password'  => $this->input->post('password')
    // );
    $email    = $this->input->post('email');
    $password = $this->input->post('password');

    $admin = $this->Auth_model->getUserUcl($email, $password);
    if($admin){
      $userdata = [
        'email' => $admin['email'],
        'nama' => $admin['name'],
        'logged_in' => TRUE
      ];
      $this->session->set_flashdata('login_success', 'Selamat datang, ' . $email . '!');
      $this->session->set_userdata($userdata);
      redirect('Admin');
    }else{
      $this->session->set_flashdata('login_failed', 'Username atau password salah');
      redirect('Login');
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
    $this->session->set_flashdata('logout_success', 'Anda telah logout');
    redirect('Login');
  }
}
