<?php
/*TODO: Requerimientos */
require_once("../config/configbanco.php");
require_once("../model/transaccion.model.php");
error_reporting(0);

$transaccion = new transaccion;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $transaccion->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $ID_Transaccion = $_POST["ID_Transaccion"];
        $datos = array();
        $datos = $transaccion->uno($ID_Transaccion);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $ID_Transaccion = $_POST["ID_Transaccion"];
        $ID_Cuenta = $_POST["ID_Cuenta"];
        $Fecha = $_POST["Fecha"];
        $Monto = $_POST["Monto"];

        $datos = array();
        $datos = $transaccion->Insertar($ID_Transaccion, $ID_Cuenta, $Fecha, $Monto);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $ID_Transaccion = $_POST["ID_Transaccion"];
        $ID_Cuenta = $_POST["ID_Cuenta"];
        $Fecha = $_POST["Fecha"];
        $Monto = $_POST["Monto"];
    
        $datos = array();
        $datos = $transaccion->Actualizar($ID_Transaccion, $ID_Cuenta, $Fecha, $Monto);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $ID_Transaccion = $_POST["ID_Transaccion"];
        $datos = array();
        $datos = $transaccion->Eliminar($ID_Transaccion);
        echo json_encode($datos);
        break;
}