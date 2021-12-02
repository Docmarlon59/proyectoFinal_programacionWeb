<?php
     session_start();
    // Insertamos el código PHP donde nos conectamos a la base de datos*** 
    require_once "conn_mysql_prow.php";
	//Recuperamos los valores de las cajas de texto y de los demás objetos de formulario
    $Vclave = trim($_POST["txtpassword"]);
	$Vclave = (int)$Vclave;
	$Vusuario = trim($_POST["txtusuario"]);
    // Escribimos la consulta para recuperar el UNICO usuario que se firmo en el LOGIN
    $sqlLOGIN = "SELECT * FROM usuarios WHERE usuario='$Vusuario' AND clave=$Vclave";
    // Ejecutamos la consulta y asignamos el resultado a la variable llamada $result
    $result = $conn->query($sqlLOGIN);
    // Recuperamos los valores o registros de la variable $result y los asignamos a la variable $rows
    $rows = $result->fetchAll();	
	// Verificamos si la variable $rows trae el valor de 1 o de 0  
	$cuantos = (int)$rows;
	// SI $rows es igual a 1 es que SI encontro al usuario, si es igual a 0 es que no lo encontro
	if ($cuantos > 0) 
	{
	   //En caso de haber encontrado al usuario, le creamos una variable de SESION para su ingreso
	   $_SESSION["validado"]="true"; 
	   //Redireccionamos a una de las páginas del sistema en linea
	   $conn = null;
       header("Location: home.php");
	   //Cerramos la oonexion a la base de datos ***
	   exit;
    } else {
	   //En caso de NO haber encontrado al usuario y su contraseña lo
	   //redireccionamos a la página de LOGIN para que se vuelva a firmar
	    $conn = null;
        header("Location: ../index.php");
	    //Cerramos la conexion a la base de datos ***
	   exit;
    }
?>