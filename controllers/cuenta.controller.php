<?php
/*TODO: Requerimientos */
require_once("../config/configbanco.php");
require_once("../model/cuenta.model.php");
error_reporting(0);

$cuenta = new cuenta;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $cuenta->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $ID_Cuenta = $_POST["ID_Cuenta"];
        $datos = array();
        $datos = $cuenta->uno($ID_Cuenta);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $ID_Cuenta = $_POST["ID_Cuenta"];
        $Tipo = $_POST["Tipo"];
        $ID_Cliente = $_POST["ID_Cliente"];
        $ID_Sucursal = $_POST["ID_Sucursal"];

        $datos = array();
        $datos = $cuenta->Insertar($ID_Cuenta,$Tipo,$ID_Cliente,$ID_Sucursal);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $ID_Cuenta = $_POST["ID_Cuenta"];
        $Tipo = $_POST["Tipo"];
        $ID_Cliente = $_POST["ID_Cliente"];
        $ID_Sucursal = $_POST["ID_Sucursal"];
    
        $datos = array();
        $datos = $cuenta->Actualizar($ID_Cuenta,$Tipo,$ID_Cliente,$ID_Sucursal);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $ID_Cuenta = $_POST["ID_Cuenta"];
        $datos = array();
        $datos = $cuenta->Eliminar($ID_Cuenta);
        echo json_encode($datos);
        break;
}