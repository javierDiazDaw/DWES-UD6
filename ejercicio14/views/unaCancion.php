<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Lista cancion</title>
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
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Mostrar</th>
            </tr>
        </thead>
        <tbody>
           <!-- Aquí tendrás que mostrar las filas de la tabla-->
           <?php
                         
                            
            foreach($cancion as $fila ){
                
                echo "<tr>";
                    echo "<td>";
                    echo $fila["id"];
                    echo "</td>";
                    echo "<td>";
                    echo $fila["nombre"];
                    echo "</td>";
                    echo "<td>";
                    echo $fila["genero"];
                    echo "</td>";
                    echo "<td>";
                    echo $fila["duracion"];
                    echo "</td>";
                    echo "<td>";
                    echo $fila["lanzamiento"];
                    echo "</td>";
                    $id = $fila["id"];
                    echo "<td><a href='view.php?id=$id'>Detalles</a></td>";
                    echo "<td><a href='edit.php?id=$id'>Editar</a></td>";
                    echo "<td><a href='delete.php?id=$id'>Borrar</a></td>";
                    echo "</td>";
                echo"</tr>";                   
            }

            echo "</table>";

           ?>
        </tbody>
    </table>
</body>
</html>