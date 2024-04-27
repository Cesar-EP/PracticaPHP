<?php 
    include_once 'empleado.php';

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Cargo = $_POST['Cargo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sqlinsert = "INSERT INTO empleado values(0,'$Nombre','$Apellido','$Cargo','$correo','$telefono');";
    //ECHO $sqlinsert;
    mysqli_query ($mysqli, $sqlinsert);
    

    // header("location:./empleado.php?insert=success");

?>