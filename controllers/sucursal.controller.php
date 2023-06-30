<?php
/*TODO: Requerimientos */
require_once("../config/configbanco.php");
require_once("../model/sucursal.model.php");
error_reporting(0);

$sucursal = new sucursal;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $sucursal->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $ID_Sucursal = $_POST["ID_Sucursal"];
        $datos = array();
        $datos = $sucursal->uno($ID_Sucursal);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $ID_Sucursal = $_POST["ID_Sucursal"];
        $Direccion = $_POST["Direccion"];

        $datos = array();
        $datos = $sucursal->Insertar($ID_Sucursal,$Direccion);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $ID_Sucursal = $_POST["ID_Sucursal"];
        $Direccion = $_POST["Direccion"];
    
        $datos = array();
        $datos = $sucursal->Actualizar($ID_Sucursal,$Direccion);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $ID_Sucursal = $_POST["ID_Sucursal"];
        $datos = array();
        $datos = $sucursal->Eliminar($ID_Sucursal);
        echo json_encode($datos);
        break;
}