<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array multidimensional llamado “diccionario” que almacene para
            cada usuario su nombre, apellidos e email. A continuación crea una función
            llamada “getDatos()” que reciba como primer parámetro el nombre de
            usuario y como segundo parámetro el dato a obtener (“nombre”, “apellidos” o
            “email”) y lo muestre por pantalla.
        </p>
        <?php
        $diccionario = array(
            "juan" => array(
                "nombre" => "juan",
                "apellido" => "Garcia",
                "email" => "juanGarcia@gmail.com"
            ),
            "mortadelo" => array(
                "nombre" => "mortadelo",
                "apellido" => "Gutierrez",
                "email" => "mortiguti@gmail.com"
            ),
            "morcillo" => array(
                "nombre" => "morcillo",
                "apellido" => "Lopez",
                "email" => "morciLopez@gmail.com"
            ),
            "antonio" => array(
                "nombre" => "antonio",
                "apellido" => "Martinez",
                "email" => "antonmarti@gmail.com"
            )

        );
        getDatos($diccionario, "mortadelo", "email");


        function getDatos($array, $nombre, $valor)
        {
            $valor = $array["$nombre"]["$valor"];
            echo ("<p>el dato es $valor</p>");
        }
        ?>


    </body>

</html>