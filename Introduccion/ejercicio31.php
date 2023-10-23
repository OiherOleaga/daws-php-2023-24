
<?php
$arrayRandom = [];
for ($x = 0; $x < 20; $x++) {
    $arrayRandom[$x] = random_int(1, 999);
}

include "ejercicio31.view.php";
