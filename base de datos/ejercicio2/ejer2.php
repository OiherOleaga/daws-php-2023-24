<?php
require_once 'db_functions.php';

$db = connect();
$empleados = getAll($db);
if (isset($_GET["accion"])) {
    $accion = $_GET["accion"];
    switch ($accion) {
        case 'detalle':
            $id = $_GET["id"];
            $empleado = getById($db, $id);
            require "detalle.view.php";
            die();
        case 'insertar':
            $empleado = array(
                "nombre" => $_GET["nombre"],
                "apellidos" => $_GET["apellidos"],
                "email" => $_GET["email"],
                "dni" => $_GET["dni"],
                "edad" => intval($_GET["edad"]),
                "fecha_nacimiento" => $_GET["fecha-nacimiento"],
                "curriculum" => $_GET["curriculum"],
                "sexo" => $_GET["sexo"]
            );
            insert($db, $empleado);
            break;
        case 'eliminar':
            $id = $_GET["id"];
            deleteById($db, $id);
            break;
    }
}



require "ejer2.view.php";
