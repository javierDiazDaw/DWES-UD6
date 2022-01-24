<html>
    <head>
        <title>Catálogo periodicos</title>
    </head>
    <body>
        <h1>Lista de periodicos</h1>
        <table border="1">
        <tr>
            <th>NOMBRE</th>
            <th>FECHA</th>
        </tr>
        <?php foreach ($periodicos as $periodico): ?>   
            <tr>
                <td><?php echo $periodico['nombre']?></td>
                <td><?php echo $periodico['fecha']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    </body>
</html>