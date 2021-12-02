<?php
    
    require_once "conn_mysql_prow.php";
	
	
    $numero_dpto = $_POST["txt_id_editorial_oculto"];
	$editorial = strtoupper(trim($_POST["txt_editorial"])); //Se convierte a MAYUSCULAS
    $ciudad = strtoupper(trim($_POST["txt_ciudad"]));

    
       $sqlUPDATE = "UPDATE editorial SET editorial = '$editorial', ciudad = '$ciudad' WHERE id_editorial='$numero_dpto'";

        $conn->exec($sqlUPDATE);
	    $mensaje = "editorial ACTUALIZADO SATISFACTORIAMENTE";
?>
<?php include('header.php') ?>
<fieldset style="width: 90%;"    >
            <legend><?php echo $mensaje; ?></legend>
                <div>
                    <br />
                         <b>Código de editorial:</b> <?php echo ($numero_dpto); ?>
                    <br />
					<br />
                         <b>editorial:</b> <?php echo ($editorial); ?>
                    <br />
                    <br />
                         <b>ciudad:</b> <?php echo ($ciudad); ?>
					<br />
                    <br />
                    <a href="alta_editoriales.php">REGISTRAR OTRa editorial</a>
                </div>
        </fieldset>
<?php		
    $conn = null;
?>
<?php include('sidebar_editorial.php') ?>