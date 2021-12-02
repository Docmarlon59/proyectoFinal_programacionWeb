<?php
    //Insertamos el código PHP donde nos conectamos a la base de datos *******************************
    require_once "conn_mysql_prow.php";
    $result;
    // Escribimos la consulta para recuperar los registros de la tabla de MySQL
    $sql = 'SELECT L.id_libro, L.titulo, L.npaginas, L.aniopublicacion, L.precioactual, L.stock, M.materia, 
    E.editorial, A.nombre, A.paterno, A.materno FROM libros L INNER JOIN materia M ON L.id_materia = M.id_materia 
    INNER JOIN editorial E ON L.id_editorial = E.id_editorial INNER JOIN autor A ON L.id_autor = A.id_autor';
	

    // Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql);
      
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();
	
	// Los valores que tendrá la variable $rows se organizan en un arreglo asociativo
	// (Variable con varias valores)
	// y se usará un ciclo foreach para recuper los valores uno a uno de ese arreglo
    // El resultado se mostrará en una tabla HTML ***************************************************
?>
<?php include('header.php') ?>
<table border="1" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Num Paginas</th>
                <th>Precio</th>
                <th>Año Publicacion</th>
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
                <td><?php echo $row['id_libro']; ?></td>
                <!-- Creamos una celda con un enlace HTML que apunta a otro archivo PHP -->
                <td><a onClick="return borrar_libros();" 
                href="eliminar_libro.php?id=<?php echo $row['id_libro']; ?>">
				        <?php echo $row['titulo']; ?>
                    </a>
                </td>
                <td><?php echo $row['npaginas']; ?></td>
                <td><?php echo $row['precioactual']; ?></td>
                <td><?php echo $row['aniopublicacion']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><?php echo $row['materia']; ?></td>
                <td><?php echo $row['editorial']; ?></td>
                <td><?php echo $row['nombre'].(" ").$row['paterno'].(" ").$row['materno']; ?></td>
            </tr>
        <?php } ?>
        
         <tr>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
         </tr>
         <tr>
                <th>&nbsp;</th>
                <th><a href="alta_libros.php">Agregar otro libro</a></th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
         </tr>   
        </tbody>
    </table>
    <?php
			//Cerramos la oonexion a la base de datos **********************************************
			$conn = null;
     ?>
    <?php include('sidebar_libro.php') ?>