$( document ).ready(function() {

  var picture = "";
  var nombreImagen = "";//
  var carpeta;
  //var base_url = "http://localhost/muebleriaarroyo";//
  var base_url = "http://muebleriaarroyosarchi.com";// esto lo estoy haciendo local-michael

  $("#btnAgregarImagen").click(function(){
    carpeta = $(".select-dropdown").val();
    picture = $("#photo-preview").attr('src');
    if(nombreImagen && carpeta!="Carpeta"){
      cargarImagen();
    }else{
      Materialize.toast('Debe seleccionar una imagen y una carpeta!', 4000);
    }
  });

  $("body").on("click", ".delete-photo",function(){
    var ruta = $(this).data("src");
    var parent = $(this)[0].parentElement.parentElement;
    //$(parent).hide();
    borrarFoto(ruta, parent);
  });

  function borrarFoto(path, parent){
    desplegar_overlay_cargando(true);
    var url = base_url+"/php/deletePhoto.php";
    var formdata = {ruta:path};

    $.ajax({
      type: "POST",
      url: url,
      data: formdata,
      dataType: "json",
      success: function(data){
        if(data==true){
          Materialize.toast('Imagen eliminada!', 4000);
          $(parent).hide();
        }else{
          Materialize.toast('Lo sentimos, hubo un problema al eliminar la imagen, intente de nuevo mas tarde!', 4000);
        }
      },
      error: function(jqXHR, textStatus, errorThrown){
        Materialize.toast('Lo sentimos, hubo un problema al eliminar la imagen, intente de nuevo mas tarde!', 4000);
      },
      complete: function(data){
        desplegar_overlay_cargando(false);
      }
    });
  }

  function cargarImagen(){
    desplegar_overlay_cargando(true);
    var url = base_url+"/php/guardarImagen.php";
    var formdata = {folder:carpeta,imagen:picture,nombre:nombreImagen};

    $.ajax({
      type: "POST",
      url: url,
      data: formdata,
      dataType: "json",
      success: function(data){
        if(data==true){
          var $toastContent = $('<span>Imagen Guardada! Para ver las nuevas imágenes debe recargar la pagina</span>').add($('<button class="btn-flat toast-action" onclick="location.reload();">Recargar</button>'));
          Materialize.toast($toastContent, 100000);
          $('#modal1').modal('close');
          limpiarCampos();
        }else{
          Materialize.toast('Lo sentimos, hubo un problema al guardar la imagen, intente de nuevo mas tarde!', 4000);
        }
      },
      error: function(jqXHR, textStatus, errorThrown){
        Materialize.toast('Lo sentimos, hubo un problema al guardar la imagen, intente de nuevo mas tarde!', 4000);
      },
      complete: function(data){
        desplegar_overlay_cargando(false);
      }
    });
  }

  $("#photo-preview").error(function() {
    this.onerror = "";
    this.src = "img/img-default.jpg";
    Materialize.toast('No es una imagen', 4000);
    pictureLoaded = false;
  });

  $("#archivofoto").change(function(){
    var preview = document.querySelector('#photo-preview');
    var file    = document.querySelector('#archivofoto[type=file]').files[0];
    if(file!=undefined){
      nombreImagen = file.name;
    }else{
      nombreImagen = "";
    }
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
    $("#archivofoto").val("");
    $("#archivofoto").focus();
    $("#nombre-archivo").val("");
    $("#nombre-archivo").focus();
    $("#photo-preview").attr("src","img/img-default.jpg");
    $("#photo-preview").focus();
    $(".select-dropdown").val("Carpeta");
    $("#titulo").focus();
  }
});
