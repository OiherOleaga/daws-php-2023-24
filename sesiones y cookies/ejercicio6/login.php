<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ejer6.php');
    exit();
}

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    include('login.view.php');
} else {
    header('Location: ejer6.php');
    exit();
}
