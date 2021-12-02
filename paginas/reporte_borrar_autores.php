<?php
    require_once "conn_mysql_prow.php";
    $result;
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
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($rows as $row) {
        ?>
            <tr>
                <td><?php echo $row['id_autor']; ?></td>
                <td><a onClick="return borrar_autor(<?php echo $row['id_autor']; ?>);" 
                href="eliminar_autor.php?id=<?php echo $row['id_autor']; ?>">
				        <?php echo $row['nombre'].(" ").$row['paterno'].(" ").$row['materno']; ?>
                    </a>
                </td>
                <td><?php echo $row['direccion']; ?></td>
                <td><?php echo $row['pais']; ?></td>
                <td><?php echo $row['nickname']; ?></td>
            </tr>
        <?php } ?>  
        </tbody>
    </table>
    <?php
			//Cerramos la oonexion a la base de datos **********************************************
			$conn = null;
     ?>
<?php include('sidebar_autor.php') ?>