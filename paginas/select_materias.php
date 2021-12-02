<?php
    require_once "conn_mysql_prow.php";
 
    $sql2 = 'SELECT * FROM materia';
	
    $result = $conn->query($sql2);
      
    $rows = $result->fetchAll();
?>
<?php include('header.php') ?>

<table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>materia</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
        ?>
            <tr>
                <td><?php echo $row['id_materia']; ?></td>
                <!-- Creamos una celda con un enlace HTML que apunta a otro archivo PHP -->
                <td><?php echo $row['materia']; ?></td> 
            </tr>
        <?php } ?>
    </table>

<?php include('sidebar_materias.php') ?>