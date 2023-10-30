<?php
session_start();

$usuarios = array(
    'oiher' => '12345',
    'usuario2' => 'contrasena2',
);

if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $contrasena) {
        $_SESSION['usuario'] = $usuario;
        header('Location: login.php');
        exit();
    } else {
        $mensajeError = "Usuario o contraseña incorrectos.";
    }
}

include('index.view.php');
