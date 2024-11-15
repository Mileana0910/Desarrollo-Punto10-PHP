<?php
function multiplicar($a, $b = 2)
{ // Parámetro por defecto
    return $a * $b;
}
echo multiplicar(5);
echo "<br>";
function sumar(...$numeros)
{ // Argumentos variables
    return array_sum($numeros);
}
echo sumar(98, 12, 10);
echo "<br>";
function referencia(&$valor)
{ // Parámetro por referencia
    $valor += 10;
}
$num = 5;
referencia($num);
echo $num;

