<!DOCTYPE html>
<html>

<head>
    <title>PHP prueba</title>

    <head>

    <body>
        <p>
            Crea un array con un listado de estudiantes (Ane, Markel, Nora, Danel, Amaia, Izaro). A
            continuación recorre el array mediante un FOR, generando una lista HTML como la siguiente:
            Ahora añade un atributo “id” a cada elemento de la lista. Por ejemplo:

        </p>
        <?php

        $estudiantes = ["Juan", "David", "Adrian", "Pedro", "Guti", "Bob"];
        $listaEstudiantes = "<ls>";
        for ($x = 0; $x < count($estudiantes); $x++) {
            $listaEstudiantes = $listaEstudiantes . "<li id=$x>$estudiantes[$x]</li>";
        }
        $listaEstudiantes = $listaEstudiantes . "</ls>";
        echo ($listaEstudiantes);
        ?>


    </body>

</html>