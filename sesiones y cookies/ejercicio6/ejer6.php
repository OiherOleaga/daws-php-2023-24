<?php
session_start();
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0;
}
if ($_SESSION["contador"] >= 3) {
    $mensajeError = "Has superado el limite de intentos";
} else {
    $usuarios = array(
        'oiher' => '12345',
        'usuario2' => 'contrasena2',
    );

    if (isset($_POST['login'])) {
        $_SESSION["contador"]++;
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
}
include('index.view.php');
