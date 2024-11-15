<?php
// 5. Funciones
echo "5. Funciones <br>";

// Función básica
echo "-Básica<br>";
function saludar($nombre)
{
    return "Hola $nombre";
}
echo saludar("Milena<br>");
// Función con parámetro por referencia
echo "-Función con parámetro por referencia<br>";
$numero = 5;
echo "Número antes de incrementar: $numero<br>";
function incrementar(&$numero)
{
    $numero++;
}
incrementar($numero);
echo "Número despues de incrementar: $numero<br>";

// Función con parámetro por defecto
echo "-Función con parámetro por defecto<br>";
function saludarConIdioma($nombre, $idioma = "es")
{
    if ($idioma == "es") return "Hola $nombre";
    return "Hello $nombre";
}
echo saludarConIdioma("Milena<br>");
// Función con tipado fuerte
echo "-Función con tipado fuerte<br>";
function multiplicar(int $a, int $b): int
{
    return $a * $b;
}
echo multiplicar(2, 2);
// Función con argumentos variables
echo "<br>-Función con argumentos variables<br>";
function sumarTodos(...$numeros)
{
    return array_sum($numeros);
}
echo sumarTodos(2,5,6,8);
// 6. Condicionales
echo "<br>6. Condicionales <br>";

// if-else
echo "-IF-ELSE<br>";
$edad = 12;
if ($edad >= 18) {
    echo "Es mayor de edad<br>";
} else {
    echo "Es menor de edad<br>";
}

// switch
echo "-SWITCH<br>";
$dia = "domingo";
switch ($dia) {
    case "lunes":
        echo "Primer día<br>";
        break;
    case "martes":
        echo "Segundo día<br>";
        break;
    default:
        echo "Otro día<br>";
}

// Operador ternario
echo "-OPERADOR TERNARIO<br>";
$resultado = ($edad >= 18) ? "Mayor<br>" : "Menor<br>";
echo $resultado;

// Null coalesce
echo "-NULL COALESCE<br>";
$nombre = $_GET['nombre'] ?? "Invitado<br>";
echo $nombre;
// Spaceship operator
echo "-SPACESHIP OPERADOR<br>";
echo 1 <=> 1; // 0 (igual)
echo " Igual<br>";
echo 1 <=> 2; // -1 (menor)
echo " Menor<br>";
echo 2 <=> 1; // 1 (mayor)
echo " Mayor<br>";

// 7. Manejo de Errores
echo "<br> 7. Manejo de Errores <br>";

try {
    $division = 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}

// 8. Ciclos
echo "<br> 8. Ciclos <br>";

// for
echo "- Ciclo For<br>";
for ($i = 0; $i < 5; $i++) {
    echo $i . " ";
}

// foreach
echo "<br>-Ciclo Foreach";
$frutas = ["<br>Manzana", "Pera", "Uva<br>"];
foreach ($frutas as $fruta) {
    echo $fruta . ", ";
}

// while
echo "- Ciclo While<br>";
$contador = 0;
while ($contador < 5) {
    echo $contador++ . " ";
}

// do-while
echo "<br>- Ciclo Do-While<br>";
$contador = 0;
do {
    echo $contador++ . " ";
} while ($contador < 5);

// break y continue
echo "<br>- Ciclo Break y Continue<br>";
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) continue;
    if ($i == 8) break;
    echo $i . " ";
}