<?php 
    include("conexion.php");
    $con=conectar();

$id_usuario=$_GET['id_usuario'];
$id_producto = $_POST['clave_art'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}