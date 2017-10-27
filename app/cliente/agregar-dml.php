<?php
session_start();
ini_set("display_errors",1);
//Capturamos datos del formulario recibidos mediante post
$var_rut_cliente       =   $_POST["txt_rut_cliente"];
$var_nombres           =   $_POST["txt_nombres"];
$var_apellidos         =   $_POST["txt_apellidos"];
$var_email             =   $_POST["txt_email"];
$var_celular           =   $_POST["txt_celular"];
$var_telefono          =   $_POST["txt_telefono"];
//incorporamos la clase gestión

include("../../clases/cliente.class.php");
//creamos objeto de la clase
$obj_cliente = new cliente();
//invocamos el metodo agregar gestion
$var_resultado = $obj_cliente->agregarCliente($var_rut_cliente,$var_nombres,$var_apellidos,$var_email,$var_celular,$var_telefono);
if($var_resultado==1){
    Header("Location:index.php");
}else{
    echo"No fué posible agregar".$objetoMYSQL->error;
}
?>