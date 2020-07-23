<?php


defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Mahasiswa extends REST_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Mahasiswa_model', 'mahasiswa');
  }

  public function index_get(){
    $id = $this->get('id');
    if($id == null){
      $mahasiswa = $this->mahasiswa->getMahasiswa();
    } else {
      $mahasiswa = $this->mahasiswa->getMahasiswa($id);
    }

    if($mahasiswa) {
      $this->response([
        'status' => TRUE,
        'data' => $mahasiswa
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => FALSE,
        'message' => 'ID NOT FOUND'
      ], REST_Controller::HTTP_NOT_FOUND);
    }
  }

  public function index_delete(){
    $id = $this->delete('id');
    if($id == null){
      $this->response([
        'status' => FALSE,
        'message' => 'Provide an ID!!'
      ], REST_Controller::HTTP_BAD_REQUEST);
    } else {
      if($this->mahasiswa->deleteMahasiswa($id) > 0){
        // data berhasil terhapus
        $this->response([
          'status' => TRUE,
          'data' => $id,
          'message' => 'Data berhasil terhapus'
        ], REST_Controller::HTTP_OK);
      } else {
        // id not found
        $this->response([
          'status' => FALSE,
          'message' => 'ID not Found!!'
        ], REST_Controller::HTTP_BAD_REQUEST);
      }
    }
  }

  public function index_post(){
    $data = [
      'nrp' => $this->post('nrp'),
      'nama' => $this->post('nama'),
      'email' => $this->post('email'),
      'jurusan' => $this->post('jurusan'),
    ];

    if($this->mahasiswa->createMahasiswa($data) > 0){
      $this->response([
        'status' => true,
        'message' => 'Data berhasil ditambahkan',
      ], REST_Controller::HTTP_CREATED);
    } else {
      $this->response([
        'status' => false,
        'message' => 'Gagal menambahkan data',
      ], REST_Controller::HTTP_BAD_REQUEST);
    }
  }

  public function index_put(){

    $id = $this->put('id');

    $data = [
      'nrp' => $this->put('nrp'),
      'nama' => $this->put('nama'),
      'email' => $this->put('email'),
      'jurusan' => $this->put('jurusan'),
    ];

    if($this->mahasiswa->updateMahasiswa($data, $id) > 0){
      $this->response([
        'status' => true,
        'message' => 'Data mahasiswa berhasil diubah'
      ], REST_Controller::HTTP_OK);
    } else {
      $this->response([
        'status' => false,
        'message' => 'Data mahasiswa gagal diubah'
      ], REST_Controller::HTTP_BAD_REQUEST);
    }

  }



}