<?php
$file = $_POST["ruta"];
if (!unlink('../img/'.$file)){
  echo false;
}else{
  echo true;
}
?>
