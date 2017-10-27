<?php
ini_set("display_errors",1);
include("../../clases/cliente.class.php");
$obj_cliente       = new cliente();
$ARR_CLIENTE      = $obj_cliente->obtenerCliente();
$ARR_CANTIDAD_DATOS     = count($ARR_CLIENTE);
?>
<html>
<head>
<title>Clientes</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
</head>
<body style="aligned">
<img id="fondo" src="../../fondo.png"alt="background image" style="position: fixed;top: 0;left: 0;min-height: -webkit-fill-available;min-width: -webkit-fill-available;width: 100%;z-index: -1;"></img>
<div class="ui breadcrumb" style="font-size: 20;">
<a class="section" style="color: white;" onclick="location='../../index.php'">Inicio</a>
<div class="divider"> / </div>
<a class="section" style="color: white;" onclick="location='../crm.php'">Administrar</a>
<div class="divider"> / </div>
<div class="active section" style="color: #3e3e3e">Clientes</div>
</div>
<div class="ui container" style="position: static;top: 30;left: 50;right:50;width: 900px;margin-left: auto;height: auto;margin-right: auto;">
<h1 style="color: white; font-size: 48; width: 700px; margin-left: auto; margin-right: auto;">Clientes</h1>
<div class="ui divider"></div>
<form name ="frm_agregar_cliente" action="agregar-dml.php" method="post">
    <table style="width: 700px; margin-left: auto; margin-right: auto;">
        <tr>
             <td><label style="font-weight: bold; color: white; font-size: 24;">RUT</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_rut_cliente" placeholder="Ingrese RUT..">
             </div>
             </td>
             <td style="width: 50;">&nbsp;</td>
             <td><label style="font-weight: bold; color: white; font-size: 24;">E-mail</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_email" placeholder="Ingrese E-mail..">
             </div>
             </td>
         </tr>
        <tr>
            <td><label style="font-weight: bold; color: white; font-size: 24;">Nombre</label></td>
            <td>
            <div class="ui input" style="margin: 8px;">
            <input type="text" name="txt_nombres" placeholder="Ingrese Nombre..">
            </div>
            </td>
            <td>&nbsp;</td>
            <td><label style="font-weight: bold; color: white; font-size: 24;">Celular</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_celular" placeholder="Ingrese Celular..">
             </div>
             </td>
        </tr>
        <tr>
            <td><label style="font-weight: bold; color: white; font-size: 24;">Apellido</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_apellidos" placeholder="Ingrese Apellido..">
             </div>
             </td>
             <td>&nbsp;</td>
             <td><label style="font-weight: bold; color: white; font-size: 24;">Telefono</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_telefono" placeholder="Ingrese Telefono..">
             </div>
             </td>
         </tr>
         <tr>
         <td>&nbsp;</td>
         </tr>
        <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
             <td>
             <button class="green ui button" name="guardar" type="submit" style="width: 205px; margin: 8px;">Ingresar</button>
             
             </td>
        </tr>
       
    </table>
    </form>
    
<table class="ui celled table" style="width: 900px; margin-left: auto; margin-right: auto;">
    <thead>
        <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Celular</th>
        <th>Telefono</th>
        <th>Fecha Actualizacion</th>
        <th colspan="2">Opciones</th>
        </tr>
    </thead>
    


<tbody>
<?php
$i=0;
while($i < $ARR_CANTIDAD_DATOS){
?>
    <tr>
      <td><?php echo $ARR_CLIENTE[$i][0]  ;?></td>
    <td><?php echo $ARR_CLIENTE[$i][1]  ;?></td>
    <td><?php echo $ARR_CLIENTE[$i][2]  ;?></td>
    <td><?php echo $ARR_CLIENTE[$i][3]  ;?></td>
    <td><?php echo $ARR_CLIENTE[$i][4]  ;?></td>
    <td><?php echo $ARR_CLIENTE[$i][5]  ;?></td>
    <td><?php echo $ARR_CLIENTE[$i][6]  ;?></td>
    <td><a href="eliminar-dml.php?rut_cliente=<?php echo $ARR_CLIENTE[$i][0];?>">Eliminar</a>
    </td>
    <td>
    <a href="actualizar.php?rut_cliente=<?php echo $ARR_CLIENTE[$i][0]  ;?>&nombre=<?php echo $ARR_CLIENTE[$i][1]  ;?>
    &apellido=<?php echo $ARR_CLIENTE[$i][2]  ;?>&email=<?php echo $ARR_CLIENTE[$i][3]  ;?>
    &celular=<?php echo $ARR_CLIENTE[$i][4]  ;?>&telefono=<?php echo $ARR_CLIENTE[$i][5]  ;?>">Actualizar</a></td>
    </tr>
    <?php
$i++;
};?>
</tbody>

</table>
</div>
</body>

</html>