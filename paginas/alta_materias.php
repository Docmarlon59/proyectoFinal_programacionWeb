<?php
    require_once "conn_mysql_prow.php";
    $result = "";
    $sql = 'SELECT * FROM materia';
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();
    if (empty($rows)) {
        $result = "No se encontraron resultados !!";
    }
?>
<?php include('header.php') ?>  

            <form action="grabar_materias.php" method="post" id="formulario1" onsubmit="return ValidaAltaMaterias()">
                <div>
                    
                    <br />
                    <br />
                         Id materia: 
                         <input type="text" name="txtid_materia" id="txtid_materia" size="18">
                    <br />
                    <br />
                         Materia: 
                         <input type="text" name="txtmateria" id="txtmateria" size="20">
                    <br />
                    <br />
                      <input type="submit" name="Addmateria" id="Addmateria" value="  Registrar esta materia " />
                    <br />
                </div>
            </form>

<?php include('sidebar_materias.php') ?>