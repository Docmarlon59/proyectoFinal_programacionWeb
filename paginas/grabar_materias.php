<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos 
    require_once "conn_mysql_prow.php";
	
	//Recuperamos los valores de las cajas de texto y de los demás objetos de formulario
    $id_materia = $_POST["txtid_materia"];
	$id_materia = (int)$id_materia;
	$materia = strtoupper(trim($_POST["txtmateria"])); //Se convierte a MAYUSCULAS
	
	
	$sql = "SELECT * FROM materia WHERE id_materia=" . $id_materia;
	$result = $conn->query($sql);
    $rows = $result->fetchAll();
	
	if(empty($rows)) // Si detecta VACIO la consulta de busqueda del ID de empleado
	{
	
    // Escribimos la consulta para INSERTAR LOS DATOS EN LA TABLA de empleados (PDO)
	// Concatenando 2 strings armamos la sentencia INSERT INTO ******************
       $sqlINSERT1 = "INSERT INTO materia(id_materia, materia) ";
	    $sqlINSERT2 = $sqlINSERT1 . "VALUES ($id_materia, '$materia')";
    // Ejecutamos la sentencia INSERT de SQL a partir de la conexión usando PDO 
	// mediante la propiedad "EXEC" de la linea de conexión *******************
	
        $conn->exec($sqlINSERT2);
	    $mensaje = "materia REGISTRADa SATISFACTORIAMENTE";
	
	} else {
	
	// En caso de que si exista ya capturado ese empleado en la base de datos
	    $mensaje = "Ese ID de materia ya existe en la base de datos";
	
		$id_materia = "";
		$materia = "";
		
	}
?>
<?php include('header.php') ?>
                <div>
                    <br />
                         <b>id_materia:</b> <?php echo ($id_materia); ?>
                    <br />
                    <br />
                         <b>materia:</b> <?php echo ($materia); ?>
                    <br />
                    <br />
                    <tr>
                    <td>&nbsp;</td>
                    <td><a href="alta_materias.php">
                                <<< --- Dar de alta otra materia
                        </a>
                    </td>
                </div>
<?php include('sidebar_materias.php') ?>