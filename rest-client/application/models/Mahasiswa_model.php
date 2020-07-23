<?php

use GuzzleHttp\Client;

class Mahasiswa_model extends CI_model {

  private $_client;

  public function __construct(){
    
    $this->_client = new Client([
      'base_uri' => 'http://localhost/ci_api/rest_server/api/',
      'auth' => ['anggit', 'oreki123']
    ]);

  }

  public function getAllMahasiswa(){
    
    $response = $this->_client->request('GET', 'mahasiswa', [
      'query' => ['ci-key' => 'anggit123']
    ]);

    $result = json_decode($response->getBody()->getContents(), true);

    return $result['data'];
  }

  
  public function getMahasiswaById($id){
    $client = new Client() ;

    $response = $this->_client->request('GET', 'mahasiswa', [
      'query' => [
        'ci-key' => 'anggit123',
        'id' => $id
      ]
    ]);

    $result = json_decode($response->getBody()->getContents(), true);

    return $result['data'][0];
  }

  public function tambahDataMahasiswa(){
    $data = [
      'nama' => $this->input->post('nama', true),
      'nrp' => $this->input->post('nim', true),
      'email' => $this->input->post('email', true),
      'jurusan' => $this->input->post('jurusan', true),
      'ci-key' => 'anggit123'
    ];

    $response = $this->_client->request('POST', 'mahasiswa', [
      'form_params' => $data
    ]);

    $result = json_decode($response->getBody()->getContents(), true);

    return $result;
  }

  public function hapusDataMahasiswa($id){
    $response = $this->_client->request('DELETE', 'mahasiswa', [
      'form_params' => [
        'ci-key' => 'anggit123',
        'id' => $id
      ]
    ]);

    $result = json_decode($response->getBody()->getContents(), true);

    return $result['data'];

  }

  public function ubahDataMahasiswa(){
    $data = [
      'nama' => $this->input->post('nama', true),
      'nrp' => $this->input->post('nim', true),
      'email' => $this->input->post('email', true),
      'jurusan' => $this->input->post('jurusan', true),
      'id' => $this->input->post('id', true),
      'ci-key' => 'anggit123'
      
    ];

    $response = $this->_client->request('PUT', 'mahasiswa', [
      'form_params' => $data
    ]);

    $result = json_decode($response->getBody()->getContents(), true);

    return $result;
  }

  public function cariDataMahasiswa(){
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama_mahasiswa', $keyword);
    $this->db->or_like('jurusan', $keyword);
    $this->db->or_like('nim', $keyword);

    return $this->db->get('tb_mahasiswa')->result_array();

  }

  
}