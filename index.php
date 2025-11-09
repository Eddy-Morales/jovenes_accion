<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login de Usuario</title>

  <!-- Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet">

  <!--CSS -->
  <link rel="stylesheet" href="css/estilo_login.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>

<body>
  <main class="d-flex align-items-center justify-content-center ">
    <div class="contenedor container p-4">
      <!-- Formulario de Login -->
      <form id="loginForm" class="formulario_container" method="post">
        <h1 class="titulo">Bienvenido</h1>
        <p class="parrafo">Ingrese sus datos para continuar</p>

        <div class="input_container">
          <label class="correo">Correo</label>
          <input class="inpute" id="login_correo" name="correo" type="email" placeholder="Correo" />
        </div>

        <div class="input_container">
          <label class="contraseña">Contraseña</label>
          <input class="inpute" id="login_contrasena" name="contrasena" type="password" placeholder="Contraseña" />
        </div>

        <button type="submit" id="login_btn" class="boton">Ingresar</button>

        <p class="parrafo">
          Registrar
          <br><br>
          <a class="enlace" href="#" id="mostrarRegistro">Crear Cuenta</a>
        </p>
      </form>

      <div id="resultado"></div>

      <!-- Formulario de Registro  -->
      <form id="registroForm" class="formulario_container d-none " method="post">
        <h1 class="titulo">Crear Cuenta</h1>
        <p class="parrafo">Complete los datos para registrarse</p>

        <div class="input_container">
          <label class="correo">Nombre completo</label>
          <input class="inpute" id="reg_nombre" name="nombre" type="text" placeholder="Nombre completo" />
        </div>

        <div class="input_container">
          <label class="correo">Usuario</label>
          <input class="inpute" id="reg_usuario" name="usuario" type="text" placeholder="Tipo de Usuario" />
        </div>

        <div class="input_container">
          <label class="correo">Correo</label>
          <input class="inpute" id="reg_correo" name="correo" type="email" placeholder="Correo" />
        </div>

        <div class="input_container">
          <label class="contraseña">Contraseña</label>
          <input class="inpute" id="reg_contrasena" name="contrasena" type="password" placeholder="Contraseña" />
        </div>

        <button type="submit" id="registro_btn" class="boton">Registrar</button>

        <p class="parrafo">
          ¿Ya tiene una cuenta?
          <br><br>
          <a class="enlace" href="#" id="mostrarLogin">Iniciar Sesión</a>
        </p>
      </form>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/script.js"></script>
  <script src="js/alerta.js"></script>


</body>

</html>