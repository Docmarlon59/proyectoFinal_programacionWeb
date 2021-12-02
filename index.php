<?php include('./paginas/header_index.php') ?>
    <fieldset style="width: 95%; font-weight: bold;"    >
            <legend>INGRESO AL SISTEMA</legend>
          <form action="paginas/validacion.php" method="post" id="formulario1" onSubmit="return ValidaFormulario()">
                <div>
                    <br /> 
                         Usuario: 
                         <input type="text" name="txtusuario" id="txtusuario" size="30">
                    <br />
                    <br />
                         Password:   
                    <input type="password" name="txtpassword" id="txtpassword" size="30">
                    <br />
                    <br />
                    <input type="submit" name="btn_aceptar" id="btn_aceptar" value="      Aceptar     " />
                    <br />
                </div>
                <br />
                <br />
            </form>
        </fieldset> 
  <?php include('./paginas/sidebar_index.php') ?>

