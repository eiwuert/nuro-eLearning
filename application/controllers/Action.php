<?php

/**
 *
 */
class Action extends CI_Controller
{

  function __construct() {
    parent::__construct();
    $this->load->helper(array('url'));
    $this->load->model('nurodigital');
  }

  public function cekLogin() {
    $username = trim(htmlentities($this->input->post('username', TRUE), ENT_QUOTES, 'utf-8'));
    // mysqli_real_escape_string(trim(htmlentities($this->input->post('username', TRUE), ENT_QUOTES, 'utf-8')));
    $password = md5(trim(htmlentities($this->input->post('password', TRUE), ENT_QUOTES, 'utf-8')));
    // mysqli_real_escape_string(md5(trim(htmlentities($this->input->post('password', TRUE), ENT_QUOTES, 'utf-8'))));
    $this->nurodigital->actLogin($username, $password);
  }

  public function dest() {
    $this->session->sess_destroy();
    redirect();
  }
}
