<?php
session_start();

// Datos de acceso de los usuarios:
$usuarios = array(
    "user1" => array(
        "nombre" => 'oiher',
        "apellidos" => 'López',
        "password" => '12345'
    ),
    "user2" => array(
        "nombre" => 'Amaia',
        "apellidos" => 'Otsoa',
        "password" => '456Xyz'
    )
);

function comprobarInicioSesion($usuarios)
{
    $usuario = $_GET["user"];
    $contrasena = $_GET["password"];

    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario]["password"] === $contrasena) {
        return true;
    } else {
        return false;
    }
}

if (isset($_GET["user"]) && isset($_GET["password"])) {
    $sesionValida = comprobarInicioSesion($usuarios);
} else {
    $sesionValida = false;
}


require "index.view.php";
