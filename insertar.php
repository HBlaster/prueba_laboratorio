<?php 
    include("conexion.php");
    $con=conectar();

$id_usuario=$_GET['id_usuario'];
$clave_cli=$_GET['clave_cli'];
$id_producto = $_GET['clave_art'];

echo($id_producto);
$sql = "INSERT INTO ordenes (folio, cliente, precio)
VALUES ()";

// if($query){
//     Header("Location: info_cliente.php?id=$id_usuario");
    
// }else {
// }
?>