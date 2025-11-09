<?php
session_start(); // <-- permite multi-paso (SESSION) sin romper el flujo de 1 solo form
require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpWord\TemplateProcessor;

$tpl = __DIR__ . '/plantillas/no_profesionales.docx';
if (!is_file($tpl)) {
    http_response_code(500);
    exit("❌ No se encontró la plantilla: $tpl");
}

$tp = new TemplateProcessor($tpl);

// Une TODO: lo acumulado en pasos previos + lo recién enviado (si usas 1 solo form, $_SESSION suele estar vacío, no pasa nada)
$datos = array_merge($_SESSION['acta'] ?? [], $_POST ?? []);

// Normalizador (arrays -> "A, B")
$norm = function ($v) {
    return is_array($v) ? implode(', ', array_map('trim', $v)) : trim((string)$v);
};

// Rellena todos los placeholders cuyo nombre coincida con name=""
foreach ($datos as $k => $v) {
    $tp->setValue($k, $norm($v));
}

// Asegura SI/NO en mayúsculas si existen estos radios
foreach (['recuperacion', 'actualizacion'] as $r) {
    if (isset($datos[$r])) $tp->setValue($r, strtoupper($norm($datos[$r])));
}

// Guardar y descargar
$outDir = __DIR__ . '/salida';
if (!is_dir($outDir)) mkdir($outDir, 0775, true);

$out = $outDir . '/Acta_Inspeccion_' . date('Ymd_His') . '.docx';
$tp->saveAs($out);

header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment; filename="' . basename($out) . '"');
header('Content-Length: ' . filesize($out));
readfile($out);

// Si fue un flujo multi-paso, limpia sesión para iniciar un nuevo registro
session_destroy();
