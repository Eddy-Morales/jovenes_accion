<?php
header('Content-Type: application/json; charset=utf-8');
session_start();
require __DIR__ . '/conexion_be.php';

$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

if ($correo === '' || $contrasena === '') {
    echo json_encode(['status' => 'vacio', 'message' => 'Complete los campos.']);
    exit;
}

if (!($stmt = $conexion->prepare("SELECT Correo, Contrasena FROM usuarios WHERE Correo = ?"))) {
    error_log('Prepare failed: ' . $conexion->error);
    echo json_encode(['status' => 'error', 'message' => 'Error interno.']);
    exit;
}

$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows === 1) {
    $usuario = $result->fetch_assoc();
    if (password_verify($contrasena, $usuario['Contrasena'])) {
        $_SESSION['usuario'] = $usuario['Correo'];
        echo json_encode(["status" => "ok", "message" => "Inicio de sesión exitoso."]);
    } else {
        echo json_encode(["status" => "no", "message" => "Contraseña incorrecta."]);
    }
} else {
    echo json_encode(["status" => "no_usuario", "message" => "Usuario no encontrado."]);
}
$stmt->close();