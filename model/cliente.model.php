<?php
//TODO: Requerimientos 
require_once('../config/configbanco.php');
class cliente
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "select * from cliente";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para sacar un registro*/
    public function uno($ID_Cliente)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  * FROM cliente WHERE codigo_cliente = $ID_Cliente";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para insertar */
    public function Insertar($ID_Cliente,$Nombre)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT into cliente(ID_Cliente,Nombre) values ($ID_Cliente,$Nombre)";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'Error al insertar en la base de datos';
        }
    }
    /*TODO: Procedimiento para actualizar */
    public function Actualizar($ID_Cliente,$Nombre)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "update cliente set ID_Cliente='$ID_Cliente',Nombre='$Nombre'";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'error al actualizar el registro';
        }
    }
    /*TODO: Procedimiento para Eliminar */
    public function Eliminar($ID_Cliente)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "delete from cliente where ID_Cliente = $ID_Cliente";
        if (mysqli_query($con, $cadena)) {
            return true;
        } else {
            return false;
        }
    }
}