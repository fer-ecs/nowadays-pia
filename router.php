<?php
// router.php para entorno local
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path = ltrim($path, '/');

// Si la ruta está vacía o es "inicio", carga index.php
if ($path == '' || $path == 'inicio') {
    require 'index.php';
    return true;
}

// Si existe el archivo con .php, cárgalo
if (file_exists(__DIR__ . '/' . $path . '.php')) {
    require __DIR__ . '/' . $path . '.php';
    return true;
}

// Si es un archivo estático (css, js, img), déjalo pasar
if (file_exists(__DIR__ . '/' . $path)) {
    return false;
}

// Si no encuentra nada, error 404
http_response_code(404);
echo "404 Not Found";
?>