<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos *******************************2
    require_once "conn_mysql_prow.php";
	
	// Recuperamos los valores de los objetos de QUERYSTRING que viene desde la URL mediante GET ******
	$id_autor= $_GET["id"];
	
	// Conversión explicita de CARACTER a ENTERO mediante el forzado de (int), 
	// los valores por GET son tipo STRING ************************************************************
	$id_autor = (int)$id_autor; //*****************************************************************
	
    //Verificamos que SI VENGA EL NUMERO DE EMPLEADO **************************************************
	if($id_autor == "")
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	if(is_null($id_autor))
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	if(!is_int($id_autor))
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	
    // Escribimos la consulta para recuperar el UNICO REGISTRO de MySQL mediante el ID obtenido por _GET
    $sql2 = 'SELECT * FROM autor WHERE id_autor ='.$id_autor;
	

    // Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql2);
      
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();
    // El resultado se mostrará en la página, en el BODY ***************************************************
	
	//Escribimos la consulta para eliminar el registro de la tabla de la base de datos MySQL ***************
	$sqlBorrar = "DELETE From autor WHERE id_autor=" . $id_autor;
	
	// Ejecutamos la sentencia DELETE de SQL a partir de la conexión usando PDO ****************************
    $conn->exec($sqlBorrar);
?>
<?php include('header.php') ?>
<table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>autor</th>
                <th>direccion</th>
                <th>pais</th>
                <th>nickname</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
        ?>
            <tr>
                <td><?php echo $row['id_autor']; ?></td>
                <td><?php echo $row['nombre'].(" ").$row['paterno'].(" ").$row['materno']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
                <td><?php echo $row['pais']; ?></td>
                <td><?php echo $row['nickname']; ?></td>
            </tr>
        <?php } ?>
        
        <tr>
            <td>&nbsp;</td>
    		<td><a href="reporte_borrar_autores.php">
				        <<< --- Regresar al reporte completo (Para eliminar mas registros)
                </a>
            </td>
    		<td>&nbsp;</td>
            <td>&nbsp;</td>
    		<td>&nbsp;</td>
    		 <th><a href="alta_autores.php">Agregar otro autor</a></th>
        </tr>
        </tbody>
    </table>
<?php include('sidebar_autor.php') ?>