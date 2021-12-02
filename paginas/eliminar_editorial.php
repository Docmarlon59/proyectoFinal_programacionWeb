<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos *******************************2
    require_once "conn_mysql_prow.php";
	
	// Recuperamos los valores de los objetos de QUERYSTRING que viene desde la URL mediante GET ******
	$id_editorial= $_GET["id"];
	
	// Conversión explicita de CARACTER a ENTERO mediante el forzado de (int), 
	// los valores por GET son tipo STRING ************************************************************
	$id_editorial = (int)$id_editorial; //*****************************************************************
	
    //Verificamos que SI VENGA EL NUMERO DE EMPLEADO **************************************************
	if($id_editorial == "")
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	if(is_null($id_editorial))
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	if(!is_int($id_editorial))
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	
    // Escribimos la consulta para recuperar el UNICO REGISTRO de MySQL mediante el ID obtenido por _GET
    $sql2 = 'SELECT * FROM editorial WHERE id_editorial ='.$id_editorial;
	

    // Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql2);
      
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();
    // El resultado se mostrará en la página, en el BODY ***************************************************
	
	//Escribimos la consulta para eliminar el registro de la tabla de la base de datos MySQL ***************
	$sqlBorrar = "DELETE From editorial WHERE id_editorial=" . $id_editorial;
	
	// Ejecutamos la sentencia DELETE de SQL a partir de la conexión usando PDO ****************************
    $conn->exec($sqlBorrar);
?>
<?php include('header.php') ?>
<table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>editorial</th>
                <th>ciudad</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
        ?>
            <tr>
                <td><?php echo $row['id_editorial']; ?></td>
                <td><?php echo $row['editorial']; ?></td>
                <td><?php echo $row['ciudad']; ?></td>
            </tr>
        <?php } ?>
        <tr>
		
            <td colspan="6">&nbsp;</td>

        </tr>
        <tr>
            <td>&nbsp;</td>
    		<td><a href="reporte_borrar_editoriales.php">
				        <<< --- Regresar al reporte completo (Para eliminar mas registros)
                </a>
            </td>
    		<td>&nbsp;</td>
            <td>&nbsp;</td>
    		<td>&nbsp;</td>
    		 <th><a href="alta_editoriales.php">Agregar otra editorial</a></th>
        </tr>
        </tbody>
    </table>
<?php include('sidebar_editorial.php') ?>