<?php 
    
    include_once 'empleado.php';
    $id = $_POST['id'];
    
    if(isset($_POST['id'])){
    
        $id = $_POST['id'];
    
        $query = "UPDATE `empleado` SET nombre='$_POST[nombre]', Apellido='$_POST[Apellido]', Cargo='$_POST[Cargo]', correo='$_POST[correo]', telefono='$_POST[telefono]' where id='$_POST[id]'";
        mysqli_query($mysqli, $query);
       
    }
    
    
    header("location: ./empleado.php?insert=success");
    
    ?>