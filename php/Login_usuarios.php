<?php
//iniciamos la sesion
session_start();
//incluimos la base de datos 
include 'conexion_be.php'; 
//asignamos variables a los datos 
$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

//realizamos la consulta 
$stmt = $conexion->prepare("SELECT Correo, Contrasena FROM usuarios WHERE Correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

//condicionales de alertas 

if ($result && $result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    if (password_verify($contrasena, $usuario['Contrasena'])) {
        $_SESSION['usuario'] = $usuario['Correo'];

        echo json_encode([
            "status" => "ok",
            "message" => "Inicio de sesión exitoso."
        ]);
        exit;
    } else {
        echo json_encode([
            "status" => "no",
            "message" => "Contraseña incorrecta. Intenta de nuevo."
        ]);
        exit;
    }
} else {
    echo json_encode([
        "status" => "no_usuario",
        "message" => "El usuario no existe o el correo es incorrecto."
    ]);
    exit;
}
