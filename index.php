<?php
include('lib/Producto.php');
$oProducto1= new Producto();
$oProducto2= new Producto("Nuevo Producto 002",0,"002");
$oProducto3= new Producto("Nuevo Producto 003",0,"003");

$oProducto1->nombre="Nuevo Producto";
$oProducto1->codigo="001";

$aProducto[0]=$oProducto1;
$aProducto[1]=$oProducto2;
$aProducto[2]=$oProducto3;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach($productos as $oPro){
            echo $oPro->codigo. " ".$oPro->nombre;
            echo "<br>";
        }
        ?>
    </body>
</html>


