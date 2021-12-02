<?php
    require_once "conn_mysql_prow.php";
    $result = "";
    $sql = 'SELECT * FROM editorial';
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();
    if (empty($rows)) {
        $result = "No se encontraron resultados !!";
    }
?>
<?php include('header.php') ?>  

            <form action="grabar_editoriales.php" method="post" id="formulario1" onsubmit="return ValidaFormulario()">
                <div>
                    
                    <br />
                    <br />
                         ID: 
                         <input type="text" name="txtid_editorial" id="txtid_editorial" size="18">
                    <br />
                    <br />
                         Editorial: 
                         <input type="text" name="txteditorial" id="txteditorial" size="20">
                    <br />
                    <br />
                         Ciudad: 
                         <input type="text" name="txtciudad" id="txtciudad" size="20">
                    <br />
                    <br />
                      <input type="submit" name="Addeditorial" id="Addeditorial" value="  Registrar este editorial " />
                    <br />
                </div>
            </form>

<?php include('sidebar_editorial.php') ?>