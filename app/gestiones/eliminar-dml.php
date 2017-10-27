<?php 
ini_set("display_errors",1);
$var_id_gestion            = $_GET["id_gestion"];
include("../../clases/gestion.class.php");
$obj_gestion       = new gestion();
$var_resultado          = $obj_gestion->eliminarGestion($var_id_gestion);
if($var_resultado==1){
    header("Location:index.php");
}else{
    echo "Se ha producido un problema al eliminar";
}


?>