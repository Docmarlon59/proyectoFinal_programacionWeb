<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos 
    require_once "conn_mysql_prow.php";
	
	//Recuperamos los valores de las cajas de texto y de los demás objetos de formulario
    $id_libro = $_POST["txtid_libro"];
	$id_libro = (int)$id_libro;
	$titulo = strtoupper(trim($_POST["txttitulo"])); //Se convierte a MAYUSCULAS
	$npaginas = $_POST["txtnpaginas"];
    $precio = $_POST["txtprecio"];
	$stock= $_POST["txtstock"];
	$aniopublicacion = $_POST["txtaniopublicacion"];
	$materia = $_POST["combo_materia"];
	$editorial = $_POST["combo_editorial"];
	$autor = $_POST["combo_autor"];

	$sql = "SELECT * FROM libros WHERE id_libro=" . $id_libro;
	$result = $conn->query($sql);
    $rows = $result->fetchAll();
	
	if(empty($rows)) // Si detecta VACIO la consulta de busqueda del ID de empleado
	{

		//  INSERT INTO libros(id_libro, titulo, npaginas, aniopublicacion, precioactual, stock, id_materia, id_editorial, id_autor)
		// VALUES (id_libro, '$titulo', $npaginas, '$aniopublicacion', $precio, '$stock', $materia, $editorial, $autor);
	
    // Escribimos la consulta para INSERTAR LOS DATOS EN LA TABLA de empleados (PDO)
	// Concatenando 2 strings armamos la sentencia INSERT INTO ******************
       $sqlINSERT1 = "INSERT INTO libros(id_libro, titulo, npaginas, aniopublicacion, precioactual, stock, id_materia, id_editorial, id_autor) ";
	    $sqlINSERT2 = $sqlINSERT1 . "VALUES (id_libro, '$titulo', $npaginas, '$aniopublicacion', $precio, '$stock', $materia, $editorial, $autor);";
    // Ejecutamos la sentencia INSERT de SQL a partir de la conexión usando PDO 
	// mediante la propiedad "EXEC" de la linea de conexión *******************
	
        $conn->exec($sqlINSERT2);
	    $mensaje = "libro REGISTRADO SATISFACTORIAMENTE";
	
	} else {
	
	// En caso de que si exista ya capturado ese empleado en la base de datos
	    $mensaje = "Ese ID de libro ya existe en la base de datos";
	
		$autor = "";
		$editorial = "";
		$materia = "";
		$aniopublicacion = "";
		$stock = "";
		$precio = "";
		$npaginas = "";
		$titulo = "";
		$npaginas = "";
		
	}
?>
<?php include('header.php') ?>  
<fieldset style="width: 90%;"    >
            <legend><?php echo $mensaje; ?></legend>
                <div>
                    <br />
                         <b>ID de libro: </b> <?php echo ($id_libro); ?>
                    <br />
                    <br />
                         <b>Titulo de libro: </b> <?php echo ($titulo); ?>
                    <br />
                    <br />
                         <b>Numero de paginas: </b> <?php echo ($npaginas); ?>
                    <br />
                    <br />
                         <b>año de publicacion:</b> <?php echo ($aniopublicacion); ?>
                    <br />
                    <br />
                        <b>Precio Actual:</b> <?php echo ($precio); ?>
                    <br />
					<br />
                        <b>Stock:</b> <?php echo ($stock); ?>
                    <br />
					<br />
                        <b>Materia:</b> <?php echo ($materia); ?>
                    <br />
					<br />
                        <b>Editorial:</b> <?php echo ($editorial); ?>
                    <br />
					<br />
                        <b>Autor:</b> <?php echo ($autor); ?>
                    <br />
                    <br />
                    <a href="alta_libros.php">REGISTRAR OTRO libro</a>
                </div>
        </fieldset> 
        <?php
			//Cerramos la conexion a la base de datos *************************************
			$conn = null;
     ?>
<?php include('sidebar_libro.php') ?>