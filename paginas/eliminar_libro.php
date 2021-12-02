<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos *******************************
    require_once "conn_mysql_prow.php";
	
	// Recuperamos los valores de los objetos de QUERYSTRING que viene desde la URL mediante GET ******
	$id_libro = $_GET["id"];
	
	// Conversión explicita de CARACTER a ENTERO mediante el forzado de (int), 
	// los valores por GET son tipo STRING ************************************************************
	 //*****************************************************************
	
    //Verificamos que SI VENGA EL NUMERO DE EMPLEADO **************************************************
	if($id_libro == "")
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: empleado_no_encontrado.php");
		exit;
	}
	if(is_null($id_libro))
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: empleado_no_encontrado.php");
		exit;
	}

    // Escribimos la consulta para recuperar el UNICO REGISTRO de MySQL mediante el ID obtenido por _GET
    $sql2 = "SELECT L.id_libro, L.titulo, L.npaginas, L.aniopublicacion, L.precioactual, L.stock, M.materia, E.editorial, A.nombre, A.paterno, A.materno FROM libros L INNER JOIN materia M ON L.id_materia = M.id_materia INNER JOIN editorial E ON L.id_editorial = E.id_editorial 
    INNER JOIN autor A ON L.id_autor = A.id_autor WHERE id_libro=".$id_libro;
    // Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql2);
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows SELECT l.id_libro, l.titulo, m.materia FROM libros l JOIN materia m ON l.id_materia = m.id_materia WHERE l.id_materia = 3
    $rows = $result->fetchAll();

	//Escribimos la consulta para eliminar el registro de la tabla de la base de datos MySQL ***************
	$sqlBorrar = "DELETE From libros WHERE id_libro = $id_libro";
	
	// Ejecutamos la sentencia DELETE de SQL a partir de la conexión usando PDO ****************************
    $conn->exec($sqlBorrar);
?>
<?php include('header.php') ?>
<table border="1" width="100%">
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
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
        ?>
            <tr>
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
        <tr>
		
		
            <td colspan="6">&nbsp;</td>

        </tr>
        <tr>
            <td>&nbsp;</td>
    		<td><a href="reporte_borrar_libros.php">
				        <<< --- Regresar al reporte completo (Para eliminar mas registros)
                </a>
            </td>
    		
    		 <th><a href="/">Agregar otro libro</a></th>
        </tr>
        </tbody>
    </table>
    <?php
			//Cerramos la oonexion a la base de datos **********************************************
			$conn = null;
     ?>
<?php include('sidebar_libro.php') ?>