<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<?php

use LDAP\Result;

    include_once 'conectar.php';
        $id = $_POST['id'];
        
            $sql = "SELECT * FROM cliente where id=$id";

            $result = mysqli_query($mysqli, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0 ){
                $row = mysqli_fetch_assoc($result);
                $nombre = $row['nombre'];
                $apellido = $row['apellido'];
                $telefono = $row['telefono'];
                $correo = $row['correo'];
                

            }

?>

<h3>Actualizar Noticia</h3></h3>

<form action="actualizarcli.php" method="post">
    <br>
    ID
    <input type="text" name="id" value="<?php echo $id?>">
    <br>
    nombre
    <input type="text" name="nombre" value="<?php echo $nombre ?>">
    <br>
    apellido
            <input type="text" name="apellido" value="<?php echo $apellido ?>">
    <br>
    telefono
            <input type="text" name="telefono" value="<?php echo $telefono?>">
    <br>
    correo
            <input type="text" name="correo" value="<?php echo $correo?>">
            <br>
    <button type="submit" name="Guardar">insertar</button>
    <br>
</form> 


</body>
</html>