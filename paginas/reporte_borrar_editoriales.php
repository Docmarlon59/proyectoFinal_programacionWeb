<?php
    require_once "conn_mysql_prow.php";
    $result;
    $sql = 'SELECT * FROM editorial';
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
?>
<?php include('header.php') ?>

<table border="1" style="width:100%;">
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
        ?>
            <tr>
                
                <td><?php echo $row['id_editorial']; ?></td>
                <td><a onClick="return borrar_editorial(<?php echo $row['id_editorial']; ?>);" 
            href="eliminar_editorial.php?id=<?php echo $row['id_editorial']; ?>">
				        <?php echo $row['editorial']; ?>
                    </a>
                </td>
                <td><?php echo $row['ciudad']; ?></td>
            </tr>
        <?php } ?>  
        </tbody>
    </table>
    <?php
			//Cerramos la oonexion a la base de datos **********************************************
			$conn = null;
     ?>
<?php include('sidebar_editorial.php') ?>