<?php
session_start();

if(!isset($_SESSION['username'])) {
  header('Location:  ' .'login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta name="description" content="Muebleria Arroyo Sarchí, Fabricantes de Muebles">
  <meta name="keywords" content="Muebles,Muebleria,Arroyo,Sarchi,Forniture">
  <meta name="author" content="Michael Pérez">
  <meta property="og:image" content="http://muebleriaarroyosarchi.com/img/pagescreen.png"/>
  <link rel="icon" href="img/LogoMueblería-01.png">
  <title>Muebleria Arroyo</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <nav class="brown lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo"><i class="tiny material-icons left"><img src="img/LogoMueblería-01.png" class="responsive-img logo-muebleria"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href=""><i class="material-icons left">account_circle</i><?=$_SESSION['username']?></a></li>
        <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/php/LogIn.php?logout=true"><i class="material-icons right">close</i>Cerrar Sesión</a></li>
      </ul>

      <ul id="slide-out" class="side-nav">
        <li><div class="user-view">
          <div class="background">
            <img src="img/slider-4.jpg">
          </div>
          <a href="#!user"><img class="circle" src="img/LogoMueblería-01.png"></a>
          <a href="#!name"><span class="white-text name"><?=$_SESSION['username']?></span></a>
          <a href="#!email"><span class="white-text email"></span></a>
        </div></li>
        <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/php/LogIn.php?logout=true"><i class="material-icons right">close</i>Cerrar Sesión</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="overlay overlay-modal" id="overlay-actualizacionPersona">
    <div class="row">
      <div class="preloader-wrapper active">
        <div class="spinner-layer spinner-red-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div><div class="gap-patch">
            <div class="circle"></div>
          </div><div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <main class="container">
    <div class="row">
      <div class="col s12">
        <h4 class="bold header center teal-text" id="titulo">Administración de la Galería</h4>
      </div>
      <div class="col s12">
        <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons left">add_a_photo</i>Agregar imagen a la galeria</a>
      </div>
    </div>
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Agregar Imagen a la Galeria</h4>
        <div class="row">
          <div class="input-field col s12">
            <select>
              <option value="0" disabled selected>Carpeta</option>
              <option value="Alacenas">Alacenas</option>
              <option value="Bibliotecas">Bibliotecas</option>
              <option value="Camas">Camas</option>
              <option value="Chimeneas">Chimeneas</option>
              <option value="Closet">Closet</option>
              <option value="Comodas">Comodas</option>
              <option value="Cunas">Cunas</option>
              <option value="Escritorios">Escritorios</option>
              <option value="Juegos de Comedor">Juegos de Comedor</option>
              <option value="Muebles de Sala">Muebles de Sala</option>
              <option value="Mesas">Mesas</option>
              <option value="Muebles de Cocina">Muebles de Cocina</option>
              <option value="Puertas">Puertas</option>
              <option value="Puertas">Puertas</option>
              <option value="Sillas">Sillas</option>
            </select>
            <label>Seleccione la carpeta donde desea agregar la imagen</label>
          </div>
          <div class="col s12">
            <div class="file-field input-field">
              <div class="btn">
                <span>Cargar Imagen</span>
                <input type="file" id="archivofoto">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" id="nombre-archivo" type="text">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col s12 center">
            <img src="img/img-default.jpg" alt="" width="250px" id="photo-preview">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action waves-effect waves-green btn" id="btnAgregarImagen"><i class="material-icons left">check</i>Agregar Imagen</a>
        <a href="#!" class="modal-action modal-close waves-effect red waves-red btn"><i class="material-icons left">close</i>Cerrar</a>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <ul class="collapsible" data-collapsible="accordion">
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Alacenas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Bibliotecas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Camas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Chimeneas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Closet</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Comodas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Cunas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Escritorios</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Juegos de Comedor</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Muebles de Sala</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Mesas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Muebles de Cocina</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Puertas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Puertas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
          <li class="carpeta" data-cargado="0">
            <div class="collapsible-header"><i class="material-icons">photo</i>Sillas</div>
            <div class="collapsible-body">
              <div class="row">

              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

  </main>
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Sobre Nosotros</h5>
          <p class="grey-text text-lighten-4">Ubicados en la cuna Artesanía de Costa Rica, en Sarchí, contamos con mas de 20 años de experiencia en la fabricación de muebles,
            utilizando las mejores maderas y abacabados, con los mejores precios del mercado. Buscando siempre ofrecer el mejor servicio al cliente para satisfacer sus necesidades, estamos para servirles.</p>


          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Contactenos</h5>
            <ul class="contactenos">
              <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/muebleriaarroyo/" target="_blank"><i class="tiny material-icons left" style="width:28px;"><img src="img/facebook-2.png" class="responsive-img"></i>facebook</a></li>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="small material-icons left">phone</i>6020-3566 / 6450-7470</a></li>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="small material-icons left">mail</i>muebleriaarroyo@hotmail.es</a></li>
              <li><a class="grey-text text-lighten-3" href="#!"><i class="small material-icons left">room</i>Sarchi, Alajuela</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          Made by <a class="teal-text text-lighten-3" href="http://perezmurillo.com">Michael Pérez</a>
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/galeria.js"></script>
    <script src="js/admin-galeria.js"></script>
  </body>
  </html>
