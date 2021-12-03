$(document).ready(function () {
  $("#enviarRegistro").click(() => {
    $.ajax({
      url: "http://localhost/proyecto/proyecto_5to/galeria/php/registro.php",
      data: {
        usuario: $("#regUsuario").val(),
        clave: $("#regClave").val(),
      },
      type: "post",
      success: function (result) {
        if (result === "ok") {
          $("#out").html("El registro fue un exito");
          $("#registro").modal("toggle");
        }
      },
    });
  });
});
