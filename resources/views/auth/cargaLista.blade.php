<html>
        <head>
            <title>Cargar</title>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width">

            <!-- Chrome, Firefox OS and Opera -->
            <meta name="theme-color" content="#293a4a">

            <!-- Mobile Chrome-->
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="mobile-web-app-status-bar-style" content="default">

            <!-- iOS Safari -->
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="default">
           
        </head>
    </html>
    <h3>Conductores</h3><br/>
    <form action="sebaqlo.php" enctype="multipart/form-data" method="post">
   <input type="file" name='archivo' />
   <input name="enviar" type="submit" value="Importar" />
</form>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<?php header("Content-Type: text/html;charset=utf-8"); ?>

<?php

      // Create connection 
$conn = new mysqli('127.0.0.1','root','','intranet'); 
// Check connection
if($conn->connect_error){
    header("HTTP/1.1 502 Bad Gateway");
    die("Error al conectar con la Base de Datos");
}

//obtenemos el archivo .csv
$tipo = $_FILES['archivo']['type'];
 
$tamanio = $_FILES['archivo']['size'];
 
$archivotmp = $_FILES['archivo']['tmp_name'];
 
//cargamos el archivo
$lineas = file($archivotmp);
 
//inicializamos variable a 0, esto nos ayudará a indicarle que no lea la primera línea
$i=0;
 
//Recorremos el bucle para leer línea por línea
foreach ($lineas as $linea_num => $linea)
{
   //abrimos bucle
   /*si es diferente a 0 significa que no se encuentra en la primera línea
   (con los títulos de las columnas) y por lo tanto puede leerla*/
   if($i != 0)
   {
       //abrimos condición, solo entrará en la condición a partir de la segunda pasada del bucle.
       /* La funcion explode nos ayuda a delimitar los campos, por lo tanto irá
       leyendo hasta que encuentre un ; */
       $datos = explode(";",$linea);
 
       //Almacenamos los datos que vamos leyendo en una variable

$rut=trim($datos[0]);
$nombres=trim($datos[1]);
$apellidopat=trim($datos[2]);
$apellidomat=trim($datos[3]);
echo "rut: ".$rut."<br/>";
echo "Ape P: ".$apellidopat."<br/>";
echo "Ape M: ".$apellidomat."<br/>";
echo "Nombres: ".$nombres;
echo"<hr/>";
       //guardamos en base de datos la línea leida
     $sql="INSERT INTO  conductores(`rut`,`apellido_paterno`,`apellido_materno`,`nombres`) values ('$rut', '$apellidopat','$apellidomat','$nombres')";

   if ($conn->query($sql) === TRUE) {
    header("HTTP/1.1 200 OK");
    echo"Archivo cargado exitosamente!<br/>";
} else {
    header("HTTP/1.1 400 Bad Request ");
    echo "Error al cargar el archivo:";
    echo"<br/>".$conn->error;
}
       //cerramos condición
   }   
 
   /*Cuando pase la primera pasada se incrementará nuestro valor y a la siguiente pasada ya
   entraremos en la condición, de esta manera conseguimos que no lea la primera línea.*/
   $i++;
   //cerramos bucle
 
}




$conn->close();
?>