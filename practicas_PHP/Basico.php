<?php
// 1. Manejo de Impresión por pantalla
echo " 1. Manejo de Impresión <br>";

// Ejemplo de echo (puede imprimir múltiples argumentos)
echo "Hola", " ", "Mundo", "<br>";

// Ejemplo de print (solo puede imprimir un argumento)
print "Hola Mundo con print<br>";

// Ejemplo de var_dump (muestra tipo de dato y valor)
$numero = 42;
var_dump($numero); // muestra: int(42)

// Ejemplo de print_r (más legible para arrays)
$array = ["Milena", "Ana", "Jeimmy"];
print_r($array);

// 2. Variables, constantes y tipado
echo "<br>2. Variables y Constantes <br>";

// Variables
$nombre = "Milena";
$edad = 27;
echo "Mi nombre es: $nombre <br>";
echo "Mi edad es: $edad <br>";

// Constantes
define('PI', 3.14159);
echo PI ," VALOR DE PI <br>";
const GRAVEDAD = 9.81;
echo GRAVEDAD," VALOR DE GRAVEDAD <br>";

// Tipado fuerte (declare)
//declare(strict_types=1);

// Función con tipado fuerte
function suma(int $a, int $b): int
{
    return $a + $b;
} echo suma(10,10), " Suma";

// 3. Tipos de Datos
echo "<br><br>3. Tipos de Datos <br>";

// Booleano
$verdadero = true;
$falso = false;
echo $verdadero,$falso," Booleano <br>";
// Entero
$entero = 22;
echo $entero, " Entero<br>";
// String
$cadena = "Hola, soy Milena!!";
echo $cadena, " = Cadena/String<br>";
// Float
$decimal = 2.55;
echo $decimal, " Float<br>";
// Null
$nulo = null;

// Array
$frutas = ["Manzana", "Pera", "Uva"];
echo $frutas[0], "<br>";
echo $frutas[1], "<br>";
echo $frutas[2], "<br>";
echo "Tipo de dato Array<br>";
// Objeto
echo "<br>Objeto<br>";
class Persona
{
    public $nombre;
}
$persona = new Persona();
echo $persona->nombre, "Milena<br>";
// Conversión de datos
echo "<br>Conversión de datos <br>";
$numero_string = "42";
$numero_convertido = (int)$numero_string;
echo $numero_convertido, " Se convirtio el número que anteriormente era cadena a int <br>";
// 4. Arrays
echo "<br> 4. Arrays <br>";
// Array indexado
$colores = ["Rojo", "Verde", "Azul"];
echo $colores[0], ", Array Inexado<br>";
// Array asociativo
echo "<br>Array Asociativo<br>";
$edades = [
    "Juan" => 25,
    "María" => 30,
    "Pedro" => 35
];
echo $edades["Juan"], " años, Esta es la edad de Juan<br>";
echo $edades ["María"], " años, Esta es la edad de María <br>";
foreach ($edades as $nombre => $edad) {echo $nombre. $edad. "; <br>";}
// Array multidimensional
echo "<br>Array Multidimensional<br>";
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
print_r($matriz);
foreach ($matriz as $elemento) {foreach ($elemento as $key => $value) {echo $key. $value ."<br>";}}
// Concatenación
echo "<br>Concatenación:<br>";
$nombre = "Ana Milena";
$apellido = "Vásquez Tovar";
$nombre_completo = $nombre . " " . $apellido;
echo "Mi nombre completo es: ", $nombre_completo,"<br>";

/*
  Esto es un comentario
  multilínea
*/
// Esto es un comentario de una línea

// Operadores
echo "<br>Operadores<br>";
$a = 10;
$b = 5;
echo $a," ; ", $b, " Los número son <br>";
echo $a + $b . " SUMA<br>";  // Suma
echo $a - $b . " RESTA<br>";  // Resta
echo $a * $b . " MULTIPLICACION<br>";  // Multiplicación
echo $a / $b . " DIVISION<br>";  // División
echo $a % $b . " MODULO<br>";  // Módulo