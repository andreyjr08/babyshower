<?php

require_once dirname(__FILE__) . '/../Util/RouteController.php';
require_once dirname(__FILE__) . '/../Util/Tools.php';
require_once dirname(__FILE__) . '/../Api/ApiListaRegalos.php';

use clases_pdo\ApiListaRegalos;

class ListaRegalos extends RouteController
{

    public function executeGetListaRegalos()
    {
        try {
            $objListaRegalos = new ApiListaRegalos();
            session_start();
            $codigoInvitado = $_SESSION['codigoInvitado'];

            $sbListaRegalosInvitados = $objListaRegalos->getListaRegalosInvitado($codigoInvitado);

            if (count($sbListaRegalosInvitados) != 0) {
                return json_encode(array('data' => $sbListaRegalosInvitados, 'completo' => true));

            } else {
                $sbRespuesta = $objListaRegalos->getListaRegalos();
                return json_encode(array('data' => $sbRespuesta, 'completo' => false));

            }


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

    public function executeGuardarRegalosInvitado()
    {
        try {
            $objApiListaRegalos = new ApiListaRegalos();

            $codigoRegalo = Tools::GetValue('codigoRegalo', "");
            session_start();
            $codigoInvitado = $_SESSION['codigoInvitado'];

            $sbRespuesta = $objApiListaRegalos->guardarRegalosInvitado(
                $codigoRegalo,
                $codigoInvitado
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

    public function executeConsultarRegalosInvitado()
    {
        try {
            $objApiListaRegalos = new ApiListaRegalos();

            $codigosRegalo = Tools::GetValue('codigosRegalo', "");
            $sbRespuesta = $objApiListaRegalos->consultarRegalosInvitado($codigosRegalo);

            

            if (count($sbRespuesta) > 0) {
                return json_encode(array('data' => true));

            } else {
                return json_encode(array('data' => false));

            }

        } catch (Exception $exc) {
            Tools::ThrowError($exc);
        }
    }
}

$objListaRegalos = new ListaRegalos();
$sbAction = Tools::GetValue('action');
print($objListaRegalos->execute($objListaRegalos, $sbAction));
?>
