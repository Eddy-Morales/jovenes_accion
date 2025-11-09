<?php
session_start();

function norm_val($v)
{
    return is_array($v) ? implode(', ', array_map('trim', $v)) : trim((string)$v);
}

function save_post_to_session(): void
{
    if (!isset($_SESSION['acta'])) $_SESSION['acta'] = [];
    foreach ($_POST as $k => $v) {
        $_SESSION['acta'][$k] = $v; // guarda crudo; se formatea al generar
    }
}
