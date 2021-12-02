<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos 
    require_once "conn_mysql_prow.php";
	
	// Recuperamos los valores de los objetos de QUERYSTRING que viene desde la URL mediante GET ******
	$id_autor = $_GET["id"];
	$id_autor = trim($id_autor);
	
	// Escribimos la consulta para recuperar el UNICO REGISTRO de MySQL mediante el ID obtenido por _GET
    $sql = "SELECT * FROM autor WHERE id_autor = ".$id_autor;
	
	// Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sql);
      
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();
	
    // El resultado se mostrará en la página, en el BODY ***************************************************
    if (empty($rows)) {
        $result = "No se encontraron autores !!";
		header("Location: reporte_editar_autores.php");
		exit;
    }
?>
<?php include('header.php') ?>

<form action="actualizar_autores.php" method="post" id="formulario1" onsubmit="return ValidaFormulario1()">
		  <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
          ?>
                <div>
                    <br />
                         id autor: 
                         <input type="text" 
						 name="txt_id_autor" 
						 id="txt_id_autor" 
						 size="10" maxlength="2" disabled
						 value="<?php echo $row['id_autor']; ?>" />
						 
						 <input type="hidden" 
						 name="txt_id_autor_oculto" 
						 id="txt_id_autor_oculto" 
						 size="10" maxlength="2"
						 value="<?php echo $row['id_autor']; ?>" />
						 
                    <br />
                    <br />
                         Nombre de autor: 
                         <input type="text" 
						 name="txt_nombre" 
						 id="txt_nombre" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['nombre']; ?>" />
                    <br />
                    <br />
                         paterno: 
                         <input type="text" 
						 name="txt_paterno" 
						 id="txt_paterno" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['paterno']; ?>" />
                    <br />
                    <br />
                         materno: 
                         <input type="text" 
						 name="txt_materno" 
						 id="txt_materno" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['materno']; ?>" />
                    <br />
                    <br />
                         direccion: 
                         <input type="text" 
						 name="txt_direccion" 
						 id="txt_direccion" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['direccion']; ?>" />
                    <br />
                    <br />
                         pais: 
                         <input type="text" 
						 name="txt_pais" 
						 id="txt_pais" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['pais']; ?>" />
                    <br />
                    <br />
                         nickname: 
                         <input type="text" 
						 name="txt_nickname" 
						 id="txt_nickname" 
						 size="40" 
						 maxlength="50" 
						 value="<?php echo $row['nickname']; ?>" />
                    <br />
                    <br />
                      <input type="submit" name="Addautor" id="Addautor" value="  Actualizar este autor " />
                    <br />
                </div>
			<?php } ?>
            </form>

<?php include('sidebar_autor.php') ?>