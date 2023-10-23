<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array asociativo que almacene los nombres de 4 estudiantes y las
            notas de dos exámenes. A continuación, crea de forma dinámica una tabla
            como la de la imagen utilizando los valores del array y la estructura de
            repetición que creas conveniente. Cuando la nota sea inferior a 5, esta deberá
            mostrarse en rojo.
        </p>

        <table border="3px solid black">
            <tr>
                <th>Nombre</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota Media</th>
            </tr>
            <?php
            foreach ($clase as $persona) {
            ?>
                <tr>
                    <td><?= $persona["nombre"] ?></td>
                    <td><?= $persona["nota 1"] ?></td>
                    <td><?= $persona["nota 2"] ?></td>
                    <?php
                    $notaMedia = $persona["nota 1"] / 2 + $persona["nota 2"] / 2;
                    ?>
                    <td><?= $notaMedia ?></td>
                </tr>
            <?php
            }
            ?>

        </table>


    </body>

</html>