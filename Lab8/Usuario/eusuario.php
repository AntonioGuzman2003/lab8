<?php
include('../conexion.php');

$IdUsuario=$_GET['IdUsuario'];
// ABRIMOS LA CONEXION A LA BD MYSQL
$conexion = conectar();

// TRAEMOS LOS DATOS DE LA TABLA ALUMNOS Y DE EL ALUMNO QUE DESEAMOS EDITAR
$sql = "SELECT * FROM usuario WHERE IdUsuario='$IdUsuario' ";


// EJECUTAMOS LA INSTRUCCION SQL
$resultado = mysqli_query($conexion,$sql);

//BUCLE PARA RECORRER Y MOSTRAR TODOS LOS DATOS DEL ALUMNO SELECCIONADO
    while($prod=mysqli_fetch_assoc($resultado)){


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .container {
    width: 50%;
    margin-top: 100px;

}

    </style>
    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
		<div class="card">
            <div class="card-header">
    <h1 class="text-center">Usuario</h1>
            </div>
    <div class="card-body">
        <form name="formu" method="post" action="editar_usuario.php">
        <input type="text" class="form-control" value="<?php echo $prod['IdUsuario'] ?>"  name="IdUsuario" >
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" value="<?php echo $prod['Nombre'] ?>" placeholder="Nombre del Usuario" name="Nombre" >
            </div>
            <div class="form-group">
                <label>ape_paterno:</label>
                <input type="text" class="form-control" value="<?php echo $prod['ape_paterno'] ?>" placeholder="Apellido paterno" name="ape_paterno" >
            </div>
            <div class="form-group">
                <label>ape_materno:</label>
                <input type="text" class="form-control" value="<?php echo $prod['ape_materno'] ?>" placeholder="Apellido Materno"  name="ape_materno" >
            </div>
            <div class="form-group">
                <label>direccion:</label>
                <input type="text" class="form-control" value="<?php echo $prod['direccion'] ?>" placeholder="direccion"  name="direccion" >
            </div>
            <div class="form-group">
                <label>email:</label>
                <input type="text" class="form-control" value="<?php echo $prod['email'] ?>" placeholder="email"  name="email" >
            </div>
            <div class="form-group">
                <label>telefono:</label>
                <input type="text" class="form-control" value="<?php echo $prod['telefono'] ?>" placeholder="telefono"  name="telefono" >
            </div>
            <div class="form-group">
                <label>contraseña:</label>
                <input type="text" class="form-control" value="<?php echo $prod['contra'] ?>" placeholder="contra"  name="contra" >
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit" IdProducto="submit">Editar</button>

        </form>
        <br>
        <div>
            <a href="../Usuario/usuario.php" class="btn btn-primary">Volver a Inicio</a>
        </div>
        <?php
   
}
 ?>             
</div>
</div>
</div>
</div>
</body>
</html>
 






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>