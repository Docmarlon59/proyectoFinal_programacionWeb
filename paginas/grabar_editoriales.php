<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos 
    require_once "conn_mysql_prow.php";
	
	//Recuperamos los valores de las cajas de texto y de los demás objetos de formulario
    $id_editorial = $_POST["txtid_editorial"];
	$id_editorial = (int)$id_editorial;
	$editorial = strtoupper(trim($_POST["txteditorial"])); //Se convierte a MAYUSCULAS
    $ciudad = strtoupper(trim($_POST["txtciudad"]));
    
	
	
	$sql = "SELECT * FROM editorial WHERE id_editorial=" . $id_editorial;
	$result = $conn->query($sql);
    $rows = $result->fetchAll();
	
	if(empty($rows)) // Si detecta VACIO la consulta de busqueda del ID de empleado
	{
	
    // Escribimos la consulta para INSERTAR LOS DATOS EN LA TABLA de empleados (PDO)
	// Concatenando 2 strings armamos la sentencia INSERT INTO ******************
       $sqlINSERT1 = "INSERT INTO editorial(id_editorial, editorial, ciudad) ";
	    $sqlINSERT2 = $sqlINSERT1 . "VALUES ($id_editorial, '$editorial','$ciudad')";
    // Ejecutamos la sentencia INSERT de SQL a partir de la conexión usando PDO 
	// mediante la propiedad "EXEC" de la linea de conexión *******************
	
        $conn->exec($sqlINSERT2);
	    $mensaje = "Editorial REGISTRADa SATISFACTORIAMENTE";
	
	} else {
	
	// En caso de que si exista ya capturado ese empleado en la base de datos
	    $mensaje = "Ese ID de editorial ya existe en la base de datos";
	
		$id_materia = "";
		$materia = "";
		
	}
?>
<?php include('header.php') ?>
                <div>
                    <br />
                         <b>id_editorial:</b> <?php echo ($id_editorial); ?>
                    <br />
                    <br />
                         <b>materia:</b> <?php echo ($editorial); ?>
                    <br />
                    <br />
                         <b>ciudad:</b> <?php echo ($ciudad); ?>
                    <br />
                    <br />
                    <tr>
                    <td>&nbsp;</td>
                    <td><a href="alta_editoriales.php">
                                <<< --- Dar de alta otra Editorial
                        </a>
                    </td>
                </div>
<?php include('sidebar_editorial.php') ?>