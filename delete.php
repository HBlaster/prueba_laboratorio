<?php 
    include("conexion.php");
    $con=conectar();

$folio=$_GET['folio'];
$precio_producto = $_GET['precio'];
$id_usuario = $_GET['id_usuario'];

$sql="DELETE FROM ordenes_partidas 
WHERE venta = '$folio' AND precioUnitario = '$precio_producto'
";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: info_cliente.php?id=$id_usuario");
    
}else {
}
?>