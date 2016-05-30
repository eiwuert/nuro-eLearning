<?php
if ($file) {
    if (file_exists('application/views/home/pages/'.$file.'.php')==TRUE) {
      $this->load->view('home/pages/'.$file);
    } else {
      echo "Halamaan tidak ditemukan";
    }
  } else {
    echo "Halaman tidak ditemukan";
  }
?>
