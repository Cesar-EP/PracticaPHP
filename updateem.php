<html>
<body>
<?php

use LDAP\Result;

    include_once 'conectar.php';
        $id = $_POST['id'];
        
            $sql = "SELECT * FROM empleado where id=$id";

            $result = mysqli_query($mysqli, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0 ){
                $row = mysqli_fetch_assoc($result);
                $nombre = $row['nombre'];
                $Apellido = $row['Apellido'];
                $Cargo = $row['Cargo'];
                $correo = $row['correo'];
                $telefono = $row['telefono'];

            }

?>

<h3>Actualizar Noticia</h3></h3>

<form action="actualizarem.php" method="post">
    <br>
    id
    <input type="text" name="id" value="<?php echo $id?>">
    <br>
    Nombre
    <input type="text" name="nombre" value="<?php echo $nombre ?>">
    <br>
    Apellido
            <input type="text" name="Apel" value="<?php echo $Apellido ?>">
    <br>

    <br>
    Cargo
            <input type="text" name="Apel" value="<?php echo $Cargo ?>">
    <br>
    
    <br>
    correo
            <input type="text" name="Apel" value="<?php echo $correo ?>">
    <br>
   
   
    <br>
    telefono
            <input type="text" name="Apel" value="<?php echo $telefono ?>">
    <br>
    <button type="submit" name="Guardar">insertar</button>
    <br>
</form> 

<?php 



?>

</body>
</html>