<?php
class gestion{
    function obtenerGestion(){
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        $consultaSql    = "select * from gestion";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
            $i=0;
            while($fila = $resultado->fetch_assoc()){
                $arreglo[$i]=array($fila['id_gestion'],$fila['fecha_actualizacion'],$fila['rut_usuario'],$fila['rut_cliente'],$fila['id_resultado_gestion'],$fila['id_tipo_gestion'],$fila['comentarios']);
                $i++;
            }
            return $arreglo;
        }else{
            echo"No se encontraron datos.";
        }
        
            }else{
                echo"No fue posible ejecutar la consulta".$objetoMYSQL->error;
            }
            $objetoMYSQL->close();
        }
        
function eliminarGestion($id_gestion){
    $var_gestion = $id_gestion;
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    $eliminar = "delete from gestion where id_gestion='$var_gestion'";
    if($objetoMYSQL->query($eliminar)==TRUE){
        return 1;
    }else{
        return 0;
        
    }
    }
        function agregarGestion($usuario,$cliente,$tipo_gestion,$resultado_gestion,$comentarios){
            date_default_timezone_set('America/Santiago');    
            $var_usuario            =   $usuario;
            $var_cliente            =   $cliente;
            $var_tipo_gestion       =   $tipo_gestion;
            $var_resultado_gestion  =   $resultado_gestion;
            $var_comentarios        =   $comentarios;
            $var_fecha_actualizacion=   Date("Y-m-d H:i:s");
            include("/var/www/html/crm/conexiones/mysql.inc.php");
            $insertar="INSERT INTO gestion(rut_usuario,rut_cliente,id_tipo_gestion,id_resultado_gestion,comentarios,fecha_actualizacion)
            
            VALUES('$var_usuario','$var_cliente','$var_tipo_gestion','$var_resultado_gestion','$var_comentarios','$var_fecha_actualizacion') ";
    if($objetoMYSQL->query($insertar)==TRUE){
    return 1;

    }else{
        echo $objetoMYSQL->error;
        return 0;
    }
    
}
function actualizarGestion($id_gestion,$rut_usuario,$rut_cliente,$id_resultado,$id_tipo,$comentarios){
    
    date_default_timezone_set('America/Santiago'); 
    $var_id_gestion             = $id_gestion;
    $var_rut_usuario            = $rut_usuario;
    $var_rut_cliente            = $rut_cliente;
    $var_id_resultado           = $id_resultado;
    $var_id_tipo                = $id_tipo;
    $var_comentarios            = $comentarios;
    $var_fecha_actualizacion    = Date("Y-m-d H:i:s");
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    $actualizar    = "update gestion set rut_usuario = '$var_rut_usuario',
    rut_cliente =  '$var_rut_cliente',
    id_resultado_gestion = '$var_id_resultado',
    id_tipo_gestion = '$var_id_tipo',
    comentarios = '$var_comentarios',
    fecha_actualizacion = '$var_fecha_actualizacion' 
    where id_gestion='$var_id_gestion'";
     if($objetoMYSQL->query($actualizar)==TRUE){
        return 1;
    
        }else{
            echo $objetoMYSQL->error;
            return 0;
          
        
        }
    
    }

}
?>