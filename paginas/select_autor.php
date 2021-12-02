<?php
    require_once "conn_mysql_prow.php";
 
    $sql2 = 'SELECT * FROM autor';
	
    $result = $conn->query($sql2);
      
    $rows = $result->fetchAll();
?>
<?php include('header.php') ?>

<table border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>autor</th>
                <th>paterno</th>
                <th>materno</th>
                <th>direccion</th>
                <th>pais</th>
                <th>nickname</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            foreach ($rows as $row) {
			//Imprimimos en la página EL UNICO REGISTRO de MySQL en un renglon de HTML
        ?>
            <tr>
                <td><?php echo $row['id_autor']; ?></td>
                <td><?php echo $row['nombre']; ?></td> 
                <td><?php echo $row['paterno']; ?></td> 
                <td><?php echo $row['materno']; ?></td> 
                <td><?php echo $row['direccion']; ?></td> 
                <td><?php echo $row['pais']; ?></td> 
                <td><?php echo $row['nickname']; ?></td> 
            </tr>
        <?php } ?>
    </table>

<?php include('sidebar_autor.php') ?>