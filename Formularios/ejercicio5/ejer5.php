<?php
$productos = [
    "producto1" => [
        "nombre" => "Portátil Dell XPS 13",
        "descripcion" => "Portátil ultradelgado y ligero con pantalla táctil 4K.",
        "precio" => 1299.99
    ],
    "producto2" => [
        "nombre" => "Monitor ASUS ROG Swift PG279Q",
        "descripcion" => "Monitor gaming de alta velocidad de actualización y G-Sync.",
        "precio" => 699.99
    ],
    "producto3" => [
        "nombre" => "Teclado mecánico Corsair K95 RGB Platinum",
        "descripcion" => "Teclado mecánico RGB con interruptores Cherry MX Speed.",
        "precio" => 179.99
    ],
    "producto4" => [
        "nombre" => "Portátil Dell XPS 13",
        "descripcion" => "Portátil ultradelgado y ligero con pantalla táctil 4K.",
        "precio" => 1299.99
    ],
    "producto5" => [
        "nombre" => "Monitor ASUS ROG Swift PG279Q",
        "descripcion" => "Monitor gaming de alta velocidad de actualización y G-Sync.",
        "precio" => 699.99
    ],
    "producto6" => [
        "nombre" => "Teclado mecánico Corsair K95 RGB Platinum",
        "descripcion" => "Teclado mecánico RGB con interruptores Cherry MX Speed.",
        "precio" => 179.99
    ],
    "producto7" => [
        "nombre" => "Portátil Dell XPS 13",
        "descripcion" => "Portátil ultradelgado y ligero con pantalla táctil 4K.",
        "precio" => 1299.99
    ],
    "producto8" => [
        "nombre" => "Monitor ASUS ROG Swift PG279Q",
        "descripcion" => "Monitor gaming de alta velocidad de actualización y G-Sync.",
        "precio" => 699.99
    ],
    "producto9" => [
        "nombre" => "Teclado mecánico Corsair K95 RGB Platinum",
        "descripcion" => "Teclado mecánico RGB con interruptores Cherry MX Speed.",
        "precio" => 179.99
    ],
    "producto10" => [
        "nombre" => "Portátil Dell XPS 13",
        "descripcion" => "Portátil ultradelgado y ligero con pantalla táctil 4K.",
        "precio" => 1299.99
    ],
    "producto11" => [
        "nombre" => "Monitor ASUS ROG Swift PG279Q",
        "descripcion" => "Monitor gaming de alta velocidad de actualización y G-Sync.",
        "precio" => 699.99
    ],
    "producto12" => [
        "nombre" => "Teclado mecánico Corsair K95 RGB Platinum",
        "descripcion" => "Teclado mecánico RGB con interruptores Cherry MX Speed.",
        "precio" => 179.99
    ],
    "producto13" => [
        "nombre" => "Portátil Dell XPS 13",
        "descripcion" => "Portátil ultradelgado y ligero con pantalla táctil 4K.",
        "precio" => 1299.99
    ],
    "producto14" => [
        "nombre" => "Monitor ASUS ROG Swift PG279Q",
        "descripcion" => "Monitor gaming de alta velocidad de actualización y G-Sync.",
        "precio" => 699.99
    ],
    "producto15" => [
        "nombre" => "Teclado mecánico Corsair K95 RGB Platinum",
        "descripcion" => "Teclado mecánico RGB con interruptores Cherry MX Speed.",
        "precio" => 179.99
    ]
];
$compras = [];
foreach ($productos as $clave => $producto) {
    if (isset($_POST[$clave]) && $_POST[$clave] >= 1) {
        $compras[$clave] = $_POST[$clave];
    }
}

$precio = calcularCoste($productos, $compras);

function calcularCoste($productos, $compras)
{
    $preciototal = 0;

    foreach ($compras as $clave => $cantidad) {
        $preciototal += $productos[$clave]["precio"] * $cantidad;
    }

    return $preciototal;
}

require "index.view.php";
