<?php
ini_set("display_errors",1);
include("../../clases/tipoGestion.class.php");
$obj_tipo_gestion       = new tipoGestion();
$ARR_TIPOS_GESTION      = $obj_tipo_gestion->obtenerTiposGestion();
$ARR_CANTIDAD_DATOS     = count($ARR_TIPOS_GESTION);
?>

<html>
<head>
<title>Tipo de Gestión</title>
<script src="/var/www/html/crm/js/jquery-3.2.1.min.js"></script>
<script src="/var/www/html/crm/semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="/var/www/html/crm/semantic/semantic.min.css">
</head>
<body>
<h1>Tipo de Gestión</h1>
<hr>
<div class="ui container segment compact stacked" style="margin: 10px 0;">
<form class="ui fluid form" action="agregar-dml.php" method="post">

  <div class="ui input">
    <input type="text" name="txt_nombre_tipo_gestion" placeholder="Ingresa Nombre">
  </div>
  <br>
  <br>
  <button class="ui huge inverted download button" name="agregar" type="submit">Agregar</button>

</form>
</div>
<table border="1">
<tr>
    <td>ID</td>
    <td>Nombre Tipo de Gestion</td>
    <td>Opciones</td>
</tr>
<?php
$i=0;
while($i < $ARR_CANTIDAD_DATOS){
?>
<tr>
    <td><?php echo $ARR_TIPOS_GESTION[$i][0];?></td>
    <td><?php echo utf8_encode($ARR_TIPOS_GESTION[$i][1]);?></td>
    <td><a href="eliminar-dml.php?id_tipo=<?php echo $ARR_TIPOS_GESTION[$i][0];?>">Eliminar</a>
    <a href="actualizar.php?id_tipo=<?php echo $ARR_TIPOS_GESTION[$i][0]  ;?>&nombre=<?php echo $ARR_TIPOS_GESTION[$i][1]  ;?>">Actualizar</a></td>
    
</tr>
<?php
$i++;
};?>
</table>
</body>

</html>