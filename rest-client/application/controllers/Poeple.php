<?php

class Poeple extends CI_Controller {

  public function index(){
    // $this->load->database();
    
    $data['judul'] = 'Daftar Mahasiswa';
    $this->load->model('Poeple_model', 'poeple');

    // Load Library
    $this->load->library('pagination');

    // Ambil Data Keyword
    if($this->input->post('submit')){
      $data['keyword'] = $this->input->post('keyword');
      $this->session->set_userdata('keyword', $data['keyword']);
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }

    // Config
    // $config['total_rows'] = $this->poeple->countAllPoeple();
    $this->db->like('name', $data['keyword']);
    $this->db->from('poeple');
    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $config['per_page'] = 15;



    // Initialize
    $this->pagination->initialize($config);


    $data['start'] = $this->uri->segment(3);
    $data['poeple'] = $this->poeple->getPoeple($config['per_page'], $data['start'], $data['keyword']);

  
    $this->load->view('templates/header', $data);
    $this->load->view('poeple/index');
    $this->load->view('templates/footer');
  }

}