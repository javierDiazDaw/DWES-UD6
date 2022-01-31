<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>    
    <h2>Iniciar sesión</h2>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <p>Usuario:</p>
        <p><input type="text" placeholder="Ingrese nombre de usuario" name="usuario" required/></p>
        <p>Contraseña:</p>
        <p><input type="password" placeholder="Ingrese su contraseña" name="contrasenia" required/></p>
        <p><input type="submit" value="Iniciar Sesion"/></p>
        <div><?php echo $error?></div>
    </form>    
</body> 
</html>