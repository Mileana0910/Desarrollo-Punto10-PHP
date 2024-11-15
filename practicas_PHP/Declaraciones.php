<?php
// Fuerte tipado (usando declare)
declare(strict_types=1);
function suma(int $a, int $b): int {
    echo "El resultado de la suma es: $a + $b = ";
    return $a + $b;
}
echo suma(95, 38 );// Correcto
// echo suma(5.5, 10); // Error: Argumento debe ser un entero.

// Declaración de variable
$nombre = "Milena"; // Tipado débil
$apellido = "Vásquez <br>";
echo "<br>Mi nombre es: $nombre $apellido";

// Declaración de constante
define("Edad", 27);
echo Edad;



