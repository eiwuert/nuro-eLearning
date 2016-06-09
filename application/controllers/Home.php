<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
    $this->load->helper(array('nurodigital','url','date'));
    statusAkun();
  }

  public function index() {
    $data['title']  = "Home";
    $data['st']     = "home";
    $data['file']   = "home";
    $data['news']   = $this->nurodigital->getNews();
    $this->nurodigital->getPage($data);
  }
}
