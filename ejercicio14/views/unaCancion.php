<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <title>una cancion</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="create.php">Nuevo elemento</a></li>
            <li><a class="active" href="list.php">Lista elementos</a></li>
            <li><a href="import.php">Importar elementos</a></li>
        </ul>
    </nav>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Duracion</th>
                <th>Lanzamiento</th>
                <th>Imagen cd</th>                
                <th>Volver</th>
            </tr>
        </thead>
        <tbody>
           <!-- Aquí tendrás que mostrar las filas de la tabla-->
           <?php
                         
                            
           
               
                echo "<tr>";
                    echo "<td>";
                    echo $cancion["id"];
                    echo "</td>";
                    echo "<td>";
                    echo $cancion["nombre"];
                    echo "</td>";
                    echo "<td>";
                    echo $cancion["genero"];
                    echo "</td>";
                    echo "<td>";
                    echo $cancion["duracion"];
                    echo "</td>";
                    echo "<td>";
                    echo $cancion["lanzamiento"];
                    echo "</td>";
                    $id = $cancion["id"];
                    echo "</td>";
                    echo "<td>";
                    echo "<img  src= 'images/" .$cancion["imagencd"]. " '>";                   
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='?controller=canciones&action=listar'>Volver</a>";
                    echo "</td>";
                echo"</tr>";                   
           

            echo "</table>";

           ?>
        </tbody>
    </table>
</body>
</html>