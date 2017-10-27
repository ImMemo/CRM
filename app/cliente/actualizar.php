<?php
ini_set("display_errors",1);
$var_rut_cliente        =$_GET["rut_cliente"];
$var_nombre    =$_GET["nombre"];
$var_apellido   =$_GET["apellido"];
$var_email    =$_GET["email"];
$var_celular    =$_GET["celular"];
$var_telefono    =$_GET["telefono"];
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
<h1 style="color: white; font-size: 48; width: 700px; margin-left: auto; margin-right: auto;">Actualizar Clientes</h1>
<form name ="frm_actualizar_cliente" action="actualizar-dml.php" method="post">
    <table style="width: 700px; margin-left: auto; margin-right: auto;">
        <tr>
             <td><label style="font-weight: bold; color: white; font-size: 24;">RUT</label></td>
             <td>
             <div class="ui disabled input" style="margin: 8px;">
             <input type="text" name="txt_rut_cliente" value="<?php echo $var_rut_cliente;?>">
             </div>
             </td>
             <td style="width: 50;">&nbsp;</td>
             <td><label style="font-weight: bold; color: white; font-size: 24;">E-mail</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_email" value="<?php echo $var_email;?>">
             </div>
             </td>
         </tr>
        <tr>
            <td><label style="font-weight: bold; color: white; font-size: 24;">Nombre</label></td>
            <td>
            <div class="ui input" style="margin: 8px;">
            <input type="text" name="txt_nombres" value="<?php echo $var_nombre;?>">
            </div>
            </td>
            <td>&nbsp;</td>
            <td><label style="font-weight: bold; color: white; font-size: 24;">Celular</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_celular" value="<?php echo $var_celular;?>">
             </div>
             </td>
        </tr>
        <tr>
            <td><label style="font-weight: bold; color: white; font-size: 24;">Apellido</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_apellidos" value="<?php echo $var_apellido;?>">
             </div>
             </td>
             <td>&nbsp;</td>
             <td><label style="font-weight: bold; color: white; font-size: 24;">Telefono</label></td>
             <td>
             <div class="ui input" style="margin: 8px;">
             <input type="text" name="txt_telefono" value="<?php echo $var_telefono;?>">
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
