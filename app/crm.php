<?php
session_start();
?>
<html>
<head>
<title>prueba</title>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css">
<div class="ui container">
<h1 style="color: white; font-size: 32; width: 900px; margin-left: auto; margin-right: auto;">Ha iniciado sesion, <?php echo $_SESSION["ses_nombres_usuario"];?> <?php echo $_SESSION["ses_apellidos_usuario"];?>.</h1>
</div>
</head>
<body>
<img id="fondo" src="../fondo.png"alt="background image" style="position: fixed;top: 0;left: 0;min-height: -webkit-fill-available;min-width: -webkit-fill-available;width: 100%;z-index: -1;"></img>
<div class="ui container" style="position: static;top: 30;left: 50;right:50;width: 900px;margin-left: auto;height: auto;margin-right: auto;">
<h1 style="color: white;">Administrar</h1>
<div class="ui divider"></div>
<table style="width: 900px; margin-left: auto; margin-right: auto;">
<tr>
<td><label style="color: white; font-size: 24;">Gestiones</label></td>
<td>
<button class="ui inverted button" type="submit" value="enviar" onclick="location='gestiones/index.php'">Ir</button>
</td>
</tr>
<tr>
<td><label style="color: white; font-size: 24;">Tipo de Gestion</label></td>
<td>
<button class="ui inverted button" type="submit" value="enviar" onclick="location='tipo-gestion/index.php'">Ir</button>
</td>
</tr>
<tr>
<td><label style="color: white; font-size: 24;">Clientes</label></td>
<td>
<button class="ui inverted button" type="submit" value="Enviar" onclick = "location='cliente/index.php'">Ir</button>
</td>
</tr>
</table>
</div>
</body>
</html>