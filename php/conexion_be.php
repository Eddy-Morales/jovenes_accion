<?php
// ...existing code...
// Conexión configurable vía variables de entorno (local fallback)
$db_connection = getenv('DB_CONNECTION') ?: 'mysql';
$db_host = getenv('DB_HOST') ?: '127.0.0.1';
$db_user = getenv('DB_USER') ?: 'root';
$db_pass = getenv('DB_PASS') ?: '';
$db_name = getenv('DB_NAME') ?: 'aplicativoant';
$db_port = getenv('DB_PORT') ? intval(getenv('DB_PORT')) : 3306; // <- default 3306

if ($db_connection === 'mysql') {
    $conexion = @mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);
    if (!$conexion) {
        error_log('Error de conexión MySQL: ' . mysqli_connect_error());
        http_response_code(500);
        echo json_encode(['status' => 'error', 'message' => 'Error de conexión a la base de datos.']);
        exit;
    }
    mysqli_set_charset($conexion, 'utf8');
} else {
    error_log('DB_CONNECTION no soportado: ' . $db_connection);
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => 'Motor de BD no soportado.']);
    exit;
}