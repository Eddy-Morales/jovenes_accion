<?php
session_start();

/* No cache (impide volver con “Atrás” mostrando una copia) */
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

/* Check de sesión */
if (!isset($_SESSION['usuario'])) {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Redirigiendo...</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <script>
            Swal.fire({
                icon: "warning",
                title: "Acceso restringido",
                text: "Por favor, inicia sesión para continuar.",
                confirmButtonText: "Iniciar sesión"
            }).then(() => {
                // replace evita volver con “Atrás”
                window.location.replace("index.php");
            });
        </script>
    </body>

    </html>
<?php
    session_unset();
    session_destroy();
    exit; // MUY importante
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Escuelas de Conducción</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    <script defer>
        // Anti-bfcache: si el usuario vuelve con “Atrás”, recarga.
        window.addEventListener('pageshow', (e) => {
            if (e.persisted) location.reload();
        });
        // Cierre de sesión con SweetAlert2
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('cerrarSesionBtn');
            if (!btn) return;
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                Swal.fire({
                    title: "¿Cerrar la sesión?",
                    text: "Tu sesión actual se cerrará.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Sí, cerrar sesión",
                    cancelButtonText: "Cancelar"
                }).then((res) => {
                    if (res.isConfirmed) {
                        // replace => no deja rastro en el historial
                        window.location.replace("php/cerrar_session.php");
                    }
                });
            });
        });
    </script>
</head>

<body class="bg-gradient-to-br from-green-100 via-blue-100 to-slate-100 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white/60 backdrop-blur-md shadow-md fixed top-0 left-0 w-full z-50">
        <nav class="max-w-5xl mx-auto flex justify-between items-center p-4">
            <h1 class="text-xl font-semibold text-gray-800">Escuelas de Conducción</h1>
            <ul class="flex items-center space-x-4">
                <li>
                    <button id="cerrarSesionBtn" class="text-red-600 hover:text-red-800 font-medium transition">
                        Cerrar sesión
                    </button>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Contenido -->
    <main class="flex flex-1 justify-center items-center gap-10 pt-20">
        <a href="no-profesionales/Info_general.php" class="bg-green-600 hover:bg-green-700 text-white font-medium px-6 py-3 rounded-lg shadow-lg transition">
            No Profesionales
        </a>
        <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg shadow-lg transition">
            Profesionales
        </a>
    </main>

</body>

</html>