<?php
    require_once "conn_mysql_prow.php";
    $result = "";
    $sql = 'SELECT * FROM autor';
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();
    if (empty($rows)) {
        $result = "No se encontraron resultados !!";
    }
?>
<?php include('header.php') ?>  

            <form action="grabar_autores.php" method="post" id="formulario1" onsubmit="return ValidaFormulario()">
                <div>
                    
                    <br />
                    <br />
                         ID: 
                         <input type="text" name="txtid_autor" id="txtid_autor" size="18">
                    <br />
                    <br />
                         nombre: 
                         <input type="text" name="txtnombre" id="txtnombre" size="20">
                    <br />
                    <br />
                         paterno: 
                         <input type="text" name="txtpaterno" id="txtpaterno" size="20">
                    <br />
                    <br />
                         materno: 
                         <input type="text" name="txtmaterno" id="txtmaterno" size="20">
                    <br />
                    <br />
                         direccion: 
                         <input type="text" name="txtdireccion" id="txtdireccion" size="20">
                    <br />
                    <br />
                         pais: 
                         <input type="text" name="txtpais" id="txtpais" size="20">
                    <br />
                    <br />
                         nickname: 
                         <input type="text" name="txtnickname" id="txtnickname" size="20">
                    <br />
                    <br />
                      <input type="submit" name="Addnickname" id="Addnickname" value="  Registrar este autor " />
                    <br />
                </div>
            </form>

<?php include('sidebar_editorial.php') ?>