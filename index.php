<html>
<head>
<title>prueba</title>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="semantic/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<div class="ui container">
</div>
</head>
<body>
<img id="fondo" src="fondo.png"alt="background image" style="position: fixed;top: 0;left: 0;min-height: -webkit-fill-available;min-width: -webkit-fill-available;width: 100%;z-index: -1;"></img>
<div class="ui middle aligned center aligned grid" style="position: absolute; top: 200; left: 0; width: 100%;">
<div class="column" style="width: 500px; height: 500px">
<h1 style="color: white; font-size: 48; font-weight: bold;">Iniciar Sesion</h1>
<form class="ui large form" action="login.php" method="post">

  <div class="ui left icon input" style="width: 300px;">
    <i class="user icon"></i>
    <input type="text" name="email" placeholder="Ingresa Email">
  </div>
  <br>
  <br>
  <div class="ui left icon input" style="width: 300px;">
    <i class="lock icon"></i>
    <input type="password" name="clave" placeholder="Ingrese clave">
  </div><br>
  <br>
  <button class="ui huge inverted download button" name="enviar" type="submit" style="width: 300px;">Ingresar</button>

</form>
</div>
</div>
</body>
</html>