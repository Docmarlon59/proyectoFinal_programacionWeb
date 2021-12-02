<?php
session_start();
// Quitamos todas las variables de sesiones
$_SESSION["validado"]="";
session_unset();

// Eliminamos la sesion ********************
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LIBRERIA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/estilos.css">
<script src="./javascript/validar_login.js"></script>
</head>
<body>
  <div class="navbar">
      <a href="#"><i class="fa fa-fw fa-AJAX"></i> AJAX</a>
      <a class="active" href="#"><i class="fa fa-fw fa-libros"></i> Libros</a> 
      <a href="#"><i class="fa fa-fw fa-autores"></i> Autores</a> 
      <a href="./paginas/select_materias.php"><i class="fa fa-fw fa-materia"></i> Materia</a>
      <a href="./paginas/select_editorial.php"><i class="fa fa-fw fa-editorial"></i> Editorial</a> 
      <a href="#"><i class="fa fa-fw fa-login"></i> Inicio</a>
  </div>
  <div class="main">
    <div class="main_logo">
      <img src="./imagenes/portada.jpg" alt="Imagen de libreria" style="width: 100%; height: 100%;">    
    </div>
    <div class="main_pantalla">

    