<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PARCIAL</title>

</head>

<body>
 <!--
        Name: Fabian Mauricio Caro Rodriguez

        NRC: 3113

        Date: 04/05/2020

        Version: 1.0

        Copyright: Fabian Caro

        Description:  La pagina permitira ingresar los datos de: nombre, apellido, numero de identificacion,
                      correo, fecha de nacimiento, y una imagen y los almacenara en una base de datos y tambien se 
                      podra realizar una consulta mediante el numero de identificacion.
    -->
<?php
  require("modelo/paginacion.php");
?>

  <form action="vista/guardar.php" method="post" enctype="multipart/form-data">
    <table width="50%" border="0" align="center">
      <tr >
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Identificaion</td>
        <td class="primera_fila">Correo</td>
        <td class="primera_fila">Fecha Nacimiento</td>
        <td class="primera_fila">Imagen</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>

  	<?php
  		foreach($matrizPersonas as $persona):?>
  			<tr>
  			  <td><?php echo $persona["Id"]?> </td>
  			  <td><?php echo $persona["Nombre"]?></td>
  			  <td><?php echo $persona["Apellido"]?></td>
  			  <td><?php echo $persona["Identificacion"]?></td>
          <td><?php echo $persona["Correo"]?></td>
          <td><?php echo $persona["Fecha"]?></td>
          <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($persona['Imagen']); ?>"/></td>

  			  <td class="bot"><a href="vista/borrar.php?Id=<?php echo $persona["Id"]?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
  			  <td class='bot'><a href="vista/editar.php?Id=<?php echo $persona["Id"]?> & nom=<?php echo
  				$persona["Nombre"]?> & ape=<?php echo $persona["Apellido"]?> & dir=<?php echo
  				$persona["Direccion"]?>"><input type='button' name='up' Id='up' value='Actualizar'></a></td>
  			</tr>
      <?php
  		endforeach;
  	?>

  	<tr>
  	<td></td>
        <td><input type='text' name='Nombre' size='10' class='centrado'></td>
        <td><input type='text' name='Apellido' size='10' class='centrado'></td>
        <td><input type='text' name='Identificacion' size='10' class='centrado'></td>
        <td><input type='text' name='Correo' size='10' class='centrado'></td>
        <td><input type="date"  name='Fecha' size='10' class='centrado'></td>
        <td><input type="file"  name='Imagen'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>


<?php
//-------------Paginación----------------

    for ($i=1; $i<=$total_paginas; $i++) {
      echo "<a href='?pagina=" . $i . "'>" . $i . "</a>";
    }

 ?>

    </table>
  </form>

<br><br><br><br><br>
  <form method="Post" action="vista/Consulta.php">
  INGRESE EL NUMERO DE IDENTIFICACION<br><br>
  <input type='text' name='Identificacion'  class='centrado'></td>
  <input type='submit'   value='Consultar'></td></tr>
  </form>


</table>
</body>

</html>
