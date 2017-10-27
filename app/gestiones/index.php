<?php
ini_set("display_errors",1);
include("../../clases/gestion.class.php");
$obj_gestion      = new gestion();
$ARR_GESTION      = $obj_gestion->obtenerGestion();
$ARR_CANTIDAD_DATOS     = count($ARR_GESTION);
?>
<html>
<head>
<title>Agregar gestion</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
</head>
<body>
<img id="fondo" src="../../fondo.png"alt="background image" style="position: fixed;top: 0;left: 0;min-height: -webkit-fill-available;min-width: -webkit-fill-available;width: 100%;z-index: -1;"></img>
<div class="ui breadcrumb" style="font-size: 20;">
<a class="section" style="color: white;" onclick="location='../../index.php'">Inicio</a>
<div class="divider"> / </div>
<a class="section" style="color: white;" onclick="location='../crm.php'">Administrar</a>
<div class="divider"> / </div>
<div class="active section" style="color: #3e3e3e">Gestion</div>
</div>
<div class="ui container" style="position: static;top: 30;left: 50;right:50;width: 900px;margin-left: auto;height: auto;margin-right: auto;">
    <h1 style="color: white;">Agregar Gestión</h1>
    <div class="ui divider"></div>
    <form name ="frm_agregar_gestion" action="agregar-dml.php" method="post">
    <table style="width: 700px; margin-left: auto; margin-right: auto;">
        <tr>
             <td><label style="font-weight: bold; color: white; font-size: 24;">RUT</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_rut_cliente" placeholder="Ingrese RUT..">
             </div>
             </td>
             
        </tr>
        <tr>
             <td><label style="font-weight: bold; color: white; font-size: 24;">TIPO GESTIÓN</label></td>
             <td><div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_tipo_gestion" placeholder="Ingrese Tipo..">
             </div>
             </td>
        </tr>
        <tr>
             <td><label style="font-weight: bold; color: white; font-size: 24;">RESULTADO</label></td>
             <td><div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_resultado_gestion" placeholder="Ingrese Resultado.."></td>
            </div>
         </tr>
        <tr>
             <td><label style="font-weight: bold; color: white; font-size: 24;">COMENTARIOS</label></td>
             <td><div class="ui form">
             <div class="field" style="margin: 8px;">
             <textarea name="txt_comentarios" rows="4" cols="30" placeholder="Ingrese Comentario.."></textarea>
             </div>
             </div>
             </td>
        </tr>
        <tr>

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
            <th>ID</th>
            <th>Fecha Actualizacion</th>
            <th>Rut Usuario</th>
            <th>Rut Cliente</th>
            <th>ID Resultado</th>
            <th>ID Tipo Gestion</th>
            <th>Comentarios</th>
            <th colspan="2">Opciones</th>
        </tr>
    </thead>

<tbody>
<?php
$i=0;
while($i < $ARR_CANTIDAD_DATOS){
?>
<tr>
    <td><?php echo $ARR_GESTION[$i][0]  ;?></td>
    <td><?php echo $ARR_GESTION[$i][1]  ;?></td>
    <td><?php echo $ARR_GESTION[$i][2]  ;?></td>
    <td><?php echo $ARR_GESTION[$i][3]  ;?></td>
    <td><?php echo $ARR_GESTION[$i][4]  ;?></td>
    <td><?php echo $ARR_GESTION[$i][5]  ;?></td>
    <td><?php echo $ARR_GESTION[$i][6]  ;?></td>
    <td><a href="eliminar-dml.php?id_gestion=<?php echo $ARR_GESTION[$i][0];?>">Eliminar</a></td>
    <td><a href="actualizar.php?id_gestion=<?php echo $ARR_GESTION[$i][0];?>&rut_usuario=<?php echo $ARR_GESTION[$i][2];?>
    &rut_cliente=<?php echo $ARR_GESTION[$i][3];?>&id_resultado=<?php echo $ARR_GESTION[$i][4];?>
    &id_tipo=<?php echo $ARR_GESTION[$i][5];?>&comentarios=<?php echo $ARR_GESTION[$i][6];?>">Actualizar</a></td>

</tr>
<?php
$i++;
};?>
</tbody>

</table>
</div>
</body>
</html>