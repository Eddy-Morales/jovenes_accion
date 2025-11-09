<?php
// CONEXION CON LA BASE DE DATOS
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';         // si tu root no tiene contraseña déjalo vacío
$db_name = 'aplicativoant';
$db_port = 3307;       // <-- ajusta aquí al puerto que configuraste

$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);
if (!$conexion) {
    die('Error de conexión: ' . mysqli_connect_error());
}
$conexion->set_charset('utf8');