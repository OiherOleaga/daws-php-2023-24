<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array multidimensional que simule una agenda de contactos (contendrá de cada
            persona su nombre, apellidos, teléfono y dirección de correo electrónico). Implementa una
            función que imprima en una tabla los datos de las personas utilizando la sentencia for.
            Nota: Puedes utilizar la función count() para conocer el tamaño del array que debes recorrer.


        </p>
        <?php

        $agenda = [
            [
                "nombre" => "Amaia",
                "apellidos" => "Gorbea Jainaga",
                "telefono" => "945111111",
                "email" => "agorbea@php.net"
            ],
            [
                "nombre" => "Juan",
                "apellidos" => "Martinez Garcia",
                "telefono" => "12345679",
                "email" => "jm@php.net"
            ],
            [
                "nombre" => "marco",
                "apellidos" => "Alca Diaz",
                "telefono" => "8765321",
                "email" => "maral@php.net"
            ],
            [
                "nombre" => "Pepe",
                "apellidos" => "Gorbea Jainaga",
                "telefono" => "12345634",
                "email" => "pepgo@php.net"
            ],
        ];
        ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>apellido</th>
                <th>telefono</th>
                <th>email</th>
            </tr>
            <?php
            for ($x = 0; $x < count($agenda); $x++) {

            ?>
                <tr>
                    <td><?= $agenda[$x]["nombre"] ?></td>
                    <td><?= $agenda[$x]["apellidos"] ?></td>
                    <td><?= $agenda[$x]["telefono"] ?></td>
                    <td><?= $agenda[$x]["email"] ?></td>
                </tr>
            <?php
            }
            ?>

        </table>


    </body>

</html>