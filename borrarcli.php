<?php 


    include_once 'conectar.php';

    $id=$_GET['rn'];
    $query = "Delete from cliente where ID = '$id'";

    $data=mysqli_query($mysqli, $query);
    header("location: ./cliente.php?insert=success");


?>