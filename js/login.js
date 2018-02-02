$( document ).ready(function() {

  //var base_url = "http://localhost/muebleriaarroyo";
  var base_url = "http://muebleriaarroyosarchi.com";

  $("#btn_ingresar").click(function(){
    var username = $("#username").val();
    var password = $("#password").val();
    if(username && password){
      validarLogIn(username, password);
    }else{
      Materialize.toast('Debe ingresar todos los datos', 4000);
    }
  });

  function validarLogIn(usuario, contrasena){
    var url = base_url+"/php/LogIn.php";
    var formdata = {username:usuario,password:contrasena};

    $.ajax({
      type: "POST",
      url: url,
      data: formdata,
      dataType: "json",
      success: function(data){
        if(data){
          window.location.replace(base_url+data);
        }else{
          Materialize.toast('Nombre de usuairo o contraeña incorrectos', 4000);
        }
      },
      error: function(jqXHR, textStatus, errorThrown, data){
        console.log(errorThrown);
      }
    });
  }

});
