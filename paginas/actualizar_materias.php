<?php
    
    require_once "conn_mysql_prow.php";
	
	
    $numero_dpto = $_POST["txt_id_materia_oculto"];
	$materia = strtoupper(trim($_POST["txt_materia"])); //Se convierte a MAYUSCULAS

    
       $sqlUPDATE = "UPDATE materia SET materia = '$materia' WHERE id_materia='$numero_dpto'";

        $conn->exec($sqlUPDATE);
	    $mensaje = "materia ACTUALIZADO SATISFACTORIAMENTE";
?>
<?php include('header.php') ?>
<fieldset style="width: 90%;"    >
            <legend><?php echo $mensaje; ?></legend>
                <div>
                    <br />
                         <b>Código de materia:</b> <?php echo ($numero_dpto); ?>
                    <br />
					<br />
                         <b>materia:</b> <?php echo ($materia); ?>
                    <br />
					<br />
                    <a href="alta_materias.php">REGISTRAR OTRO materia</a>
                </div>
        </fieldset>
<?php		
    $conn = null;
?>
<?php include('sidebar_materias.php') ?>