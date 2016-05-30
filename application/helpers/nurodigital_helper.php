<?php


// function clean($data, $pil) {
//   return mysqli_real_escape_string($data->$pil);
// }

function siswa_valid() {
  $CI =& get_instance();
  if (!is_login()) {
    $CI->session->set_flashdata(md5('notification'), "Anda harus login terlebih dahulu");
    redirect('login');
    die;
  }
}

function is_login() {
  $CI =& get_instance();
  $session = $CI->session->userdata('siswa_valid')==TRUE;
  if (!empty($session)) {
    return true;
  }
  return false;
}

function statusAkun() {
  if (is_login()) {
    if (!akunAktif()) {
      redirect('siswa/verify');
      die;
    }
  }
}

function akunAktif() {
  $CI =& get_instance();
  $session = $CI->session->userdata('status')=="Aktif";
  if (!empty($session)) {
    return true;
  }
  return false;
}

?>
