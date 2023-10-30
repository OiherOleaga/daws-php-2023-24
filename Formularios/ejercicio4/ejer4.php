<?php
$usuarios = array(
    "user1" => array(
        "nombre" => "ane",
        "apellidos" => "lopez",
        "password" => "12345"
    ),
    "user2" => array(
        "nombre" => "amaia",
        "apellidos" => "Otso",
        "password" => "456Xyz"
    )
);

$usuario = $_GET["nombre"];
$contra = $_GET["contra"];


$mensaje = buscarUsuario($usuarios, $usuario, $contra);


function buscarUsuario($usuarios, $usuario, $contra)
{
    $mensaje = "";

    if (array_key_exists($usuario, $usuarios)) {
        $contraCuenta = $usuarios[$usuario]["password"];
        if ($contra == $contraCuenta) {
            $mensaje = "<p>La contraseña es correcta</p>";
        } else {
            $mensaje = "<p>La contraseña no es válida</p>";
        }
    } else {
        $mensaje = "<p>No hay ningún usuario con este nombre</p>";
    }

    return $mensaje;
}

require "index.view.php";
