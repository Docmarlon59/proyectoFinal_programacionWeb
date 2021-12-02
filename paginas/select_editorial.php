<?php
    require_once "conn_mysql_prow.php";
 
    $sql2 = 'SELECT * FROM editorial';
	
    $result = $conn->query($sql2);
      
    $rows = $result->fetchAll();
?>
<?php include('header.php') ?>

<table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Editorial</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
        ?>
            <tr>
                <td><?php echo $row['id_editorial']; ?></td>
                <!-- Creamos una celda con un enlace HTML que apunta a otro archivo PHP -->
                <td><?php echo $row['editorial']; ?></td> 
                <td><?php echo $row['ciudad']; ?></td> 
            </tr>
        <?php } ?>
    </table>

<?php include('sidebar_materias.php') ?>