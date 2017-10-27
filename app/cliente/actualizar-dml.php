<?php 
ini_set("display_errors",1);
include("../../clases/cliente.class.php");
$obj_cliente = new cliente();
//Capturamos los valores del formulario

$var_rut_cliente        =$_POST["txt_rut_cliente"];
$var_nombre             =$_POST["txt_nombres"];
$var_apellido           =$_POST["txt_apellidos"];
$var_email              =$_POST["txt_email"];
$var_celular            =$_POST["txt_celular"];
$var_telefono           =$_POST["txt_telefono"];

//Invocamos el metodo de actualizacion
$var_resultado          = $obj_cliente->actualizarCliente($var_rut_cliente,$var_nombre,$var_apellido,$var_email,$var_celular,$var_telefono);
if($var_resultado==1){
header("Location:index.php");
}else{
echo "Se ha producido un problema al actualizar";
}
?>