<?php


/**
 *
 */
class Url extends CI_Controller
{

  function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->library(array('session','auth','email','twig'));
    $this->load->model('nurodigital');
    $this->load->helper(array('nurodigital','url'));
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



  public function register() {
    $data['title']    = "Register";
    $data['st']       = "home";
    $data['file']     = "register";
    $this->nurodigital->getPage($data);
  }
}
