<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 4px black;
        border-collapse: collapse;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #008000;
      
                     
      }
     
      th, h1 {
        background-color: #7CFC00;
      }

      td,
      th {
        border: solid 2px black;
        padding: 4px;
        text-align: center;
        color: black;
       
      
      }
      .sub{
        text-align: center;
        font-size: 40px;
        letter-spacing: 4px;
        color: gray;
      }

      
    .boton122{
    margin: 40px;
    width: 200px;
    height: 50px;
    color: #4f4b4b;
    background-color: transparent;
    border: #000000 solid;
    }
      

    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$nombre = $_POST["nombre"] ;
$pueblo = $_POST["pueblo"] ;
$comentario = $_POST["comentario"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor";
        }
  else
        {
            echo "<b><h3 class=sub>¡Mira los comentarios de las personas que han utilizado nuestro servicio!</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "formulario_tur";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3 class=sub>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO comentarios (nombre, pueblo, comentario)
                             VALUES ('$nombre','$pueblo','$comentario')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM comentarios";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>pueblo</th></h1>";
echo "<th><h1>comentario</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['pueblo'] . "</td></h2>";
    echo "<td><h2>" . $colum['comentario'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="../HTML/mas.html"><button class=boton122>Volver Atrás</button> </a>';


?>