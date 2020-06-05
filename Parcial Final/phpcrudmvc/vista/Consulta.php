<?php

   require_once("../modelo/Conectar.php");
   $base = Conectar::conexion();

   $identificacion = $_POST['Identificacion'];

   $registros = mysql_querry("SELECT * FROM datos_usuarios WHERE Identificacion = '$identificacion'");

   while($resitro=mysql_fetch_array($registros)){
       echo $registro['Nombre']." ".$registro['Apellido']." ".$registro['Identificaion']." ".$registro['Correo']." ".$registro['Fecha'];
       echo base64_encode($registro['Imagen']);
   }
?>