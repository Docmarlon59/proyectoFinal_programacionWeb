<?php
    require_once "conn_mysql_prow.php";
    $sql = 'SELECT * FROM autor';
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
?>
<?php include('header.php') ?>

<table border="1" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>autor</th>
                <th>direccion</th>
                <th>pais</th>
                <th>nickname</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la p�gina un renglon de tabla HTML por cada registro de tabla de MySQL
        ?>
            <tr>
                <td><?php echo $row['id_autor']; ?></td>
                <td><?php echo $row['nombre'].(" ").$row['paterno'].(" ").$row['materno']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
                <td><?php echo $row['pais']; ?></td>
                <td><?php echo $row['nickname']; ?></td>

                <!-- CELDA 2 para la ilga de EDITAR -->
                 <td><a href="editar_autores.php?id=
				 <?php echo $row['id_autor']; ?>">
				        editar
                     </a>
                </td>
                    
            </tr>
			
        <?php } ?>
        
         <tr>
                <td colspan="4">&nbsp;</td>
         </tr>
         <tr>
                <td>&nbsp;</td>
                <td><a href="alta_editoriales.php">Agregar otro autor</a></td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
         </tr>   
        </tbody>
    </table>
    <?php
			//Cerramos la oonexion a la base de datos **********************************************
			$conn = null;
     ?>
<?php include('sidebar_autor.php') ?>