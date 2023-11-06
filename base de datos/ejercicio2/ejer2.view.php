<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="contenedor">
        <div class="tabla">
            <h3>Listado de empleados</h3>
            <table>
                <tr>
                    <th> DNI</th>
                    <th> Nombre</th>
                    <th> Apellidos</th>
                    <th> Opciones</th>
                </tr>
                <?php foreach ($empleados as $empleado) : ?>
                    <tr>
                        <td><?= $empleado->dni ?></td>
                        <td><?= $empleado->nombre ?></td>
                        <td><?= $empleado->apellidos ?></td>
                        <td>
                            <a href='ejer2.php?accion=detalle&id=<?= $empleado->id ?>'>Ver detalles</a>

                            <a href='ejer2.php?accion=eliminar&id=<?= $empleado->id ?>'>Eliminar</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </table>
        </div>
        <div>
            <h5>Añadir nuevo empleado</h5>
            <form action="ejer2.php" method="get">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellidos" placeholder="Apellidos">
                <input type="number" name="edad" placeholder="Edad">
                <input type="date" name="fecha-nacimiento" value="2000-01-01">
                <input type="email" name="email" placeholder="Email">
                <input type="dni" name="dni" placeholder="DNI">
                <select name="sexo">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer" selected>Mujer</option>
                    <option value="Otro">Otro</option>
                </select>
                <textarea name="curriculum" placeholder="Curriculum"></textarea>


                <input type="hidden" name="accion" value="insertar">
                <input type="submit" value="Añadir">
            </form>
        </div>
    </div>
</body>

</html>