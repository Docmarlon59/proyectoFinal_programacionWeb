<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos 
    require_once "conn_mysql_prow.php";
	
	// Recuperamos los valores de los objetos de QUERYSTRING que viene desde la URL mediante GET ******
	$id_materia = $_GET["id"];
	$id_materia = trim($id_materia);
	
	// Escribimos la consulta para recuperar el UNICO REGISTRO de MySQL mediante el ID obtenido por _GET
    $sql = "SELECT * FROM materia WHERE id_materia = ".$id_materia;
	
	// Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql);
      
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();
	
    // El resultado se mostrará en la página, en el BODY ***************************************************
    if (empty($rows)) {
        $result = "No se encontraron materias !!";
		header("Location: reporte_editar_materias.php");
		exit;
    }
?>
<?php include('header.php') ?>

<form action="actualizar_materias.php" method="post" id="formulario1" onsubmit="return ValidaFormulario3()">
		  <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
          ?>
                <div>
                    <br />
                         id materia: 
                         <input type="text" 
						 name="txt_id_materia" 
						 id="txt_id_materia" 
						 size="10" maxlength="2" disabled
						 value="<?php echo $row['id_materia']; ?>" />
						 
						 <input type="hidden" 
						 name="txt_id_materia_oculto" 
						 id="txt_id_materia_oculto" 
						 size="10" maxlength="2"
						 value="<?php echo $row['id_materia']; ?>" />
						 
                    <br />
                    <br />
                         Nombre de materia: 
                         <input type="text" 
						 name="txt_materia" 
						 id="txt_materia" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['materia']; ?>" />
                    <br />
                    <br />
                      <input type="submit" name="AddMateria" id="AddMateria" value="  Actualizar este materia " />
                    <br />
                </div>
			<?php } ?>
            </form>

<?php include('sidebar_materias.php') ?>