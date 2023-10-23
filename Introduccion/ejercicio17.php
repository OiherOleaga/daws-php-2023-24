<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea una función que reciba un usuario y contraseña mediante GET. La
            aplicación deberá mostrar si el usuario existe, y en caso de existir si la contraseña
            recibida es correcta. La validación se realizará contra un array multidimensional
            como el siguiente:
        </p>
        <?php

        $usuarios = [
            "juan" => [
                "nombre" => "juan",
                "password" => "123123",
                "email" => "nora@php.net"
            ],
            "pedro" => [
                "nombre" => "pedro",
                "password" => "12345678",
                "email" => "nora@php.net"
            ]

        ];
        $nombre = $_GET["user"];
        $contraseña = $_GET["contra"];

        comprobar($usuarios, $nombre, $contraseña);

        function comprobar($array, $nombre, $contra)
        {
            if (array_key_exists($nombre, $array)) {
                $contraCuenta = $array[$nombre]["password"];
                if ($contra == $contraCuenta) {
                    echo ("<p>la contraseña es correcta</p>");
                } else {
                    echo ("<p>la contraseña no es valida</p>");
                }
            } else {
                echo ("<p>No hay ningun usuario con este nombre</p>");
            }
        }
        ?>


    </body>

</html>