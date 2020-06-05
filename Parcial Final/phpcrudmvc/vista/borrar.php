<?php
require_once("../modelo/Conectar.php");
$base = Conectar::conexion();

$id=$_REQUEST['Id'];

$base->query("DELETE FROM datos_usuarios WHERE Id='$id'");

header("Location: ../index.php");

?>