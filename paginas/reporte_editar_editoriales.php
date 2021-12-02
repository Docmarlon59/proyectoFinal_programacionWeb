<?php
    require_once "conn_mysql_prow.php";
    $sql = 'SELECT * FROM editorial';
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
?>
<?php include('header.php') ?>

<table border="1" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>editorial</th>
                <th>ciudad</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la p�gina un renglon de tabla HTML por cada registro de tabla de MySQL
        ?>
            <tr>
                <td><?php echo $row['id_editorial']; ?></td>
                <td><?php echo $row['editorial']; ?></td>
                <td><?php echo $row['ciudad']; ?></td>

                <!-- CELDA 2 para la ilga de EDITAR -->
                 <td><a href="editar_editoriales.php?id=
				 <?php echo $row['id_editorial']; ?>">
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
                <td><a href="alta_editoriales.php">Agregar otra editorial</a></td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
         </tr>   
        </tbody>
    </table>
    <?php
			//Cerramos la oonexion a la base de datos **********************************************
			$conn = null;
     ?>
<?php include('sidebar_editorial.php') ?>