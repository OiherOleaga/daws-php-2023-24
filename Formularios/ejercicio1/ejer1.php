<?php

$temperatura = $_POST["temp"];
$unidad = $_POST["unidad"];

if ($unidad == "Celsius") {
    $temperatura = ($temperatura * (9 / 5)) + 32;
} else
    $temperatura = ($temperatura - 32) * (5 / 9);
include "index.view.php";
