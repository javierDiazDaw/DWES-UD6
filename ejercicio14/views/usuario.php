<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php 

        session_start();     

       $error = "";
       $user = "";
       $password = "";
       echo $user . "" . $password;

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $user = $_POST['username'];
           $password = $_POST['pass'];
           

            if (login($_POST['username'], $_POST['pass'])) {
               
            $user = getUser($_POST['username']);
            $_SESSION["usuario"] = $user["usuario"];
           
        } else {
            $error = "<p style='color:red'>Contraseña incorrecta.</p>";
        }
       }    

    ?>
    <h2>Iniciar sesión</h2>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>Usuario:</p>
        <p><input type="text" placeholder="Ingrese nombre de usuario" name="username" value="<?php echo $user ?>"required/></p>
        <p>Contraseña:</p>
        <p><input type="password" placeholder="Ingrese su contraseña" name="pass" value="<?php echo $password ?>"required/></p>
        <p><input type="submit" value="Iniciar Sesion"/></p>
        <div><?php echo $error?></div>
    </form>    
</body> 
</html>