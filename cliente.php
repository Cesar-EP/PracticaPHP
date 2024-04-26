<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clientes</title>
<style>
    form {
      width: 100%;
        border-collapse: collapse;
    }
</style>

</head>
<body>

<h2>Tabla de Clientes</h2>

 
<form action="insertarcli.php" method="post">
    <br>
    Nombre
    <input type="text" name="nombre">
    <br>
    Apellido
    <input type="text" name="apellido">
    <br>
    <button type="submit" name="guardar">insertar</button>
</form>

<form action="updatecli.php" method="post">
    <input type="text" name="id" placeholder="ID">
    <button type="submit" name="update">Editar</button>
    </form>

<table  border ="2">
    <tr>
    <th>id</th>
    <th>nombre</th> 
    <th>apellido</th>
   


    </tr>

<?php 
    include_once 'conectar.php';
   
    
        $query = "SELECT * from cliente";
        $data = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($data);
    
        if($total!=0){
            while($row=mysqli_fetch_assoc($data)){
    
                  
                echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['nombre'] . "</td> <td>" 
                . $row['apellido'] .  "</td>
                <td> <a href='borrarcli.php?rn=$row[id]'>BORRAR</a></td></tr>"; 
                  
    
    
            }
    
        }
    
    ?>

</table>


</body>
</html>