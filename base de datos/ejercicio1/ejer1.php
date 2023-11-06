<?php
$host = "127.0.0.1";
$dbname = "ejercicio1";
$user = "root";
$pass = "";

$dbh = connect($host, $dbname, $user, $pass);

if (isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $email = $_GET["email"];
    $edad = $_GET["edad"];

    $datos = array('nombre' => $nombre, 'apellidos' => $apellido, 'email' => $email, 'edad' => $edad);

    $stat = $dbh->prepare("INSERT INTO alumno (nombre, apellidos, email, edad) VALUES (:nombre, :apellidos, :email, :edad)");
    $stat->setFetchMode(PDO::FETCH_ASSOC);
    $stat->execute($datos);
}

function connect($host, $dbname, $user, $pass)
{
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return null; // You might want to handle the error more gracefully
    }
}

$stmt = $dbh->prepare("SELECT * FROM alumno");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$lista = "";
while ($row = $stmt->fetch()) {
    $lista .= "<li>" . "id: " . $row["id"] . ", nombre: " . $row["nombre"] . ", apellido: " . $row["apellidos"] . ", email: " . $row["email"] . ", edad: " . $row["edad"] . "</li>";
}

require "ejer1.view.php";
