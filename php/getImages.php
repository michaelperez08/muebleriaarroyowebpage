<?php
  //(glob("../img/*.*"));
  $carpeta = $_POST["carpeta"];

  $listaImagenes = array();
  foreach(glob("../img/".$carpeta."/".'*') as $filename){
    array_push($listaImagenes, basename($filename));
  }
  //echo json_encode($carpeta);
  echo json_encode($listaImagenes);

?>
