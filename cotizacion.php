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
        <li><a href="index.html"><i class="material-icons left">home</i>Inicio</a></li>
        <li><a href="galeria.html"><i class="material-icons left">perm_media</i>Galería</a></li>
        <li><a href="ubicacion.html"><i class="material-icons left">room</i>Ubicación</a></li>
        <li><a href="cotizacion.php"><i class="material-icons left">receipt</i>Cotizaciones</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.html"><i class="material-icons left">home</i>Inicio</a></li>
        <li><a href="galeria.html"><i class="material-icons left">perm_media</i>Galería</a></li>
        <li><a href="ubicacion.html"><i class="material-icons left">room</i>Ubicación</a></li>
        <li><a href="cotizacion.php"><i class="material-icons left">receipt</i>Cotizaciones</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="overlay" id="overlay-actualizacionPersona">
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
      <div class="col s12 center">
        <h4 class="bold header center teal-text">Cotización</h4>
        <br>
        <span class="thin">Para hacer una cotización, por favor ingrese las especificaciones sobre el tipo de mueble y sus medidas respectivamente!.<br>
        </span><span class="bold">El correo y número de teléfono</span><span class="thin"> se utilizaran para responder la cotización, gracias.</span>
      </div>
    </div>
    <div class="row">
      <form class="col s12" id="form-cotizacion">
        <div class="row">
          <div class="input-field col s12 m6 l4">
            <input id="name" type="text" class="validate">
            <label for="name"><i class="material-icons left">account_circle</i>Nombre Completo</label>
          </div>
          <div class="input-field col s12 m6 l4">
            <input id="telephone" type="tel" class="validate">
            <label for="telephone"><i class="material-icons left">phone</i>Teléfono</label>
          </div>
          <div class="input-field col s12 m12 l4">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="email invalido" data-success="email valido"><i class="material-icons left">mail</i>Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea" class="materialize-textarea"></textarea>
            <label for="textarea">Especificaciones del Mueble!</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select multiple>
              <option value="" disabled selected>Seleccione la madera</option>
              <option value="Todas las maderas">Todas las maderas</option>
              <option value="Guanacaste">Guanacaste</option>
              <option value="Cenizaro">Cenizaro</option>
              <option value="Melina">Melina</option>
              <option value="Cedro">Cedro</option>
              <option value="Laurel">Laurel</option>
              <option value="Melamina">Melamina</option>
            </select>
            <label>Seleccione los tipos de madera</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 l12">
            <input id="photo-link" type="text">
            <label for="photo-link"><i class="material-icons left">insert_link</i>Ingrese el link o seleccione una imagen.</label>
          </div>
          <!--<div class="file-field input-field col s12 l2 center-align">
            <div class="btn" style="width:100%;">
              <span>Cargar Imagen</span>
              <input type="file" id="archivofoto">
            </div>
          </div>-->
        </div>
        <div class="row">
          <div class="col s12 center">
            <img src="img/img-default.jpg" alt="" width="250px" id="photo-preview">
          </div>
        </div>
        <div class="row">
          <div class="col s12 l3 ruta">
            <a class="waves-effect waves-light btn tarragonGreen btn-large" id="btnEnviarCotizacion" style="width:100%"><i class="material-icons right">done_all</i>Enviar Cotización</a>
          </div>
        </div>
      </form>
      <div class="loading-spinner modal">
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
  </main>
  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Sobre Nosotros</h5>
          <p class="grey-text text-lighten-4">Hubicados en la cuna Artesania de Costa Rica, en Sarchí, contamos con mas de 20 años de experiencia en la fabricacion de muebles, utilizando las mejores maderas y abacabados,
            con los mejores precios del mercado. Buscando siempre ofrecer el mejor servicio al cliente para satisfacer sus nececidades, estamos para servirles.</p>

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
    <script src="js/cotizacion.js"></script>
  </body>
  </html>
