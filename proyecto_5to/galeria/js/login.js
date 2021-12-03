$(document).ready(function () {
  $("#enviarLogin").click(() => {
    $.ajax({
      url: "http://localhost/proyecto/proyecto_5to/galeria/php/login.php",
      data: {
        usuario: $("#loginUsuario").val(),
        clave: $("#loginClave").val(),
      },
      type: "post",
      success: function (result) {
        if (result === "ok") {
          window.location.href = "./subir.php";
        }
      },
    });
  });
});
