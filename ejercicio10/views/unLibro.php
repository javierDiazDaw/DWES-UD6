<html>
    <head>
        <title>Catálogo libros</title>
    </head>
    <body>
        <h1>Libros dados de alta en nuestra libreria</h1>
        <table border="1">
        <tr>
            <th>TITULO</th>
            <th>ISBN</th>
            <th>PRECIO</th>
        </tr>   
        <?php foreach ($periodicos as $periodico): ?>        
            <tr>
                <td><?php echo $periodico['titulo']?></td>
                <td><?php echo $periodico['isbn']?></td>
                <td><?php echo number_format($periodico['precio'],2)?></td>
            </tr> 
            <?php endforeach; ?>    
    </table>
    </body>
</html>