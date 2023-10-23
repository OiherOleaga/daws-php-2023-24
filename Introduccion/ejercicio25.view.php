<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array con un listado de estudiantes (Ane, Markel, Nora, Danel, Amaia, Izaro). A
            continuación recorre el array utilizando una estructura de control WHILE generando una lista
            HTML como la siguiente:
        </p>
        <ls>
            <?php

            $x = 0;
            while ($x < count($estudiantes)) {
            ?>
                <li><?= $estudiantes[$x] ?></li>
            <?php
                $x++;
            }
            ?>
        </ls>

    </body>

</html>