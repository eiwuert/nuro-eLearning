<?php

/**
 *
 */
class Learning extends CI_Controller
{
  function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->library(array('session','auth','email','twig'));
    $this->load->model('nurodigital');
    $this->load->helper(array('nurodigital','url'));
    siswa_valid();
    statusAkun();
  }

  public function index() {
    $data['title']  = "Learning";
    $data['st']     = "home";
    $data['file']   = "learning";
    $this->nurodigital->getPage($data);
  }
}
