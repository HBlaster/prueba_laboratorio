<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM estudios";
$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Info cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1 style=" font-size:20px;" >Estudios Disponibles</h1>
                                <form action="insertar.php" method="POST">
                                <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['descrip']?></th>
                                                <th><?php  echo $row['precio']?></th>  
                                                <th><input type="submit" class="btn btn-primary" value="Agregar"></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <h1 style="font-size: 20px;">Estudios del cliente</h1>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Folio</th>
                                        <th>Nombre del paciente</th>
                                        <th>Estudio</th>
                                        <th>Precio Unitario</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>    
                                                <th></th>                                       
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    
    </body>
</html>