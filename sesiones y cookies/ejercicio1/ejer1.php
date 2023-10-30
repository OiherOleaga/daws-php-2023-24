<?php
if (isset($_POST["texto"])) {
    setcookie("cadena", $_POST["texto"]);
}
$cadena = isset($_COOKIE["cadena"]) ? $_COOKIE["cadena"] : "";
require "index.view.php";
