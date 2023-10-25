<?php
$numerosAleatorios = array();
$numerosAleatorios = rellenar($numerosAleatorios);
if (isset($_GET["elegido"])) {
    $numeroElegido = $_GET["elegido"];
    $resultado = 0;
    $resultado = verRepeticiones($numerosAleatorios, $resultado, $numeroElegido);
}


function verRepeticiones($numerosAleatorios, $resultado, $numeroElegido)
{
    foreach ($numerosAleatorios as $num) {
        if ($num == $numeroElegido) {
            $resultado++;
        }
    }
    return $resultado;
}

function rellenar($numerosAleatorios)
{
    for ($i = 0; $i < 20; $i++) {
        $numeroAleatorio = rand(0, 10);
        array_push($numerosAleatorios, $numeroAleatorio);
    }
    return $numerosAleatorios;
}


include "index.view.php";
