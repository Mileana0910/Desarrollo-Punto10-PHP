<?php
// FOR LOOP
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
$frutas = ["<br>Manzana<br>", "Pera<br>", "Naranja<br>"];
// foreach loop para arrays
foreach ($frutas as $fruta) {
    echo $fruta;
}

// while loop
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}

// do..while loop
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 5);
