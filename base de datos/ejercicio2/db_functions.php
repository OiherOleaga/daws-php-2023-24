<?php

function connect()
{
    $dbname = "ejercicio1";
    $host = "localhost";
    $user = "root";
    $pass = "";

    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

function getAll($dbh)
{
    $stmt = $dbh->prepare("SELECT * FROM empleados");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getById($dbh, $id)
{
    $stmt = $dbh->prepare("SELECT * FROM empleados WHERE id = :id");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $data = array(
        "id" => $id
    );
    $stmt->execute($data);
    return $stmt->fetchObject();
}

function insert($dbh, $empleado)
{
    try {
        $stmt = $dbh->prepare("INSERT INTO empleados (nombre, apellidos, email, dni, sexo, edad, fecha_nacimiento, curriculum)
                                VALUES (:nombre, :apellidos, :email, :dni, :sexo, :edad, :fecha_nacimiento, :curriculum)");

        $stmt->execute($empleado);
    } catch (Exception $e) {
        echo 'Exception -> ';
        var_dump($e->getMessage());
    }
}

function deleteById($dbh, $id)
{
    $data = array(
        'id' => $id
    );
    $stmt = $dbh->prepare("DELETE FROM empleados WHERE id = :id");
    $stmt->execute($data);
}
