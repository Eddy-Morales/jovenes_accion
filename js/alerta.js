// Base URL de la aplicación (ajusta si despliegas en otra ruta)
const APP_BASE = '';

$(document).ready(function () {
  $("#loginForm").on("submit", function (e) {
    e.preventDefault();

    let correo = $("#login_correo").val();
    let contrasena = $("#login_contrasena").val();

    if (correo === "" || contrasena === "") {
      Swal.fire({
        icon: "warning",
        title: "Campos vacíos",
        text: "Por favor complete todos los campos antes de continuar.",
      });
      return;
    }

    $.ajax({
      url: APP_BASE + "/php/Login_usuarios.php",
      type: "POST",
      data: { correo, contrasena },
      dataType: "json",
      success: function (respuesta) {
        if (respuesta.status === "ok") {
          Swal.fire({
            icon: "success",
            title: "¡Bienvenido!",
            text: respuesta.message,
            showConfirmButton: false,
            timer: 2000,
          }).then(() => {
            window.location.replace(APP_BASE + "/SeleccionEscuelas.php");
          });
        } else if (respuesta.status === "no") {
          Swal.fire({ icon: "error", title: "Error", text: respuesta.message });
        } else if (respuesta.status === "no_usuario") {
          Swal.fire({ icon: "error", title: "Usuario no encontrado", text: respuesta.message });
        } else if (respuesta.status === "vacio") {
          Swal.fire({ icon: "warning", title: "Campos vacíos", text: respuesta.message });
        } else {
          console.warn("Respuesta inesperada:", respuesta);
        }
      },
      error: function (xhr, status, err) {
        console.error("AJAX error:", status, err, xhr.responseText);
        Swal.fire({
          icon: "error",
          title: "Error de conexión",
          text: "No se pudo procesar la solicitud. Revisa la consola y Network.",
        });
      },
    });
  });
});

// REGISTROS
$(document).ready(function () {
  $("#registroForm").on("submit", function (e) {
    e.preventDefault();

    let nombre = $("#reg_nombre").val().trim();
    let usuario = $("#reg_usuario").val().trim();
    let correo = $("#reg_correo").val().trim();
    let contrasena = $("#reg_contrasena").val().trim();

    if (nombre === "" || usuario === "" || correo === "" || contrasena === "") {
      Swal.fire({ icon: "warning", title: "Campos vacíos", text: "Por favor complete todos los campos." });
      return;
    }

    $.ajax({
      url: APP_BASE + "/php/Registro_Usuarios.php",
      type: "POST",
      data: { nombre, usuario, correo, contrasena },
      dataType: "json",
      success: function (respuesta) {
        if (respuesta.status === "ok") {
          Swal.fire({ icon: "success", title: "Registro exitoso", text: respuesta.message, showConfirmButton: false, timer: 2000 })
            .then(() => {
              $("#registroForm")[0].reset();
              window.location.replace(APP_BASE + "/index.php");
            });
        } else {
          Swal.fire({ icon: "error", title: "Error", text: respuesta.message });
        }
      },
      error: function (xhr, status, err) {
        console.error("AJAX error:", status, err, xhr.responseText);
        Swal.fire({ icon: "error", title: "Error de conexión", text: "No se pudo procesar la solicitud." });
      },
    });
  });
});