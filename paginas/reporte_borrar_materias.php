<?php
    require_once "conn_mysql_prow.php";
    $result;
    $sql = 'SELECT id_materia, materia FROM materia';
    $result = $conn->query($sql);
    $rows = $result->fetchAll();
?>
<?php include('header.php') ?>

<table border="1" style="width:100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Materia</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($rows as $row) {
        ?>
            <tr>
                
                <td><?php echo $row['id_materia']; ?></td>
                <td><a onClick="return borrar_empleado(<?php echo $row['id_materia']; ?>);" 
            href="eliminar_materia.php?id=<?php echo $row['id_materia']; ?>">
				        <?php echo $row['materia']; ?>
                    </a>
                </td>
            </tr>
        <?php } ?>  
        </tbody>
    </table>

<?php include('sidebar_materias.php') ?>