<?php


function clean($data, $pil) {
  return mysqli_real_escape_string($data->$pil);
}

function siswa_valid() {
  if (!is_login()) {
    redirect('/url/login');
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

?>
