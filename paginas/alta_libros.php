<?php
    // Insertamos el código PHP donde nos conectamos a la base de datos *******************************
    require_once "conn_mysql_prow.php";
    $result = "";

    // Escribimos la consulta para recuperar los departamentos de la tabla departamentos **************
    $sql = 'SELECT id_materia, materia FROM materia';
    // Almacenamos los resultados de la consulta en una variable llamada $smtp a partir de la conexión
    $stmt = $conn->query($sql);
    // Recuperamos los valores de los registros de la tabla que ya están en la variable $stmt
    $rows = $stmt->fetchAll();
	// Verificamos si está vacia la variable $smtp, si es positivo imprimimos en pantalla que no trae
    if (empty($rows)) {
        $result = "No se encontraron resultados !!";
    }
    $sql1 = 'SELECT id_editorial, editorial FROM editorial';
    // Almacenamos los resultados de la consulta en una variable llamada $smtp a partir de la conexión
    $stmt = $conn->query($sql1);
    // Recuperamos los valores de los registros de la tabla que ya están en la variable $stmt
    $rows1 = $stmt->fetchAll();
	// Verificamos si está vacia la variable $smtp, si es positivo imprimimos en pantalla que no trae
    if (empty($rows1)) {
        $result = "No se encontraron resultados !!";
    }
    $sql2 = 'SELECT id_autor, nombre, materno, paterno FROM autor';
    // Almacenamos los resultados de la consulta en una variable llamada $smtp a partir de la conexión
    $stmt = $conn->query($sql2);
    // Recuperamos los valores de los registros de la tabla que ya están en la variable $stmt
    $rows2 = $stmt->fetchAll();
	// Verificamos si está vacia la variable $smtp, si es positivo imprimimos en pantalla que no trae
    if (empty($rows2)) {
        $result = "No se encontraron resultados !!";
    }
?>
<?php include('header.php') ?> 

<form action="grabar_libros.php" method="post" id="formulario1" onsubmit="return ValidaAltaLibros()">
                <div>
                    <br />
                      <label for="libro">Libro</label>
                    <br />
                    <br />
                         ID de libro: 
                         <input type="text" name="txtid_libro" id="txtid_libro" size="10">
                    <br />
                    <br />
                         Titulo de libro: 
                         <input type="text" name="txttitulo" id="txttitulo" size="20">
                    <br />
                    <br />
                         Numero de paginas: 
                         <input type="text" name="txtnpaginas" id="txtnpaginas" size="10">
                    <br />
                    <br />
                         año de publicacion: 
                         <input type="text" name="txtaniopublicacion" id="txtaniopublicacion" size="10">
                    <br />
                    <br />
                         Precio Actual: 
                         <input type="text" name="txtprecio" id="txtprecio" size="15">
                    <br />
                    <br />
                         Stock: 
                         <input type="text" name="txtstock" id="txtstock" size="10">
                    <br />
                    <br>
                     
                    <label for="materia">Materia :</label>
                    <select name="combo_materia" id="combo_materia">
                      <option value="0">-- Selecciona una materia --</option>
                        <?php 
						     foreach ($rows as $row) 
						     {
                                echo '<option value="'.$row['id_materia'].'">'.$row['materia'].'</option>';
                             }
					    ?>
                    </select>
                    <br>
                    <br>
                    Editorial : 
                    <select name="combo_editorial" id="combo_editorial">
                      <option value="0">-- Selecciona una editorial --</option>
                        <?php 
						     foreach ($rows1 as $row1) 
						     {
                                echo '<option value="'.$row1['id_editorial'].'">'.$row1['editorial'].'</option>';
                             }
					    ?>
                    </select>
                    <br>
                    <br>
                    Autor :
                    <select name="combo_autor" id="combo_autor">
                      <option value="0">-- Selecciona un autor --</option>
                        <?php 
						     foreach ($rows2 as $row2) 
						     {
                                echo '<option value="'.$row2['id_autor'].'">'.$row2['nombre'].(" ").$row2['paterno'].(" ").$row2['materno'].'</option>';
                             }
					    ?>
                    </select>
                    <br>
                    <br />
                      <input type="submit" name="Addlibro" id="Addlibro" value="  Registrar este libro " />
                    <br />
                </div>
            </form>
            <?php
			//Cerramos la oonexion a la base de datos **********************************************
			$conn = null;
     ?>
<?php include('sidebar_libro.php') ?>