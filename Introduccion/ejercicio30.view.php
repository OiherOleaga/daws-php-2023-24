    <!DOCTYPE html>
    <html>

    <head>
        <title>PHP prueba</title>

        <head>

        <body>
            <p>
                Crea un array asociativo con el nombre de 6 estudiantes y la nota media de
                cada uno. Recorre el array utilizando la estructura foreach y mostrando una lista
                con frases con la siguiente estructura: “La nota media de Julen es 6.8”
            </p>

            <ls>
                <?php
                foreach ($estudiantes as $persona => $nota) {
                ?>
                    <li> La nota media de <?= $persona ?> es <?= $nota   ?></li>

                <?php
                }
                ?>

            </ls>


        </body>

    </html>