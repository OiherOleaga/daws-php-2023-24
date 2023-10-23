<?php
$a = $_GET["cad1"];
$b = $_GET["cad2"];
$respuesta = concat($a, $b);

function concat($a, $b = "me llamo alberto")
{
    $cadenasUnidas = $a . $b;

    return $cadenasUnidas;
};
require "ejercicio11.view.php";
