<?php
$idioma = "";
if (isset($_GET["idioma"])) {
    setcookie("idioma", $_GET["idioma"], time() * 60);
}
if (isset($_COOKIE["idioma"])) {
    $idioma = $_COOKIE["idioma"];
} else {
    $idioma = "no has elegido todavia el idioma";
}
require "index.view.php";
