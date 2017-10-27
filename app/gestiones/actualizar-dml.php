<?php 
ini_set("display_errors",1);
include("../../clases/gestion.class.php");
$obj_gestion = new gestion();
//Capturamos los valores del formulario

$var_id_gestion             =$_POST["txt_id_gestion"];
$var_rut_usuario            =$_POST["txt_rut_usuario"];
$var_rut_cliente            =$_POST["txt_rut_cliente"];
$var_id_resultado           =$_POST["txt_id_resultado"];
$var_id_tipo                =$_POST["txt_id_tipo"];
$var_comentarios            =$_POST["txt_comentarios"];

//Invocamos el metodo de actualizacion
$var_resultado          = $obj_gestion->actualizarGestion($var_id_gestion,$var_rut_usuario,$var_rut_cliente,
$var_id_resultado,$var_id_tipo,$var_comentarios);
if($var_resultado==1){
header("Location:index.php");
}else{
echo "Se ha producido un problema al actualizar";
}
?>