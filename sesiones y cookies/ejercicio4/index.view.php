<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>
    <link rel="stylesheet" href="style.css">

    <head>

    <body>
        <p> Crea una aplicación de control de asistencia
            para un evento. La aplicación tendrá que mostrar la
            lista de personas (el nombre de cada una) que han
            acudido al evento. Tendrá un campo de texto para
            escribir el nombre de la persona y así añadir
            personas a la lista. La lista se almacenará en sesión,
            y existirá un botón que borre la lista completa

        </p>

        <ul>
            <?php
            if (count($lista) > 0) {
                foreach ($lista as $persona) {
            ?>
                    <li><?= $persona ?></li>
                <?php
                }
            } else {
                ?>
                <p>No hay asistentes</p>
            <?php
            }
            ?>
        </ul>

        <form method="get" action="ejer4.php">
            <label for="texto">Añadir persona:</label>
            <input type="text" name="persona" id="persona">
            <input type="submit" value="añadir" name="añadir">
            <input type="submit" name="borrar" value="borrar lista">

        </form>
    </body>

</html>