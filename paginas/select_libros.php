<?php
    //Insertamos el código PHP donde nos conectamos a la base de datos ***********0********************
    require_once "conn_mysql_prow.php";
    $result;
    // Escribimos la consulta para recuperar los registros de la tabla de MySQL
    $sql = 'SELECT L.id_libro, L.titulo, L.npaginas, L.aniopublicacion, L.precioactual, L.stock, M.materia, E.editorial, 
    A.nombre, A.paterno, A.materno FROM libros L INNER JOIN materia M ON L.id_materia = M.id_materia 
    INNER JOIN editorial E ON L.id_editorial = E.id_editorial INNER JOIN autor A ON L.id_autor = A.id_autor';

    // Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql);
      
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();
 ?>
<?php include('header.php') ?>  
                <legend>INGRESO AL SISTEMA</legend>
                <table border="1" width="98%">
                <thead>
                    <tr">
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Paginas</th>
                        <th>Año publicacion</th>
                        <th>precio</th>
                        <th>Stock</th>
                        <th>Materia</th>
                        <th>Editorial</th>
                        <th>Autor</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                    foreach ($rows as $row) {
                    //Imprimimos en la página un renglon de tabla HTML por cada registro de tabla de MySQL
                ?>
                    <tr>
                        <!-- primari key -->
                        <td><?php echo $row['id_libro']; ?></td>
                        <!-- Creamos una celda con un enlace HTML que apunta a otro archivo PHP -->
                        <td><?php echo $row['titulo']; ?></td>
                        
                        <td><?php echo $row['npaginas']; ?></td>
                        <td><?php echo $row['aniopublicacion']; ?></td>
                        <td><?php echo ("$ ").$row['precioactual']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td><?php echo $row['materia']; ?></td>
                        <td><?php echo $row['editorial']; ?></td>
                        <td><?php echo $row['nombre'].(" ").$row['paterno'].(" ").$row['materno']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
    <?php include('sidebar_libro.php') ?>
