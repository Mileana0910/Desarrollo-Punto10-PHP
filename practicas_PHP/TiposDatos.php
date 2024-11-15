<?php
// TIPOS DE DATOS
$booleano = true; // Booleano
$entero = 27; // Int
echo $entero;
$cadena = "<br>Hola, Soy Milena <br>"; // String
echo $cadena;
$flotante = 2.85; // Float
echo $flotante;
$nulo = null; // Null
echo $nulo;
$nan = acos(2); // NaN
echo $nulo;

// Arrays e iterables
$nombres = ["<br>Milena<br>", "Ana<br>", "Jeimmy<br>"]; //Array
echo $nombres[0];
echo $nombres[1];
echo $nombres[2];
$asociativo = ["clave" => "valor"];
$beer = [
    "nombre" => "Corona <br>",
    "alcohol" => 4.5,
    ];
echo $beer["nombre"];
var_dump($beer);

// Conversión de datos
$numeroComoCadena = (string)$entero; //Se está asignando a
// la variable $numeroComoCadena el valor de $entero,
// pero antes se convierte a una cadena de texto usando (string).