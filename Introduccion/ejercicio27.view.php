<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array con el nombre de 8 grupos de música y una función que
            imprima por pantalla todos los elementos utilizando la estructura foreach.

        </p>
        <ls>
            <?php
            foreach ($grupos_de_musica as $grupo) {
            ?>
                <li><?= $grupo ?></li>

            <?php
            }
            ?>
        </ls>

    </body>

</html>