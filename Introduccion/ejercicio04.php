<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p> Modifica el ejercicio 02 para que recoja el nombre y la edad desde la URL. Es
            decir, para probar la página la URL será como la siguiente:
            ejercicio03.php?nombre=Markel&edad=22
            Mostrará el siguiente texto por pantalla:
            Mi amigo Mikel tiene 22 años.</p>
        <?php
        $usuario = $_GET["usuario"];
        $edad = $_GET["edad"];
        echo ("<p>Mi amigo $usuario tiene $edad años</p>");
        ?>
    </body>

</html>