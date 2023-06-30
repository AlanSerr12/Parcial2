<?php
/*TODO: Requerimientos */
require_once("../config/configbanco.php");
require_once("../model/cliente.model.php");
error_reporting(0);

$cliente = new cliente;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $cliente->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $ID_Cliente = $_POST["ID_Cliente"];
        $datos = array();
        $datos = $cliente->uno($ID_Cliente);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $ID_Cliente = $_POST["ID_Cliente"];
        $Nombre = $_POST["Nombre"];

        $datos = array();
        $datos = $cliente->Insertar($ID_Cliente,$Nombre);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $ID_Cliente = $_POST["ID_Cliente"];
        $Nombre = $_POST["Nombre"];
    
        $datos = array();
        $datos = $cliente->Actualizar($ID_Cliente,$Nombre);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $ID_Cliente = $_POST["ID_Cliente"];
        $datos = array();
        $datos = $cliente->Eliminar($ID_Cliente);
        echo json_encode($datos);
        break;
}