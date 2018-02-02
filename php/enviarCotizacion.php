<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombre = $_POST["nombre"];
$email = $_POST["correo"];
$telefono = $_POST["telefono"];
$detalle = $_POST["detalle"];
$maderas = $_POST["maderas"];
$imagen = $_POST["imagen"];

$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";

/*$message = '<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<body style="font-family: sans-serif; font-size: 1.4em; margin: 0 auto; width: 100%;">
	<div id="header">
		<div style="color: white; text-align: center; width: 100%; background-color: #8d6e63 !important; height: 80px; padding-top: 1%;">
			<img src="http://muebleriaarroyosarchi.com/img/LogoMuebleri%CC%81a-01.png" style="width: 5%; float: left; padding: 0 2%;">
			<h2 style="float: left;">Solicitud de Cotización Muebleria Arroyo</h2>
		</div>
		<div id="main" style="width: 100%; float: left; margin-bottom: 2%;">
			<div style="width: 60%; float: left; margin-left: 20%; text-align: center;">
				<h2 style="text-align: center;">Cotización</h2>
				<br>
				<h3>Datos de la cotización</h3>
				<p></p>
				<p>Nombre: '.$nombre.'</p>
				<p>Correo: '.$email.'</p>
				<p>telefono: '.$telefono.'</p>
				<br>
				<h3>Detalles</h3>
				<p>'.$detalle.'</p>
				<p>Maderas: '.$maderas.'</p>
				<img src="'.$imagen.'">
			</div>
		</div>
		<div style="width: 100%; background-color: #009688 !important; color: white; float: left; padding: 0 2%;">
			<p style="text-decoration: none; color: white;">muebleriaarroyosarchi.com</p>
			<p>Sarchi, Alajuela, Costa Rica</p>
		</div>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="http://muebleriaarroyosarchi.com/js/materialize.js"></script>
	</div>
</body>
</html>';*/

$message = '<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<body style="font-family: sans-serif; font-size: 1.4em; margin: 0 auto; width: 100%;">
  <div style="background-color: #8d6e63 !important;color: #fff;width: 100%;margin: 0 auto;height:65px;" role="navigation">
    <div class="nav-wrapper container" style="height: 100%;width:100%;margin:0 auto;">
      <a id="logo-container" href="#" class="brand-logo" style="color: #fff;display: inline-block;font-size: 1.5rem;padding: 0;text-decoration: none;line-height: 64px;">
        <i class="tiny material-icons left" style="margin-right: 15px;float:left">
          <img src="http://muebleriaarroyosarchi.com/img/LogoMuebleri%CC%81a-01.png" style="max-width: 60px;height: auto;">
        </i>
        Solicitud de Cotización
      </a>
    </div>
  </div>

</style>
<div class="container">
  <div id="main" style="width: 100%; float: left; margin-bottom: 2%;">
    <div style="width: 60%; float: left; margin-left: 20%; text-align: center;">
      <h2 style="text-align: center;color: #009688 !important;">Cotización</h2>
      <br>
      <h3 style="color: #009688 !important;">Datos de la cotización</h3>
      <p></p>
      <span style="font-weight:bold;">Nombre: </span><span style="font-weight:200;">'.$nombre.'</span>
			<br>
      <span>Correo: </span><span>'.$email.'</span>
			<br>
			<span>telefono: </span><span>'.$telefono.'</span>
      <br>
      <h3 style="color: #009688 !important;">Detalles</h3>
      <p>'.$detalle.'</p>
      <p>Maderas: '.$maderas.'</p>
      <img src="'.$imagen.'">
    </div>
  </div>
</div>
<div style="width: 100%; background-color: #009688 !important; color: white; float: left; padding: 0 1%;">
  <p style="text-decoration: none; color: white;font-size:20px;">Muebleria Arroyo Sarchí</p>
  <p style="font-size:15px;">Sarchi, Alajuela, Costa Rica</p>
</div>
</body>

</html>
';


mail("michael.pemu@gmail.com","Cotizacion",$message,$headers);
//mail("muebleriaarroyo@hotmail.es","Cotizacion",$message,$headers);

echo json_encode(true);
?>
