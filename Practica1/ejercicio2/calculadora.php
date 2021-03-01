<?php

$numero1 = $_POST["Numero1"];
$numero2 = $_POST["Numero2"];
$calculo = $_POST["Operacion"];
$resultado = $_POST["resultado"];


if ($calculo == "suma")
{

    $resultado = $numero1 + $numero2;

}
if ($calculo == "resta")
{

    $resultado = $numero1 - $numero2;

}
if ($calculo == "multiplicacion")
{

    $resultado = $numero1 * $numero2;

}
if ($calculo == "division")
{

    $resultado = $numero1 / $numero2;

}

echo "El resultado es:".$resultado."   (".$calculo.")";

?>