<?php
$Nombre = $_POST['nombre'];
$Correo = $_POST['email'];
$Fecha = $_POST["fecha"];
$Anio = $Fecha[0];
$Anio1 = $Fecha[1];
$Anio2 = $Fecha[2];
$Anio3 = $Fecha[3];
//realizamos comprobacionde cada digito por el año en que nacio.
$Nace = $Anio.$Anio1.$Anio2.$Anio3;
//necesitamos especificar el año actual para hacer la comprobacion
$anio_actual = 2021;
//comprobamos el año ingresado por el año actaul
$Edad = ($anio_actual - $Nace);
//se agrega la condiciones para la valoracion de edad en el acceso
if ($Edad >= 18)
{
    echo ("Bienvenido al sitio " . $Nombre);
} else {
    echo ("" . $Nombre. "  no puedes entrar por ser menor de edad");
}


?>