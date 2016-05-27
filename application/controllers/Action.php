<?php

/**
 *
 */
class Action extends CI_Controller
{

  function __construct() {
    parent::__construct();
    $this->load->helper(array('url','form'));
    $this->load->library(array('email','session'));
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

  public function addUser() {
    // $this->load->library('uuid');
    // $id = $this->uuid->v4();
    // $id = str_replace('-','',$id);
    // $this->db->set('id_siswa', $id, FALSE);
    $data = array(
      'nama'      => $this->input->post('nama'),
      'email'     => $this->input->post('email'),
      'username'  => $this->input->post('username'),
      'password'  => md5($this->input->post('password')),
      'image'     => $this->input->post('image')
    );

    if ($this->nurodigital->prosesInsert($data)) {
      if ($this->nurodigital->send($this->input->post('email'),$this->input->post('nama'))) {
        $this->session->set_flashdata(md5('sukses'), "Anda berhasil melakukan registrasi, silahkan periksa pesan masuk email Anda untuk mengaktifkan akun yang baru Anda buat");
        redirect('/url/login');
      } else {
        $this->session->set_flashdata(md5('notification'), "Terjadi kesalahan dalam melakukan registrasi, silahkan coba lagi!");
        redirect('/url/register');
      }
    }
  }

  function verify($hash=NULL) {
    if ($this->nurodigital->verifyEmail($hash)) {
      $this->session->set_flashdata(md5('sukses'), "Email sukses diverifikasi!");
      redirect('/url/login');
    } else {
      $this->session->set_flashdata(md5('notification'), "Email gagal terverifikasi");
      redirect('/url/register');
    }
  }
}
