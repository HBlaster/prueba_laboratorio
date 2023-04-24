<?php 
    include("conexion.php");
    $con=conectar();

$id_orden=$_GET['id_orden'];
$id_usuario = $_GET['id_usuario'];

echo ($id_orden);
echo ($id_usuario);

$sql="DELETE FROM ordenes_partidas 
WHERE id = '$id_orden' ";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: info_cliente.php?id=$id_usuario");
    
}else {
}
?>