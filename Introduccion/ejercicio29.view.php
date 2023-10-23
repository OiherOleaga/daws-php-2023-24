<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Modifica el ejercicio número 24 para obtener el mismo resultado empleando
            una estructura foreach.
        </p>

        <table>
            <tr>
                <th>Nombre</th>
                <th>apellido</th>
                <th>telefono</th>
                <th>email</th>
            </tr>
            <?php
            foreach ($agenda as $persona) {
            ?>
                <tr>
                    <td><?= $persona["nombre"] ?></td>
                    <td><?= $persona["apellidos"] ?></td>
                    <td><?= $persona["telefono"] ?></td>
                    <td><?= $persona["email"] ?></td>
                </tr>
            <?php
            }
            ?>

        </table>


    </body>

</html>