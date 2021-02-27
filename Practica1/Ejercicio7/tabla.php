<?php
include("basesdedatos.php");

$query = 'SELECT * FROM ingreso';
$statement = $db->prepare($query);
//$statement->bindValue();
$statement->execute();
$rows = $statement->fetchAll();
//var_dump($rows);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table" style="width:20%;border:1px solid black;">
        <thead class="thead-dark">
            <tr style="border:1px solid black;">
                <th scope="col" style="width:30%;border:1px solid black;">NOMBRE</th>
                <th scope="col" style="width:20%;border:1px solid black;">Apellido</th>
                <th scope="col" style="width:20%;border:1px solid black;">Sexo</th>
                <th scope="col" style="width:20%;border:1px solid black;">Direcion</th>
               <!-- <th scope="col"></th>-->
                </tr>
        </thead>
        <tbody id="codigo">
                <?php
                    foreach($rows as $row)
                    {
                        ?>
                        <tr style="width:20%;border:1px solid black;">
                            <td style="width:20%;border:1px solid black;"><?php echo $row['Nombre']; ?></td>
                            <td style="width:20%;border:1px solid black;"><?php echo $row['Apellido']; ?></td>
                            <td style="width:20%;border:1px solid black;"><?php echo $row['Sexo']; ?></td>
                            <td style="width:20%;border:1px solid black;"><?php echo $row['Direccion']; ?></td>
                        <!--    <td><input type="reset" name="boton" value="Ver"></td>-->
                        <tr>
                            
        </tbody>
                        <?php
                    }
                    ?>                       
    </table> <br>
    <td> <a href="index.html"><button>Nuevo</button></a></td>
</thead>
</body>
</html>