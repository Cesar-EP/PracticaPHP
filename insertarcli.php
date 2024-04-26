<?php 
    include_once 'conectar.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['Apel'];


    $sqlinsert = "INSERT INTO cliente values(0,'$nombre','$apellido');";
    //ECHO $sqlinsert;
    mysqli_query ($mysqli, $sqlinsert);
    

    header("location:./cliente.php?insert=success");

?>