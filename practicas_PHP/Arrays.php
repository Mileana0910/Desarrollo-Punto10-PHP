<?php
// Array indexado
$name = ["Milena<br>", "Jeimmy<br>", "Miryam<br>"];//Se crea una lista ordenada
// de elementos, en este caso, name.
// Cada name puede ser accedido utilizando un índice numérico,
// comenzando desde 0. Por ejemplo, name[0] devolvería "Milena"
// name[1] devolvería "Jeimmy", y name[2] devolvería "Miryam".
// Array multidimensional
echo $name[0]; echo $name[1]; echo $name[2];
// Array asociativo
$persona = [
    "nombre" => "Milena<br>",
    "edad" => 27];
echo $persona["nombre"];echo $persona["edad"];
// Array multidimensional
$beers = [
    ["name", "b"],
    ["c", "d"]
];
// Concatenación de valores
echo $persona["nombre"] . " tiene " . $persona["edad"] . " años.";

// Comentarios en PHP:
// Esto es un comentario de una línea

/*
Esto es un comentario
de múltiples líneas.
*/
?>