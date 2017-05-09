<?php
include('lib/Producto.php');
include('lib/ConsultaProductos.php');

$oProducto1= new Producto();
$oProducto2= new Producto("Nuevo Producto 002",100.000,"002");
$oProducto3= new Producto("Nuevo Producto 003",250.000,"003");

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
        $aProductos2=new ConsultasProductos();
        foreach($aProductos2->Lista() as $oPro){
            echo $oPro->codigo. " ".$oPro->nombre."/".$oPro->precio."/usd".$oPro->totalUSD();
            echo "<br>";
        }
        ?>
    </body>
</html>


