<?php
$mysqli = new mysqli("localhost","root","","tablasp3");


if ($mysqli->connect_errno){

    echo "fallo al conectar con MySql: (". $mysqli->connect_errno . " )" . $mysqli->connect_errno;


}

?>