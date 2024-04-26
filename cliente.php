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

 
<form action="insertar.php" method="post">
    <br>
    Nombre
    <input type="text" name="nombre">
    <br>
    Apellido
    <input type="text" name="apellido">
    <br>
    <button type="submit" name="gaurdar">insertar</button>
</form>
</body>
</html>