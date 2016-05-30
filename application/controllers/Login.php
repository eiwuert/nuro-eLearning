<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library(array('session','auth','email','twig'));
    $this->load->model('nurodigital');
    $this->load->helper(array('nurodigital','url'));
  }

  public function index() {
    $data['title']  = "Login";
    $data['st']     = "home";
    $data['file']   = "login";
    $this->nurodigital->getPage($data);
  }
}
