<?php 

// Nama Class harus sama dengan nama file
class Home extends CI_Controller {

  public function index(){

    $data['judul'] = 'Home';
    $this->load->view('templates/header', $data);
    $this->load->view('home/index');
    $this->load->view('templates/footer');

  }

}