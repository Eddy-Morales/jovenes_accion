<?php
// ...existing code...
require __DIR__ . '/common.php';
save_post_to_session();

// Obtener y normalizar next
$next = $_GET['next'] ?? '/AplicativoANT/no-profesionales/Info_general.php';

// Validar que next sea una ruta interna del proyecto
$allowed_prefix = '/AplicativoANT';
if (strpos($next, $allowed_prefix) !== 0) {
    $next = '/AplicativoANT/no-profesionales/Info_general.php';
}

header("Location: $next");
exit;