<?php

/**
 *
 */
class Home extends CI_Controller
{
  function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->library(array('session','auth','email','twig'));
    $this->load->model('nurodigital');
    $this->load->helper(array('nurodigital','url'));
    statusAkun();
  }

  public function index() {
    $data['title']  = "Home";
    $data['st']     = "home";
    $data['file']   = "home";
    $this->nurodigital->getPage($data);
  }
}
