<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_Model', 'AM');
  }

  public function index()
  {
    $this->form_validation->set_rules('email','Email', 'required');
    $this->form_validation->set_rules('password','Password', 'required');
    if ($this->form_validation->run() == FALSE){
      $data = [
        "title" => "Login Page",
      ];
      $this->load->view('Templates/Auth_Header', $data);
      $this->load->view('Auth/Login');
      $this->load->view('Templates/Auth_Footer');
    }else{
      $this->ProcessLogin();
    }
  }

  public function ProcessLogin()
  {
    $email    = $this->input->post('email');
    $password = $this->input->post('password');

    // var_dump($email);
    // die;

    // Cek Login As Admin
    $admin = $this->AM->cek_admin($email, $password);
    var_dump($admin);
    die;
    if($admin){
      $userdata = [
        'email'       => $admin['email'],
        'nama'        => $admin['name'],
        'user_type'   => 'Admin',
        'logged_in'   => TRUE
      ];
      $this->session->set_userdata($userdata);
      var_dump($userdata);
      die;
      redirect('Admin');
    }

    // cek Login as pegawai
    $pegawai = $this->AM->cek_pegawai($email, $password);
    if($pegawai){
      $userdata = [
        'email'       => $pegawai['email'],
        'nama'        => $pegawai['nama'],
        'user_type'   => 'Pegawai',
        'logged_in'   => TRUE
      ];
      $this->session->set_userdata($userdata);
      redirect('Pegawai');
    }

    // Cek Login As Instruktur
    $instruktur = $this->AM->cek_instruktur($email, $password);
    if($instruktur){
      $userdata = [
        'email'       => $instruktur['email'],
        'nama'        => $instruktur['nama'],
        'user_type'   => 'Instruktur',
        'logged_in'   => TRUE
      ];
      $this->session->set_userdata($userdata);
      redirect('Instruktur');
    }

    // jika gagal Login
    $this->session->set_flashdata('message', 'Login gagal, username atau password salah!');
    redirect('Login');
  }

  public function regis()
  {
    $data = [
      "title" => "Regis Page",
    ];

    $this->load->view('Templates/Auth_Header', $data);
    $this->load->view('Auth/Regist');
    $this->load->view('Templates/Auth_Footer');
  }

  public function logout(){
    $this->session->sess_destroy();
    $this->session->set_flashdata('flashdata', 'Anda telah keluar.');
    redirect('Login');
  }
}
