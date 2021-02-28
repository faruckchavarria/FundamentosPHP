<?php
$Nombre = $_POST['nombre'];
$Correo = $_POST['email'];
$Fecha = $_POST["fecha"];
$Anio = $Fecha[0];
$Anio1 = $Fecha[1];
$Anio2 = $Fecha[2];
$Anio3 = $Fecha[3];
$Nace = $Anio.$Anio1.$Anio2.$Anio3;
$anio_actual = 2021;
$Edad = ($anio_actual - $Nace);

?>