//Desplege del registro de usuario
const loginForm = document.getElementById("loginForm");
const registroForm = document.getElementById("registroForm");
const mostrarRegistro = document.getElementById("mostrarRegistro");
const mostrarLogin = document.getElementById("mostrarLogin");

mostrarRegistro.addEventListener("click", (e) => {
  e.preventDefault();
  loginForm.classList.add("d-none");
  registroForm.classList.remove("d-none");
});

mostrarLogin.addEventListener("click", (e) => {
  e.preventDefault();
  registroForm.classList.add("d-none");
  loginForm.classList.remove("d-none");
});

//cerrar session
  document.getElementById("cerrarSesionBtn").addEventListener("click", function (e) {
    e.preventDefault();
    Swal.fire({
      title: "¿Deseas cerrar la sesión?",
      text: "Tu sesión actual se cerrará.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#3085d6",
      confirmButtonText: "Sí, cerrar sesión",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirigir a tu PHP
        window.location.href = "php/cerrar_session.php";
      }
    });
  });
