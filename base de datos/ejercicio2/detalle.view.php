<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detalles</title>
    <link rel="stylesheet" href="detalle.css">
</head>

<body>
    <table class="table">
        <tr>
            <td>DNI</td>
            <td><?= $empleado->dni ?></td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td><?= $empleado->nombre ?></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?= $empleado->apellidos ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?= $empleado->edad ?></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><?= $empleado->sexo ?></td>
        </tr>
        <tr>
            <td>Fecha de nacimiento</td>
            <td><?= $empleado->fecha_nacimiento ?></td>
        </tr>
        <tr>
            <td>Curriculum</td>
            <td><?= $empleado->curriculum ?></td>
        </tr>
    </table>
    <br>
    <a href="ejer2.php">Volver</a>
</body>

</html>