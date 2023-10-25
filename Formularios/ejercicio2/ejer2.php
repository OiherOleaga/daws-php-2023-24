<?php

$n1 = $_GET["num1"];
$n2 = $_GET["num2"];
$operacion = $_GET["operacion"];
$resultado = 0;

switch ($operacion) {
    case 'suma':
        $resultado = $n1 + $n2;
        break;
    case 'resta':
        $resultado = $n1 - $n2;
        break;
    case 'multiplicacion':
        $resultado = $n1 * $n2;
        break;
    case 'division':
        $resultado = $n1 / $n2;
        break;
}
require "index.view.php";
