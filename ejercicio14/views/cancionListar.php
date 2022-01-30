<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Lista elementos</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="?controller=canciones&action=form">Nuevo elemento</a></li>
            <li><a class="active" href="?controller=canciones&action=listar">Lista elementos</a></li>
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
           
           <?php
                            
            foreach($canciones as $fila ){
                
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
                    echo "<td><a href='?controller=canciones&action=unaCancion&id=$id'>Detalles</a></td>";
                    echo "<td><a href='?controller=canciones&action=form&id=$id'>Editar</a></td>";
                    echo "<td><a href='?controller=canciones&action=borrar&id=$id'>Borrar</a></td>";
                    echo "</td>";
                echo"</tr>";                   
            }

            echo "</table>";

           ?>
        </tbody>
    </table>
</body>
</html>