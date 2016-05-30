<?php


/**
 *
 */
class Url extends CI_Controller
{

  function __construct() {
    parent::__construct();
    $this->load->helper(array('url'));
    $this->load->model('nurodigital');
  }

  public function learning() {
    siswa_valid();
    $data['title']  = "eLearning";
    $data['st']     = 'home';
    $data['file']   = 'learning';
    $this->nurodigital->getPage($data);
  }

  public function exam() {
    siswa_valid();
    // if (!$this->session->userdata('siswa_valid')) {
    //   redirect('/url/login');
    // } else {
      $data['title']  = "Online Exam";
      $data['st']     = "home";
      $data['file']   = "exam";
      $this->nurodigital->getPage($data);
    // }
  }

  public function login() {
    $data['title']  = "Login";
    $data['st']     = "home";
    $data['file']   = "login";
    $this->nurodigital->getPage($data);
  }

  public function register() {
    $data['title']    = "Register";
    $data['st']       = "home";
    $data['file']     = "register";
    $data['jurusan']  = $this->nurodigital->getJurusan();
    $this->nurodigital->getPage($data);
  }
}
