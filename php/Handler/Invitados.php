<?php
require_once('../Util/RouteController.php');
require_once('../Util/Tools.php');
require_once('../Api/ApiInvitados.php');

use clases_pdo\ApiInvitados;

class Invitados extends RouteController
{

    public function executeGetInvitados()
    {
        try {
            $objInvitados = new ApiInvitados();
            $nuCodigoInvitado = Tools::GetValue('codigoInvitado', -1);
            $sbRespuesta = $objInvitados->getInvitados($nuCodigoInvitado);

            return json_encode(array('data' => $sbRespuesta));
        } catch (Exception $exc) {
            Tools::ThrowError($exc);
        }
    }

    public function executeGuardarInvitados()
    {
        try {
            $objInvitados = new ApiInvitados();

            $nuIdInvitado = Tools::GetValue('id', "");
            $sbNombres = Tools::GetValue('nombres', "");
            $sbApellidos = Tools::GetValue('apellidos', "");
            $sbCodigoUnico = Tools::GetValue('codigoUnico', "");
            $sbUrl = Tools::GetValue('url', "");

            $sbRespuesta = $objInvitados->guardarInvitados(
                $nuIdInvitado,
                $sbNombres,
                $sbApellidos,
                $sbCodigoUnico,
                $sbUrl
            );

            return json_encode(array('data' => $sbRespuesta));
        } catch (Exception $exc) {
            Tools::ThrowError($exc);
        }
    }

    public function executeGetClienteByCodigo()
    {
        try {
            $objClientes = new ApiCliente();

            $nuCodigoCliente = Tools::GetValue('codigoCliente', "");
            $sbRespuesta = $objClientes->getClienteByCodigo($nuCodigoCliente);

            return json_encode(array('data' => $sbRespuesta));
        } catch (Exception $exc) {
            Tools::ThrowError($exc);
        }
    }
}

$objInvitados = new Invitados();
$sbAction = Tools::GetValue('action');
print($objInvitados->execute($objInvitados, $sbAction));
?>
