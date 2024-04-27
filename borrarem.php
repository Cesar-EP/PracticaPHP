<?php 


    include_once 'empleado.php';

    $id=$_GET['rn'];
    $query = "Delete from empleado where ID = '$id'";

    $data=mysqli_query($mysqli, $query);
    header("location: ./empleado.php?insert=success");


?>