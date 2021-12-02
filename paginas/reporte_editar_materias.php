<?php
    require_once "conn_mysql_prow.php";
    $sql = 'SELECT * FROM materia';
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
?>
<?php include('header.php') ?>

<table border="1" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Materia</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la p�gina un renglon de tabla HTML por cada registro de tabla de MySQL
        ?>
            <tr>
                <td><?php echo $row['id_materia']; ?></td>
                <td><?php echo $row['materia']; ?></td>

                <!-- CELDA 2 para la ilga de EDITAR -->
                 <td><a href="editar_materias.php?id=
				 <?php echo $row['id_materia']; ?>">
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
                <td><a href="alta_materias.php">Agregar otra Materia</a></td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
         </tr>   
        </tbody>
    </table>
    <?php
			//Cerramos la oonexion a la base de datos **********************************************
			$conn = null;
     ?>
<?php include('sidebar_materias.php') ?>