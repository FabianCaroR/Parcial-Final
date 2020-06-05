<?php
require_once("../modelo/Conectar.php");
$base = Conectar::conexion();

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$identificacion=$_POST['Identificacion'];
$correo=$_POST['Correo'];
$fercha=$_POST['Fecha'];
$imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$base->query("INSERT INTO datos_usuarios(Nombre, Apellido, Identificacion, Correo, Fecha, Imagen) VALUES('$nombre', '$apellido','$identificacion', '$correo','$fecha', '$imagen')");

header("Location: ../index.php");

?>