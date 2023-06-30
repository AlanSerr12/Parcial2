<?php
//TODO: Requerimientos 
require_once('../config/configbanco.php');
class cuenta
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "select * from cuentas";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para sacar un registro*/
    public function uno($ID_Cuenta)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  * FROM cuentas WHERE ID_Cuenta = $ID_Cuenta";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para insertar */
    public function Insertar($ID_Cuenta,$Tipo, $ID_Cliente, $ID_Sucursal)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT into cuentas(ID_Cuenta,Tipo, ID_Cliente, ID_Sucursal) values ('$ID_Cuenta','$Tipo', '$ID_Cliente', '$ID_Sucursal')";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'Error al insertar en la base de datos';
        }
    }
    /*TODO: Procedimiento para actualizar */
    public function Actualizar($ID_Cuenta,$Tipo, $ID_Cliente, $ID_Sucursal)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "update cuentas set ID_Cuenta='$ID_Cuenta',Tipo='$Tipo', ID_Cliente='$ID_Cliente', ID_Sucursal='$ID_Sucursal'";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'error al actualizar el registro';
        }
    }
    /*TODO: Procedimiento para Eliminar */
    public function Eliminar($ID_Cuenta)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "delete from cuentas where ID_Cuenta = $ID_Cuenta";
        if (mysqli_query($con, $cadena)) {
            return true;
        } else {
            return false;
        }
    }
}