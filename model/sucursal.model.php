<?php
//TODO: Requerimientos 
require_once('../config/configbanco.php');
class sucursal
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "select * from sucrusal";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para sacar un registro*/
    public function uno($ID_Sucursal)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  * FROM sucursal WHERE ID_Sucursal = $ID_Sucursal";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para insertar */
    public function Insertar($ID_Sucursal, $Direccion)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT into sucursal(ID_Sucursal, Direccion) values ('$ID_Sucursal', '$Direccion')";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'Error al insertar en la base de datos';
        }
    }
    /*TODO: Procedimiento para actualizar */
    public function Actualizar($ID_Sucursal,$Direccion)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "update sucursal set ID_Sucursal='$$ID_Sucursal', Direccion='$Direccion'";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'error al actualizar el registro';
        }
    }
    /*TODO: Procedimiento para Eliminar */
    public function Eliminar($ID_Sucursal)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "delete from sucursal where ID_Sucursal = $ID_Sucursal";
        if (mysqli_query($con, $cadena)) {
            return true;
        } else {
            return false;
        }
    }
}