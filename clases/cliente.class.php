<?php
class cliente{

function obtenerCliente(){
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    $consultaSql    = "select * from cliente";
    if($resultado = $objetoMYSQL->query($consultaSql)){
        if($objetoMYSQL->affected_rows>0){
        $i=0;
        while($fila = $resultado->fetch_assoc()){
            $arreglo[$i]=array($fila['rut_cliente'],$fila['nombres'],$fila['apellidos'],$fila['email'],$fila['celular'],$fila['fono_fijo'],$fila['fecha_actualizacion']);
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
function eliminarCliente($rut_cliente){
    $var_rut_cliente = $rut_cliente;
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    $eliminar = "delete from cliente where rut_cliente='$var_rut_cliente'";
    if($objetoMYSQL->query($eliminar)==TRUE){
        return 1;
    }else{
        return 0;
            
    }
}
function agregarCliente($rut,$nombres,$apellidos,$email,$celular,$telefono){
    date_default_timezone_set('America/Santiago');    
    $var_rut                    =   $rut;
    $var_nombres                =   $nombres;
    $var_apellidos              =   $apellidos;
    $var_email                  =   $email;
    $var_celular                =   $celular;
    $var_telefono               =   $telefono;
    $var_fecha_actualizacion=   Date("Y-m-d H:i:s");
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    $insertar="INSERT INTO cliente(rut_cliente,nombres,apellidos,email,celular,fono_fijo,fecha_actualizacion)
    VALUES('$var_rut','$var_nombres','$var_apellidos','$var_email','$var_celular','$var_telefono','$var_fecha_actualizacion') ";
        if($objetoMYSQL->query($insertar)==TRUE){
            return 1;
        
        }else{
             echo $objetoMYSQL->error;
            return 0;
            }
            
        }
        function actualizarCliente($rut,$nombre,$apellido,$email,$celular,$telefono){
            date_default_timezone_set('America/Santiago');
            $var_rut          = $rut;
            $var_u_nombre        = $nombre;
            $var_u_apellido       = $apellido;
            $var_u_email         = $email;
            $var_u_celular        = $celular;
            $var_u_telefono       = $telefono;
            $var_u_fecha=   Date("Y-m-d H:i:s");
            include("/var/www/html/crm/conexiones/mysql.inc.php");
            $actualizar    = "update cliente set 
            nombres='$var_u_nombre',
            apellidos='$var_u_apellido',
            email='$var_u_email',
            celular='$var_u_celular', 
            fono_fijo='$var_u_telefono',
            fecha_actualizacion='$var_u_fecha'
            WHERE rut_cliente='$var_rut'";
             if($objetoMYSQL->query($actualizar)==TRUE){
                return 1;
            
                }else{
                    echo $objetoMYSQL->error;
                    return 0;
                  
                
                }
            
            }
}

?>