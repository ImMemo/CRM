<?php 
ini_set("display_errors",1);
$var_rut_cliente            = $_GET["rut_cliente"];
include("../../clases/cliente.class.php");
$obj_cliente       = new cliente();
$var_resultado          = $obj_cliente->eliminarCliente($var_rut_cliente);
if($var_resultado==1){
    header("Location:index.php");
}else{
    echo "Se ha producido un problema al eliminar";
}


?>