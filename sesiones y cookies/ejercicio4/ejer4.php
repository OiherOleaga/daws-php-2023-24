<?php
session_start();

$lista = isset($_SESSION['asistentes']) ? $_SESSION['asistentes'] : [];

if (isset($_GET["borrar"])) {
    borrarSesion();
} else {
    if (isset($_GET["persona"]) && !empty($_GET["persona"])) {
        $lista[] = $_GET["persona"];
        $_SESSION['asistentes'] = $lista;
    }
}


function borrarSesion()
{
    $_SESSION['asistentes'] = [];
    session_unset();
}
require "index.view.php";
