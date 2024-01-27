<?php
    $servidor = "localhost";
    $database = "formulario_tur";
    $usuario = "root";
    $contrasena = "";


    try{
        $conexion= new PDO("mysql:host=$servidor;dbname=$formulario_tur",$usuario,$contrasena);
        echo "conectado...";
        $sentencia = $conexion->prepare("SELECT*FROM registro_tur");
        $sentencia->execute();
        $registros= $sentencia->fetchAll(PDO::FETCH_ASSOC);
        print_r($registros);
    }catch(Exception $error){
        echo $error->getMessage();
    }
?> 