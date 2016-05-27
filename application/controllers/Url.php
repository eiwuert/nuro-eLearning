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
    $data['title']  = "eLearning";
    $data['st']     = 'home';
    $data['file']   = 'learning';
    $this->nurodigital->getPage($data);
  }

  public function exam() {
    if (!$this->session->userdata('siswa_valid')) {
      redirect('/url/login');
    } else {
      $data['title']  = "Online Exam";
      $data['st']     = "home";
      $data['file']   = "exam";
      $this->nurodigital->getPage($data);
    }
  }

  public function login() {
    $data['title']  = "Login";
    $data['st']     = "home";
    $data['file']   = "login";
    $this->nurodigital->getPage($data);
  }

  public function register() {
    $data['title']  = "Register";
    $data['st']     = "home";
    $data['file']   = "register";
    $this->nurodigital->getPage($data);
  }
}
