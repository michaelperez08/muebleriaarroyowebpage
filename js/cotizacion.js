$( document ).ready(function() {

  var name;
  var telephone;
  var email;
  var especificacion;
  var woods;
  var picture = "";
  var pictureLoaded = false;

  $("#btnEnviarCotizacion").click(function(){
    name = $("#name").val();
    telephone = $("#telephone").val();
    email = $("#email").val();
    especificacion = $("#textarea").val();
    woods = $(".select-dropdown").val();
    if(pictureLoaded){
      picture = $("#photo-preview").attr('src');
    }

    if(name && email && especificacion){
      if(woods == "Seleccione la madera"){
        Materialize.toast('Debe seleccionar las maderas para la cotización', 4000);
      }else{
        enviarEmail();
      }
    }else{
      Materialize.toast('Faltan datos en el formulario', 4000);
    }

  });

  function enviarEmail(){
    desplegar_overlay_cargando(true);
    var url = "http://muebleriaarroyosarchi.com/php/enviarCotizacion.php";
    var formdata = {nombre:name,correo:email,telefono:telephone,detalle:especificacion,maderas:woods,imagen:picture};

    $.ajax({
      type: "POST",
      url: url,
      data: formdata,
      dataType: "json",
      success: function(data){
        Materialize.toast('La cotizacion fue enviada exitosamente, en los proximos dias recibira la respuesta, Gracias!', 4000);
        limpiarCampos();
      },
      error: function(jqXHR, textStatus, errorThrown){
        Materialize.toast('Lo sentimos, hubo un problema al enviar la cotización, intente de nuevo mas tarde!', 4000);
      },
      complete: function(data){
        desplegar_overlay_cargando(false);
      }
    });
  }

  $("#photo-link").focusout(function(){
    var link = this.value.trim();
    var imgwidth = 0;
    if(link){
      pictureLoaded = true;
      $("#photo-preview").attr("src",link);
      imgwidth = $("#photo-preview").width();
    }
  });

  $("#photo-preview").error(function() {
    this.onerror = "";
    this.src = "img/img-default.jpg";
    Materialize.toast('No es una imagen', 4000);
    pictureLoaded = false;
  });

  $("#archivofoto").change(function(){
    var preview = document.querySelector('#photo-preview');
    var file    = document.querySelector('#archivofoto[type=file]').files[0];
    var reader  = new FileReader();

    if (file) {
      reader.readAsDataURL(file);
    }

    reader.addEventListener("load", function () {
      preview.src = reader.result;
    }, false);
    pictureLoaded = true;
  });

  function desplegar_overlay_cargando(desplegar){
        if(desplegar==true){
            document.getElementById("overlay-actualizacionPersona").style.display = "block";
        }else{
            document.getElementById("overlay-actualizacionPersona").style.display = "none";
        }
    }

  function limpiarCampos(){
    $("#name").val("");
    $("#name").focus();
    $("#telephone").val("");
    $("#telephone").focus();
    $("#email").val("");
    $("#email").focus();
    $("#textarea").val("");
    $("#textarea").focus();
    $(".select-dropdown").val("");
    $("#").focus();
  }
});
