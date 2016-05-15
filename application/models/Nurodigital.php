<?php

/**
 *
 */
class Nurodigital extends CI_Model
{

  public function getPage($data='') {
    if ($data['st']=="home") {
      $this->load->view('home/index', $data, FALSE);
    }
  }

  public function actLogin($username, $password) {
    $que = $this->db->get_where('nurodigital_siswa', array('username' => $username, 'password' => $password));
    $n_row = $que->num_rows();
    $r = $que->row();

    if ($n_row === 1) {
      if ($r->status == "Aktif") {
        $this->sessionData($r);
      } else {
        $this->session->set_flashdata(md5('notification'), "Akun Anda tidak aktif, silahkan hubungi bidang kesiswaan");
        redirect('/url/login');
      }
    } else {
      $this->session->set_flashdata(md5('notification'), "Username dan Password tidak terdaftar");
      redirect('/url/login');
    }

    // if ($n_row === 1) {
    //     // $this->createSession($r);
    //     $this->sessionData($r);
    //   } else {
    //     // $this->session->set_flashdata(md5('notification'), "Maaf username dan password tidak terdaftar");
    //     echo "Username atau password salah";
    // }
  }

  public function sessionData($r='') {
    $data['id']     = $r->id_siswa;
    $data['nama']   = $r->nama;
    $data['siswa_valid'] = TRUE;

    $this->session->set_userdata($data);
    // $this->session->set_flashdata(md5('notification'), "Berhasil Login");
    echo "Sukses Login";
    redirect();
  }
}
