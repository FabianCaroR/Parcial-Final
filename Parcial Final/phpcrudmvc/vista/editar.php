<?php
require_once("../modelo/Conectar.php");
$base = Conectar::conexion();

$id=$_REQUEST['Id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];

$base->query("UPDATE datos_usuarios SET  Apellido='$apellido', Direccion='$direccion', Nombre='$nombre' WHERE Id='$id'");

header("Location: ../index.php");

?>