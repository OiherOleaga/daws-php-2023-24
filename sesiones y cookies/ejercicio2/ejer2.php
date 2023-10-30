<?php
if (isset($_POST["texto"])) {
    setcookie("cadena", $_POST["texto"]);
}
$cadena = isset($_COOKIE["cadena"]) ? $_COOKIE["cadena"] : "";

if (isset($_POST["borrar"])) {
    borrarCookie();
    $cadena = "se ha borrado la cookie";
}

function borrarCookie()
{
    setcookie("cadena", null, -1);
}
require "index.view.php";
