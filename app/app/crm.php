<?php
session_start();
echo "Ha iniciado sesion ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];

?>
<html>
<head>
<title>prueba</title>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<div class="ui container">
<h1 class="ui header">Has iniciado sesion, <?echo $_SESSION["ses_nombres_usuario"]?></h1>
</div>
</head>
<body>


<a href="gestiones/index.php">Gestiones</a>
<br>
<a href="tipo-gestion/index.php">Tipo de Gestión</a>
</html>