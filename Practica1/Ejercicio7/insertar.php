<?php

include ("basesdedatos.php");

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$sexo = $_POST["seleccionar"];
$direccion = $_POST["direccion"];

$query = <<<SQL
INSERT INTO ingreso (Nombre,Apellido,Sexo,Direccion,edad)
VALUES (:Nombre,:Apellido,:Sexo,:Direccion,:edad)
SQL;
$statement = $db->prepare($query);
$params = [
    'Nombre' => $nombre,
    'Apellido' => $apellidos,
    'Sexo' => $sexo,
    'Direccion' => $direccion,
    'edad' => $edad,
];

$statement->execute($params);
//echo $db->lastInsertId();


?>