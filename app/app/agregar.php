<html>
<head>
<title>Agregar Gestion</title>
</head>
<body>
    <h1>Agregar Gestion</h1>
    <hr>
    <form name="frm_agregar_gestion" action="agregar-dml.php" method="post"></form>
    <table>
        <tr>
            <td><label>Rut Cliente</label></td>
            <td><input type="text" name="txt_rut_cliente"></td>
        </tr>
        <tr>
            <td><label>Tipo Gestion</label></td>
            <td><input type="text" name="txt_tipo_gestion"></td>
        </tr>
        <tr>
            <td><label>Resultado</label></td>
            <td><input type="text" name="txt_resultado_gestion"></td>
        </tr>
        <tr>
            <td><label>Comentarios</label></td>
            <td>
                <textarea cols="30" rows="4"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Guardar Gestion"></td>
        </tr>
    </table>
</body>


</html>