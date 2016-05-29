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
    $data = array(
      'nama'      => $this->input->post('nama'),
      'email'     => $this->input->post('email'),
      'username'  => $this->input->post('username'),
      'password'  => md5($this->input->post('password')),
      'image'     => $this->input->post('image')
    );
    //
    // if ($this->checkUsernameExist($this->input->post('username'))==TRUE) {
      // if ($this->checkEmailExist($this->input->post('email'))==TRUE) {
        if ($this->nurodigital->prosesInsert($data)) {
          if ($this->nurodigital->send($this->input->post('email'),$this->input->post('nama'))) {
            $this->session->set_flashdata(md5('sukses'), "Anda berhasil melakukan registrasi, silahkan periksa pesan masuk email Anda untuk mengaktifkan akun yang baru Anda buat");
            redirect('/url/login');
          } else {
            $this->session->set_flashdata(md5('notification'), "Terjadi kesalahan dalam melakukan registrasi, silahkan coba lagi!");
            redirect('/url/register');
            // show_error($this->email->print_debugger());
          }
        }
      // } else {
    //     $this->session->set_flashdata(md5('notification'), "Email sudah digunakan");
    //     redirect('/url/register');
    //   }
    // } else {
    //   $this->session->set_flashdata(md5('notification'), "Username sudah digunakan");
    //   redirect('/url/register');
    // }

  }

  function checkEmailExist($email) {
    if ($this->nurodigital->checkEmail($email)==TRUE) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  function checkUsernameExist($username) {
    if ($this->nurodigital->chechUsername($username)==TRUE) {
      return TRUE;
    } else {
      return FALSE;
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

  public function validateUsernameExist() {
  	if (array_key_exists('username',$_POST)) {
  		if ($this->usernameexist($this->input->post('username')) == TRUE) {
  			echo json_encode(FALSE);
  		} else {
  			echo json_encode(TRUE);
  		}
  	}
  }

  private function usernameexist($username) {
    $this->db->select('username');
    $this->db->where('username', $username);
    $query = $this->db->get('nurodigital_siswa');
    if( $query->num_rows() > 0 ) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  public function validateEmailExist() {
    if (array_key_exists('email', $_POST)) {
      if ($this->emailexist($this->input->post('email'))==TRUE) {
        echo json_encode(FALSE);
      } else {
        echo json_encode(TRUE);
      }
    }
  }

  private function emailexist($email) {
    $this->db->select('email');
    $this->db->where('email', $email);
    $query = $this->db->get('nurodigital_siswa');
    $num = $query->num_rows();
    if ($num > 0) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
