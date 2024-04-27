<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Tabla de Empleados</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<h2>Tabla de Empleados</h2>

<form action="insertarem.php" method="post">
    <br>
    Nombre
    <input type="text" name="Nombre">
    <br>
    Apellido
    <input type="text" name="Apellido">
    <br>
    Cargo
    <input type="text" name="Cargo">
    <br>
    <br>
    correo
    <input type="text" name="correo">
    <br>
    <br>
    telefono
    <input type="text" name="telefono">
    <br>
    <br>
    <button type="submit" name="guardar">insertar</button>
    <br>
</form>

<h2>Editar empleado</h2>
<form action="updateem.php" method="post">
    <input type="text" name="id" placeholder="ID">
    <button type="submit" name="update">Editar</button>
    </form>

    <h2>BORRAR</h2>

<table  border ="2">
    <tr>
    <th>id</th>
    <th>nombre</th> 
    <th>Apellido</th>
    <th>Cargo</th>
    <th>correo</th>
    <th>telefono</th>

  <?php 
    include_once 'conectar.php';
   
    
        $query = "SELECT * from empleado";
        $data = mysqli_query($mysqli, $query);
        $total = mysqli_num_rows($data);
    
        if($total!=0){
            while($row=mysqli_fetch_assoc($data)){
    
                  
                echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['nombre'] . "</td> <td>" . $row['Apellido'] .  "</td> <td>" . $row['Cargo'] . "</td> <td>" . $row['correo'] .  "</td> <td>" . $row['telefono'] . "</td> 
                <td> <a href='borrarem.php?rn=$row[id]'>BORRAR</a></td></tr>"; 
                  
    
    
            }
    
        }
    
    ?>

</table>


</body>
</html>