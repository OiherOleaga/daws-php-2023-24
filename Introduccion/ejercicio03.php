<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p> Crea un programa que muestre el nombre de usuario enviado en la URL:
            ejercicio03.php?usuario=admin
            Mostrará el siguiente texto por pantalla:
            Bienvenido, admin</p>
        <?php
        $usuario = $_GET["usuario"];
        echo ("bienvenido, $usuario");
        ?>
    </body>

</html>