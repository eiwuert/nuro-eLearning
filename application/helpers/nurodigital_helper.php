<?php


function clean($data, $pil) {
  return mysqli_real_escape_string($data->$pil);
}


?>
