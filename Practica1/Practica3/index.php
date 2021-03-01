<?php
//creamos la ruta donde se almacena el html
if(!$_POST) {
    header('Location:index.html');
}
//declaramos variables
$nombre = $_POST['nombre'];
$numero = $_POST['numero'];
$repeticiones = 1;
//creamos la tabla para mostrar el nombre y las veces que se ha solicitado
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Nombre: <?php echo $nombre ?></h1>
    <body>
        <table border="1";
            <thead>
            <tr><th>Numero de repeticiones: <td> 
                <?php echo $numero ?></td></th>                                      
            </tr>
        </thead>
        </table>
        </body>
        
    <?php  
    //comprobamos que el valor maximo sea hasta 10.000 y que muestre el mensaje     
if($numero > 10000){
    echo "<p>Lo sentimos el numero de repeticiones es hasta 10000" . "</p>";
}
else{
    while($repeticiones <= $numero){
       echo "<p>{$repeticiones} {$nombre} " . "</p>";
        $repeticiones++;
     }
}
    ?>
</body>
</html>