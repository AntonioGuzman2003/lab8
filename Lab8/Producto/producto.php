<?php
include('../conexion.php');

// Abrimos la conexión a la BD MySQL
$conexion = conectar();

// Definimos la consulta SQL
$sql = 'SELECT IdProducto, Nombre, Descripcion, Stock, PrecioVenta FROM producto';

// Ejecutamos el query en la conexión abierta
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

    <title>Producto</title>
</head>
<body>
    <style>
        .container {
    width: 60%;
    margin-top: 100px;

}

    </style>
    <div class="container">
       
        <a href="p_agregar.html" class="btn btn-primary">Nuevo Producto</a>
        <div class="card mx-auto mt-5">
        <div class="card-header">
    <h1 class="text-center">Producto</h1>
        </div>
            <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>IdProducto: </th>
                    <th>Nombre:  </th>
                    <th>Descripcion:  </th>
                    <th> Stock:  </th>
                    <th> PrecioVenta:  </th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Recorrer el array con el resultado de la consulta
                while ($producto = mysqli_fetch_array($resultado)) {
                    $IdProducto = $producto['IdProducto'];
                    $Nombre = $producto['Nombre'];
                    $Descripcion = $producto['Descripcion'];
                    $Stock = $producto['Stock'];
                    $PrecioVenta = $producto['PrecioVenta'];


                    echo '<tr>';
                    echo '<td>' . $IdProducto . '</td>';
                    echo '<td>' . $Nombre . '</td>';
                    echo '<td>' . $Descripcion . '</td>';
                    echo '<td>' . $Stock . '</td>';
                    echo '<td>' . $PrecioVenta . '</td>';
                    echo '<td><a href="eproducto.php?IdProducto=' . $IdProducto . '" class="btn btn-primary">Editar</a>
                     <a href="eliminar_producto.php?IdProducto=' . $IdProducto . '" class="btn btn-primary">Eliminar</a></td>';
                    echo '</tr>';
                }
            ?>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</body>
</html>
