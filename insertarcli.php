<?php 
    include_once 'conectar.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];


    $sqlinsert = "INSERT INTO cliente values(0,'$nombre','$apellido','$telefono','$correo');";
    //ECHO $sqlinsert;
    mysqli_query ($mysqli, $sqlinsert);
    

    header("location:./cliente.php?insert=success");

?>