<?php

/**
 *
 */
class Siswa extends CI_Controller
{
  function __construct() {
    parent::__construct();
    $this->load->database();
    $this->load->library(array('session','auth','email','twig'));
    $this->load->model('nurodigital');
    $this->load->helper(array('nurodigital','url'));
  }

  public function index() {

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

  public function verify() {
    $data['title']  = "Verify Your Account First";
    $data['st']     = "home";
    $data['file']   = "verify";
    $this->nurodigital->getPage($data);
  }

  public function resend() {
    $email   = $this->session->userdata('email');
    $nama    = $this->session->userdata('nama');
    if ($this->nurodigital->resendVerify($email,$nama)) {
      $this->session->set_flashdata(md5('sukses'), "Link verifikasi telah dikirim silahkan aktifasi, dan login kembali");
      redirect('/login');
    }
    redirect('login');
  }
}
