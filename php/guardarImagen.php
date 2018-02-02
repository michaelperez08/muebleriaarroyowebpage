<?php

$imagenBase64 = $_POST['imagen'];
$nombreImagen = $_POST['nombre'];
$carpeta = $_POST['folder'];

if(strcmp(substr($imagenBase64, 0, 10),"data:image")==0){
  $data = $imagenBase64;

  list($type, $data) = explode(';', $data);
  list(, $data)      = explode(',', $data);
  $data = base64_decode($data);

  file_put_contents('../img/'.$carpeta.'/'.$nombreImagen, $data);
  echo true;
}else{
  echo false;
}

?>
