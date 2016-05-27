<?php

/**
 *
 */
class Home extends CI_Controller
{
  function __construct() {
    parent::__construct();
    $this->load->helper(array('url'));
    $this->load->model('nurodigital');
  }

  public function index() {
    $data['title']  = "Home";
    $data['st']     = "home";
    $data['file']   = "home";
    $this->nurodigital->getPage($data);
  }
}
