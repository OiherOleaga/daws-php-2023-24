<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea dos arrays, uno con 4 tipos de animales ($animales) y otro con 4
            nombres de colores ($colores). <br>
            ■ Calcula el número de elementos de cada array.<br>
            ■ Añade un elemento al final del array $animales utilizando una función.<br>
            ■ Añade un elemento al principio del array $colores utilizando una función.<br>
            ■ Crea un tercer array que incluya los elementos de los dos arrays

        </p>
        <?php
        $animales = ["pato", "gallina", "perro", "gato"];
        $colores = ["rojo", "azul", "amarillo", "verde"];

        $numElementos = elementosArray($animales);
        echo ("<p>el numero de elementos del array es de $numElementos</p>");

        anadirAlFinal($colores, "marron");

        anadirInicio($animales, "macarron");

        fusionArrays($animales, $colores);

        function elementosArray($array)
        {
            $numeroElementos = count($array);
            return $numeroElementos;
        }

        function anadirAlFinal($array, $valor = 0)
        {
            array_push($array, $valor);
        }

        function anadirInicio($array, $valor = 0)
        {
            array_unshift($array, $valor);
        }
        function fusionArrays($array1, $array2)
        {
            $arrayFusionado = array_merge($array1, $array2);
        }
        ?>


    </body>

</html>