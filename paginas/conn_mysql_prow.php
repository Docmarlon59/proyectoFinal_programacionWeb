<?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $BasedeDatos = "prograweb";
        
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$BasedeDatos",$username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        
    }
?>