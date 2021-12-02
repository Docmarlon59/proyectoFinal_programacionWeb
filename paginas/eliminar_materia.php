<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos *******************************2
    require_once "conn_mysql_prow.php";
	
	// Recuperamos los valores de los objetos de QUERYSTRING que viene desde la URL mediante GET ******
	$id_materia= $_GET["id"];
	
	// Conversión explicita de CARACTER a ENTERO mediante el forzado de (int), 
	// los valores por GET son tipo STRING ************************************************************
	$id_materia = (int)$id_materia; //*****************************************************************
	
    //Verificamos que SI VENGA EL NUMERO DE EMPLEADO **************************************************
	if($id_materia == "")
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	if(is_null($id_materia))
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	if(!is_int($id_materia))
	{
		//Esta página de empleado_no_encontrado.php se debe generar para dar aviso al usuario
		header("Location: materia_no_encontrado.php");
		exit;
	}
	
    // Escribimos la consulta para recuperar el UNICO REGISTRO de MySQL mediante el ID obtenido por _GET
    $sql2 = 'SELECT * FROM materia WHERE id_materia ='.$id_materia;
	

    // Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql2);
      
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();
    // El resultado se mostrará en la página, en el BODY ***************************************************
	
	//Escribimos la consulta para eliminar el registro de la tabla de la base de datos MySQL ***************
	$sqlBorrar = "DELETE From materia WHERE id_materia=" . $id_materia;
	
	// Ejecutamos la sentencia DELETE de SQL a partir de la conexión usando PDO ****************************
    $conn->exec($sqlBorrar);
?>
<?php include('header.php') ?>
<table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Materia</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
        ?>
            <tr>
                <td><?php echo $row['id_materia']; ?></td>
                <td><?php echo $row['materia']; ?></td>
                
            </tr>
        <?php } ?>
        <tr>
		
            <td colspan="6">&nbsp;</td>

        </tr>
        <tr>
            <td>&nbsp;</td>
    		<td><a href="reporte_borrar_materias.php">
				        <<< --- Regresar al reporte completo (Para eliminar mas registros)
                </a>
            </td>
    		<td>&nbsp;</td>
            <td>&nbsp;</td>
    		<td>&nbsp;</td>
    		 <th><a href="alta_materias.php">Agregar otra Materia</a></th>
        </tr>
        </tbody>
    </table>
<?php include('sidebar_materias.php') ?>