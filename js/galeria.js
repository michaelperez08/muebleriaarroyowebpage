$( document ).ready(function() {

  //var base_url = "http://localhost/muebleriaarroyo";
  var base_url = "";
  var widthImg = 0;
  var listaCarpetas = new Array();

  $(".carpeta").click(function(){
    var cargado = $(this).data("cargado");
    if(!cargado){
      obtenerImagenesPorCarpeta(this);
    }
  });

  function obtenerImagenesPorCarpeta(liCarpeta){
    var divHeder = liCarpeta.children[0];
    var nombreCarpeta = $(divHeder).text();
    nombreCarpeta = nombreCarpeta.substring(5);
    var url = base_url+"/php/getImages.php";
    var formdata = {carpeta:nombreCarpeta};

    $.ajax({
      type: "POST",
      url: url,
      data: formdata,
      dataType: "json",
      success: function(data){
        cargarElementos(data, liCarpeta, nombreCarpeta);
      },
      error: function(jqXHR, textStatus, errorThrown){

      }
    });
  }

  function cargarElementos(arrayImagenes, liCarpeta, nombreCarpeta){
    var divRow = liCarpeta.children[1].children[0];
    $(liCarpeta).data("cargado",1);
    arrayImagenes.forEach(function(element){
      var divCol = document.createElement('div');
      divCol.className = 'col l3 m4 s6 mt-2 ';
      var divMPH = document.createElement('div');
      divMPH.className = 'material-placeholder';
      var img = document.createElement('IMG');
      img.className = 'materialboxed img-galeria';
      $(img).attr("src","img/"+nombreCarpeta+"/"+element);

      if($("#titulo").text()=="Administración de la Galería"){
        var a = document.createElement("a");
        a.className = "btn-floating btn-large waves-effect waves-light red delete-photo";
        a.setAttribute("data-src",nombreCarpeta+"/"+element);
        var i = document.createElement("i");
        i.className = "material-icons";
        i.appendChild(document.createTextNode("close"));
        a.appendChild(i);
        divMPH.appendChild(a);
      }

      divMPH.appendChild(img);
      divCol.appendChild(divMPH);
      divRow.appendChild(divCol);
    });
    $('.materialboxed').materialbox();
    if(widthImg==0){
      widthImg = $(".img-galeria").width();
    }
    $(".material-placeholder").css("height",widthImg);
  }


});
