<?php
// 9. Inclusión de Archivos
echo "9. Inclusión de Archivos <br>";
// config.php
// include 'config.php';
// require 'config.php';
// include_once 'config.php';
// require_once 'config.php';

// 10. Variables de Servidor
echo "<br> 10. Variables de Servidor <br>";

// $_POST - Para datos enviados por formulario POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'] ?? '';
}

// $_GET - Para datos enviados por URL
$id = $_GET['id'] ?? '';

// $_FILES - Para archivos subidos
if (isset($_FILES['archivo'])) {
    $nombre_archivo = $_FILES['archivo']['name'];
}

// $_SESSION - Para variables de sesión
session_start();
$_SESSION['usuario'] = 'Milena';

// $_COOKIE - Para cookies
setcookie('preferencia', 'dark', time() + 3600);
$preferencia = $_COOKIE['preferencia'] ?? 'light';