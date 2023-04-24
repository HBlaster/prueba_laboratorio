<?php
include("conexion.php");
$con = conectar();

//consulta para obtener estudios disponibles
$sql = "SELECT * FROM estudios";
$query = mysqli_query($con, $sql);

//Consulta para obtener datos del paciente
$id = $_GET['id'];
$sql_one = "SELECT ordenes.folio AS 'Folio', clientes.nombre AS 'Nombre_del_Paciente', estudios.descrip AS 'Estudio', ordenes_partidas.precioUnitario AS 'Precio_Unitario' 
FROM ordenes 
INNER JOIN clientes ON ordenes.cliente = clientes.clave_cli 
INNER JOIN ordenes_partidas ON ordenes.folio = ordenes_partidas.venta 
INNER JOIN estudios ON ordenes_partidas.articulo = estudios.clave_art
WHERE clientes.id = '$id'";
$query_one = mysqli_query($con, $sql_one);

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

            <div class="col-md-3" style="margin-right: 60px;">
                <h1 style=" font-size:20px;">Estudios Disponibles</h1>
                <form action="insertar.php?id_usuario=<?php echo $id ?>" method="POST">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <th><?php echo $row['clave_art'] ?></th>
                                    <th><?php echo $row['descrip'] ?></th>
                                    <th><?php echo $row['precio'] ?></th>
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
                <table class="table">
                    <thead class="table-success table-striped">
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
                        $total = 0;
                        while ($row_one = mysqli_fetch_array($query_one)) {
                            $total += $row_one['Precio_Unitario'];
                        ?>
                            <tr>
                                <th><?php echo $row_one['Folio'] ?></th>
                                <th><?php echo $row_one['Nombre_del_Paciente'] ?></th>
                                <th><?php echo $row_one['Estudio'] ?></th>
                                <th><?php echo $row_one['Precio_Unitario'] ?></th>
                                <th><a href="delete.php?folio=<?php echo $row_one['Folio'] ?>&precio=<?php echo $row_one['Precio_Unitario'] ?>&id_usuario=<?php echo $id?>" class="btn btn-danger">Eliminar</a></th>  

                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total: <?php echo $total; ?></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>