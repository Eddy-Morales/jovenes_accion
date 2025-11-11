<?php
// Conexión configurable vía variables de entorno (local fallback)
$db_connection = getenv('DB_CONNECTION') ?: 'mysql';

// Allow full connection URI (Render "Connection URI") via DATABASE_URL or DB_URL
$dbUrl = getenv('DATABASE_URL') ?: getenv('DB_URL') ?: getenv('CONNECTION_URI');

if ($dbUrl) {
    $parts = parse_url($dbUrl);
    // parse_url handles: scheme://user:pass@host:port/dbname
    $scheme = $parts['scheme'] ?? 'mysql';
    $db_connection = $scheme === 'postgres' ? 'pgsql' : 'mysql';
    $db_host = $parts['host'] ?? '127.0.0.1';
    $db_port = isset($parts['port']) ? intval($parts['port']) : ($db_connection === 'pgsql' ? 5432 : 3306);
    $db_user = isset($parts['user']) ? urldecode($parts['user']) : 'root';
    $db_pass = isset($parts['pass']) ? urldecode($parts['pass']) : '';
    $db_name = isset($parts['path']) ? ltrim($parts['path'], '/') : 'aplicativoant';
} else {
    $db_host = getenv('DB_HOST') ?: '127.0.0.1';
    $db_user = getenv('DB_USER') ?: 'root';
    $db_pass = getenv('DB_PASS') ?: '';
    $db_name = getenv('DB_NAME') ?: 'aplicativoant';
    $db_port = getenv('DB_PORT') ? intval(getenv('DB_PORT')) : 3306;
}

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