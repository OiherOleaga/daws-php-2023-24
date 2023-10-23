<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea una aplicación que genere un array con 20 números aleatorios con valores entre 1 y
            999, utilizando la función random_int(1, 999) para generar los valores. A continuación
            recorre el array utilizando la sentencia foreach y muestra por pantalla el valor más alto y el
            más bajo.

        </p>

        <ls>
            <?php
            $numMax = 0;
            $numMin = 999;
            foreach ($arrayRandom as $num) {
                if ($num < $numMin) {
                    $numMin = $num;
                }
                if ($num > $numMax) {
                    $numMax = $num;
                }
            ?>
                <li><?= $num ?></li>
            <?php
            }
            ?>

            <p>el numero mas alto es <?= $numMax ?></p>
            <p>el numero mas bajo es <?= $numMin ?></p>

        </ls>


    </body>

</html>