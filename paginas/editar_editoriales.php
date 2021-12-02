<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos 
    require_once "conn_mysql_prow.php";
	
	// Recuperamos los valores de los objetos de QUERYSTRING que viene desde la URL mediante GET ******
	$id_editorial = $_GET["id"];
	$id_editorial = trim($id_editorial);
	
	// Escribimos la consulta para recuperar el UNICO REGISTRO de MySQL mediante el ID obtenido por _GET
    $sql = "SELECT * FROM editorial WHERE id_editorial = ".$id_editorial;
	
	// Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql);
      
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();
	
    // El resultado se mostrará en la página, en el BODY ***************************************************
    if (empty($rows)) {
        $result = "No se encontraron editoriales !!";
		header("Location: reporte_editar_editorial.php");
		exit;
    }
?>
<?php include('header.php') ?>

<form action="actualizar_editoriales.php" method="post" id="formulario1" onsubmit="return ValidaFormulario1()">
		  <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
          ?>
                <div>
                    <br />
                         id editorial: 
                         <input type="text" 
						 name="txt_id_editorial" 
						 id="txt_id_editorial" 
						 size="10" maxlength="2" disabled
						 value="<?php echo $row['id_editorial']; ?>" />
						 
						 <input type="hidden" 
						 name="txt_id_editorial_oculto" 
						 id="txt_id_editorial_oculto" 
						 size="10" maxlength="2"
						 value="<?php echo $row['id_editorial']; ?>" />
						 
                    <br />
                    <br />
                         Nombre de editorial: 
                         <input type="text" 
						 name="txt_editorial" 
						 id="txt_editorial" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['editorial']; ?>" />
                    <br />
                    <br />
                         Ciudad: 
                         <input type="text" 
						 name="txt_ciudad" 
						 id="txt_ciudad" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['ciudad']; ?>" />
                    <br />
                    <br />
                      <input type="submit" name="AddEditorial" id="AddEditorial" value="  Actualizar este editorial " />
                    <br />
                </div>
			<?php } ?>
            </form>

<?php include('sidebar_editorial.php') ?>