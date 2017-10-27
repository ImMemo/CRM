<html>
<head>
<title>Agregar gestion</title>
</head>
<body>
    <h1>Agregar Gestión</h1>
    <hr>
    <form name ="frm_agregar_gestion" action="agregar-dml.php" method="post">
    <table>
        <tr>
             <td><label>RUT CLIENTE</label></td>
             <td><input type="text" name="txt_rut_cliente"></td>
         </tr>
        <tr>
             <td><label>TIPO GESTIÓN</label></td>
             <td><input type="text" name="txt_tipo_gestion"></td>
        </tr>
        <tr>
             <td><label>RESULTADO</label></td>
             <td><input type="text" name="txt_resultado_gestion"></td>
         </tr>
        <tr>
             <td><label>COMENTARIOS</label></td>
             <td>
             <textarea name="txt_comentarios" rows="4" cols="30"></textarea>
             </td>
        </tr>
        <tr>
             <td></td>
             <td><input type="submit" value="Guardar gestión"></td>
        </tr>
       
    </table>
    </form>
</body>
</html>