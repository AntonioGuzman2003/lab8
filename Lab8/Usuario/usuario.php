<?php
include('../conexion.php');

// Abrimos la conexión a la BD MySQL
$conexion = conectar();

// Definimos la consulta SQL
$sql = 'SELECT IdUsuario, Nombre, ape_paterno, ape_materno, direccion, email, telefono, contra FROM usuario';

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

    <title>Usuario</title>
</head>
<body>
    <style>
        .container {
    width: 100%;
    margin-top: 100px;

}

    </style>
    <div class="container">
       
        <a href="u_agregar.html" class="btn btn-primary">Nuevo Usuario</a>
        <div class="card mx-auto mt-5">
        <div class="card-header">
    <h1 class="text-center">Usuario</h1>
        </div>
            <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>IdUsuario: </th>
                    <th>Nombre:  </th>
                    <th>ape_paterno:  </th>
                    <th>ape_materno:  </th>
                    <th>direccion:  </th>
                    <th>email:  </th>
                    <th>telefono:  </th>
                    <th>contra:  </th>

                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // Recorrer el array con el resultado de la consulta
                while ($usuario = mysqli_fetch_array($resultado)) {
                    $IdUsuario = $usuario['IdUsuario'];
                    $Nombre = $usuario['Nombre'];
                    $ape_paterno = $usuario['ape_paterno'];
                    $ape_materno = $usuario['ape_materno'];
                    $direccion = $usuario['direccion'];
                    $email = $usuario['email'];
                    $telefono = $usuario['telefono'];
                    $contra = $usuario['contra'];



                    echo '<tr>';
                    echo '<td>' . $IdUsuario . '</td>';
                    echo '<td>' . $Nombre . '</td>';
                    echo '<td>' . $ape_paterno . '</td>';
                    echo '<td>' . $ape_materno . '</td>';
                    echo '<td>' . $direccion . '</td>';
                    echo '<td>' . $email . '</td>';
                    echo '<td>' . $telefono . '</td>';
                    echo '<td>' . $contra . '</td>';
                    echo '<td><a href="eusuario.php?IdUsuario=' . $IdUsuario . '" class="btn btn-primary">Editar</a>
                     <a href="eliminar_usuario.php?IdUsuario=' . $IdUsuario . '" class="btn btn-primary">Eliminar</a></td>';
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
