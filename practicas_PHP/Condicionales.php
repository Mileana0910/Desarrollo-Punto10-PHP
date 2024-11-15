<?php
$edad = 27;
// IF-ELSE
if ($edad >= 18) {
    echo "Eres mayor de edad.<br>";
} else {
    echo "Eres menor de edad.<br>";
}
// SWITCH
switch ($edad) {
    case 18:
        echo "Tienes exactamente 18 años.<br>";
        break;
    default:
        echo "No tienes 18 años.<br>";
}

// Operador ternario
$resultado = ($edad >= 18) ? 'Mayor' : 'Menor';
echo $resultado;

// Null coalesce operator (PHP 7)
$username = $_GET['user'] ?? 'invitado';

// Spaceship operator (PHP 7)
echo(1 <=> 2); // Devuelve -1 porque 1 es menor que 2.

