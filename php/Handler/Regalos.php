<?php
require_once('../Util/RouteController.php');
require_once('../Util/Tools.php');
require_once('../Api/ApiRegalos.php');

use clases_pdo\ApiRegalos;

class Regalos extends RouteController
{

    public function executeGetRegalos()
    {
        try {
            $objRegalos = new ApiRegalos();
            $nuCodigoRegalo = Tools::GetValue('codigoRegalo', -1);
            $sbRespuesta = $objRegalos->getRegalos($nuCodigoRegalo);

            return json_encode(array('data' => $sbRespuesta));
        } catch (Exception $exc) {
            Tools::ThrowError($exc);
        }
    }

    public function executeGuardarRegalo()
    {
        try {
            $objRegalos = new ApiRegalos();

            $codigoRegalo = Tools::GetValue('codigoRegalo', "");
            $descripcion = Tools::GetValue('descripcion', "");
            $categoria = Tools::GetValue('categoria', "");

            $sbRespuesta = $objRegalos->guardarRegalo(
                $codigoRegalo,
                $descripcion,
                $categoria
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

    public function executeGetCategorias()
    {
        try {
            $objCategorias = new ApiRegalos();

            $sbRespuesta = $objCategorias->getCategorias();

            return json_encode(array('data' => $sbRespuesta));
        } catch (Exception $exc) {
            Tools::ThrowError($exc);
        }
    }
}

$objRegalos = new Regalos();
$sbAction = Tools::GetValue('action');
print($objRegalos->execute($objRegalos, $sbAction));
?>
