Crea una aplicación que genere un array con 20 números aleatorios con valores entre 1 y
999, utilizando la función random_int(1, 999) para generar los valores. A continuación
recorre el array utilizando la sentencia foreach y muestra por pantalla el valor más alto y el
más bajo.

<?php
$arrayRandom = [];
for ($x = 0; $x < 20; $x++) {
    $arrayRandom[$x] = random_int(1, 999);
}

include "ejercicio31.view.php";
