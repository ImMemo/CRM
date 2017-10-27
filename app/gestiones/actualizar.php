<?php
ini_set("display_errors",1);
$var_id_gestion        =$_GET["id_gestion"];
$var_rut_usuario    =$_GET["rut_usuario"];
$var_rut_cliente      =$_GET["rut_cliente"];
$var_id_resultado    =$_GET["id_resultado"];
$var_id_tipo        =$_GET["id_tipo"];
$var_comentarios    =$_GET["comentarios"];
?>
<html>
<head>
<title>Actualizar</title>
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../semantic/semantic.min.css">
</head>

<body>
<img id="fondo" src="../../fondo.png"alt="background image" style="position: fixed;top: 0;left: 0;min-height: -webkit-fill-available;min-width: -webkit-fill-available;width: 100%;z-index: -1;"></img>
<div class="ui container" style="position: static;top: 30;left: 50;right:50;width: 900px;margin-left: auto;height: auto;margin-right: auto;">
<h1 style="color: white; font-size: 48; width: 700px; margin-left: auto; margin-right: auto;">Actualizar Gestion</h1>
<form name ="frm_actualizar_gestion" action="actualizar-dml.php" method="post">
    <table style="width: 700px; margin-left: auto; margin-right: auto;">
        <tr>
             <td><label style="font-weight: bold; color: white; font-size: 24;">ID</label></td>
             <td>
             <div class="ui disabled input" style="margin: 8px;">
             <input type="text" name="txt_id_gestion" value="<?php echo $var_id_gestion;?>">
             </div>
             </td>
             <td style="width: 50;">&nbsp;</td>
             <td><label style="font-weight: bold; color: white; font-size: 24;">RUT Usuario</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_rut_usuario" value="<?php echo $var_rut_usuario;?>">
             </div>
             </td>
         </tr>
        <tr>
            <td><label style="font-weight: bold; color: white; font-size: 24;">RUT Cliente</label></td>
            <td>
            <div class="ui input" style="margin: 8px;">
            <input type="text" name="txt_rut_cliente" value="<?php echo $var_rut_cliente;?>">
            </div>
            </td>
            <td>&nbsp;</td>
            <td><label style="font-weight: bold; color: white; font-size: 24;">ID Resultado</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_id_resultado" value="<?php echo $var_id_resultado;?>">
             </div>
             </td>
        </tr>
        <tr>
            <td><label style="font-weight: bold; color: white; font-size: 24;">ID Tipo</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_id_tipo" value="<?php echo $var_id_tipo;?>">
             </div>
             </td>
             <td>&nbsp;</td>
             <td><label style="font-weight: bold; color: white; font-size: 24;">Comentarios</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_comentarios" value="<?php echo $var_comentarios;?>">
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
             <button class="green ui button" name="guardar" type="submit" style="width: 205px; margin: 8px;">Actualizar</button>
             
             </td>
        </tr>
       
    </table>
    </form>
    </div>
</body>

</html>