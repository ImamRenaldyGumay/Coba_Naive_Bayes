<?php
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Home Page';
    $this->load->view('Home', $data);
  }

  public function home2(){
    $this->load->view('Home2');
  }
}
