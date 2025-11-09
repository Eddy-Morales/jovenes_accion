<?php
session_start();
require 'conexion_be.php';

// Variables del formulario
$nombre = $_POST['nombre'] ?? '';
$tipo_usuario = $_POST['usuario'] ?? '';
$correo = $_POST['correo'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validación básica
if (!$nombre || !$tipo_usuario || !$correo || !$contrasena) {
    echo json_encode(["status" => "error", "message" => "Todos los campos son obligatorios"]);
    exit;
}

// Encriptar contraseña
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Consulta segura
$stmt = $conexion->prepare("INSERT INTO Usuarios (Nombre, Tipo_Usuario, Correo, Contrasena) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $tipo_usuario, $correo, $contrasena_hash);

// Ejecutar y devolver JSON en lugar de redirección
if ($stmt->execute()) {
    echo json_encode(["status" => "ok", "message" => "Registro exitoso"]);
} else {
    if ($conexion->errno == 1062) { // correo duplicado
        echo json_encode(["status" => "error", "message" => "El correo ya está registrado"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error al registrar usuario: " . $conexion->error]);
    }
}

$stmt->close();
$conexion->close();
