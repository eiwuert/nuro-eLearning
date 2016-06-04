<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Forum extends CI_Controller
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
    $data['title']  = "Forum";
    $data['st']     = "home";
    $data['file']   = "forum";
    $this->nurodigital->getPage($data);
  }
}
