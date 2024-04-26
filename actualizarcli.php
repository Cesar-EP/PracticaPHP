<?php 
    

    include_once 'conectar.php';
    $id = $_POST['id'];
    
    if(isset($_POST['id'])){
    
        $id = $_POST['id'];
    
        $query = "UPDATE `cliente` SET nombre='$_POST[nombre]', apellido='$_POST[Apel]',telefono='$_POST[telefono]',correo='$_correo[correo]' where id='$_POST[id]'";
        mysqli_query($mysqli, $query);
       
    }
    
    
    header("location: ./cliente.php?insert=success");
    
    ?>

