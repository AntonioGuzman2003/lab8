<?php

include('../conexion.php');

$IdProducto = $_GET['IdProducto'];

// Abrimos la conexión a la base de datos
$conexion = conectar();

$sql = "DELETE FROM producto WHERE  IdProducto=$IdProducto";

// Ejecutamos la instrucción SQL
$resultado = mysqli_query($conexion, $sql);

// Cerramos la conexión
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Eliminar Producto</title>
    <style>
        .container {
    width: 30%;
    margin-top: 100px;

}

    </style>
</head>
<body>
<div class="container">
		<div class="card">
    <h1 class="text-center">Se ha eliminado</h1>
    <br>
    <h3 class="text-center">
    <?php
        if (!$resultado) {
            echo 'No se ha podido eliminar el Producto';
        }
        else {
            echo 'Se elimino el Producto';
        }
    ?>
    <br></br>
        <a href="producto.php" class="btn btn-primary">Volver a inicio</a>
    </br>
    </h3>
    </div>
    </div>
</body>
</html>