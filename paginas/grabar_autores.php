<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos 
    require_once "conn_mysql_prow.php";
	
	//Recuperamos los valores de las cajas de texto y de los demás objetos de formulario
    $id_autor = $_POST["txtid_autor"];
	$id_autor = (int)$id_autor;
	$nombre = strtoupper(trim($_POST["txtnombre"])); //Se convierte a MAYUSCULAS
    $paterno = strtoupper(trim($_POST["txtpaterno"]));
    $materno = strtoupper(trim($_POST["txtmaterno"])); //Se convierte a MAYUSCULAS
    $direccion = strtoupper(trim($_POST["txtdireccion"]));
    $pais = strtoupper(trim($_POST["txtpais"])); //Se convierte a MAYUSCULAS
    $nickname = strtoupper(trim($_POST["txtnickname"])); //Se convierte a MAYUSCULAS
    
    
	
	
	$sql = "SELECT * FROM autor WHERE id_autor=" . $id_autor;
	$result = $conn->query($sql);
    $rows = $result->fetchAll();
	
	if(empty($rows)) // Si detecta VACIO la consulta de busqueda del ID de empleado
	{
	
    // Escribimos la consulta para INSERTAR LOS DATOS EN LA TABLA de empleados (PDO)
	// Concatenando 2 strings armamos la sentencia INSERT INTO ******************
       $sqlINSERT1 = "INSERT INTO autor(id_autor, nombre, paterno, materno, direccion, pais, nickname) ";
	    $sqlINSERT2 = $sqlINSERT1 . "VALUES ($id_autor, '$nombre','$paterno','$materno','$direccion','$pais','$nickname')";
    // Ejecutamos la sentencia INSERT de SQL a partir de la conexión usando PDO 
	// mediante la propiedad "EXEC" de la linea de conexión *******************
	
        $conn->exec($sqlINSERT2);
	    $mensaje = "Editorial REGISTRADa SATISFACTORIAMENTE";
	
	} else {
	
	// En caso de que si exista ya capturado ese empleado en la base de datos
	    $mensaje = "Ese ID de autor ya existe en la base de datos";
	
		$id_materia = "";
		$materia = "";
		
	}
?>
<?php include('header.php') ?>
                <div>
                    <br />
                         <b>id_autor:</b> <?php echo ($id_autor); ?>
                    <br />
                    <br />
                         <b>nombre:</b> <?php echo ($nombre); ?>
                    <br />
                    <br />
                         <b>paterno:</b> <?php echo ($paterno); ?>
                    <br />
                    <br />
                         <b>materno:</b> <?php echo ($materno); ?>
                    <br />
                    <br />
                    <b>direccion:</b> <?php echo ($direccion); ?>
                    <br />
                    <br />
                    <b>pais:</b> <?php echo ($pais); ?>
                    <br />
                    <br />
                    <b>nickname:</b> <?php echo ($nickname); ?>
                    <br />
                    <br />
                    <tr>
                    <td>&nbsp;</td>
                    <td><a href="alta_autores.php">
                                <<< --- Dar de alta otro autor
                        </a>
                    </td>
                </div>
<?php include('sidebar_autor.php') ?>